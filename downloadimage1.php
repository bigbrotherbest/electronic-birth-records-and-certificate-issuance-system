<?php
// Ensure that this script is accessed via POST method
include( 'config2.php' );

// Check connection
if ( $con->connect_error ) {
    die( 'Connection failed: ' . $con->connect_error );
}

$ninNumber = isset( $_POST[ 'ninNumber' ] ) ? $_POST[ 'ninNumber' ] : '';

// Function to search for details based on NIN number

function searchDetailsByNIN( $ninNumber, $con ) {
    // Perform your SQL query here to retrieve the necessary details
    // Modify the SQL query as per your updated database schema
    $sql = "SELECT issue.*, 
    particularsofchild.firstname AS child_firstname, particularsofchild.middlename AS child_middlename, particularsofchild.lastname AS child_lastname,
    particularsoffather.firstname AS father_firstname, particularsoffather.middlename AS father_middlename, particularsoffather.lastname AS father_lastname,
    particularsofmother.firstname AS mother_firstname, particularsofmother.middlename AS mother_middlename, particularsofmother.lastname AS mother_lastname,
    particularsofinformant.firstname AS informant_firstname, particularsofinformant.middlename AS informant_middlename, particularsofinformant.lastname AS informant_lastname
    FROM issue 
    LEFT JOIN particularsofchild ON issue.ID = particularsofchild.ID 
    LEFT JOIN particularsoffather ON issue.ID = particularsoffather.ID 
    LEFT JOIN particularsofmother ON issue.ID = particularsofmother.ID 
    LEFT JOIN particularsofinformant ON issue.ID = particularsofinformant.ID 
    WHERE particularsoffather.NINNumber = ? OR particularsofmother.NINNumber = ?";

    // Use prepared statement to prevent SQL injection
    $stmt = $con->prepare( $sql );

    if ( !$stmt ) {
        die( 'Error during query preparation: ' . $con->error );
    }

    $stmt->bind_param( 'ss', $ninNumber, $ninNumber );

    $stmt->execute();

    if ( $stmt->error ) {
        die( 'Error during query execution: ' . $stmt->error );
    }

    $result = $stmt->get_result();

    $details = $result->fetch_assoc();

    $stmt->close();

    return $details;
}

// Call the function to retrieve details from the database
$details = searchDetailsByNIN( $ninNumber, $con );

// Check if details were found
if ( $details ) {
    $registrationcenter = $details[ 'registrationcentre' ];
    $town = $details[ 'town' ];
    $state = $details[ 'state' ];
    $lga = $details[ 'lga' ];
    $volume = $details[ 'volume' ];
    $date = $details [ 'dateofregistration' ];

    $sex = $details[ 'sex' ];
    $dateOfBirth = $details[ 'dob' ];
    $placeOfBirth = $details[ 'placeofbirth' ];

    $dateObj = new DateTime( $date );

    // Extract day, month, and year separately
    $day = $dateObj->format( 'd' );
    // Day with leading zeros ( 01 - 31 )
    $month = $dateObj->format( 'm' );
    // Month with leading zeros ( 01 - 12 )
    $year = $dateObj->format( 'Y' );

    // Load the existing image
    $imagePath = 'C:/xampp/htdocs/birthcertificate.jpg';
    // Update with the correct path
    $image = @imagecreatefromjpeg( $imagePath );

    $fontSize = 16;

    // Check if image creation is successful
    if ( $image !== false ) {
        // Set text color
        $textColor = imagecolorallocate( $image, 0, 0, 0 );

        // Write details on the image
        imagettftext( $image, 20, 0, 180, 360, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $registrationcenter );
        imagettftext( $image, 20, 0, 120, 400, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $town );
        imagettftext( $image, 20, 0, 120, 440, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $lga );
        imagettftext( $image, 20, 0, 120, 480, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $state );
        imagettftext( $image, 20, 0, 120, 500, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $sex );
        imagettftext( $image, 20, 0, 120, 520, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $dateOfBirth );
        imagettftext( $image, 20, 0, 120, 540, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $placeOfBirth );

        $fulldate = $day . '         ' . $month . '            ' . $year;
        imagettftext( $image, 20, 0, 30, 560, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $fulldate );
        // fullchildname
        $fullChildName =  $details[ 'child_lastname' ] . ' ' . $details[ 'child_middlename' ] . ' ' . $details[ 'child_firstname' ];
        imagettftext( $image, 20, 0, 180, 620, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $fullChildName );

        // fullchildname
        $fullfathersName =  $details[ 'father_lastname' ] . ' ' . $details[ 'father_middlename' ] . ' ' . $details[ 'father_firstname' ];
        imagettftext( $image, 20, 0, 180, 790, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $fullfathersName );

        $fullmothersName =  $details[ 'mother_lastname' ] . ' ' . $details[ 'mother_middlename' ] . ' ' . $details[ 'mother_firstname' ];
        imagettftext( $image, 20, 0, 180, 840, $textColor, 'C:\xampp\htdocs\Montserrat-Medium.ttf', $fullmothersName );
        // Clean the output buffer
        ob_clean();

        // Set the content type header to be an image
        header( 'Content-Type: image/jpeg' );

        // Set the filename for download
        header( 'Content-Disposition: attachment; filename="modified_image.jpg"' );

        // Output the modified image as JPEG
        imagejpeg( $image );

        // Free up memory
        imagedestroy( $image );

        // Terminate the script
        exit();
    } else {
        echo 'Failed to load the image.';
    }
} else {
    echo 'NIN number not found. Please try another one.';
}

$con->close();

?>
