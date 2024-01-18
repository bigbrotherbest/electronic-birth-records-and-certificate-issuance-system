<?php
// Database connection details
include( 'config2.php' );

// Check connection
if ( $con->connect_error ) {
    die( 'Connection failed: ' . $con->connect_error );
}

function searchDetailsByNIN( $ninNumber ) {
    global $con;

    // Check if the connection is valid
    if ( $con === null ) {
        die( 'Database connection failed.' );
    }

    // SQL query to retrieve details from particularsofchild based on ID
    $sql = "SELECT p.*
            FROM particularsofchild p
            JOIN particularsoffather f ON p.id = f.id
            JOIN particularsofmother m ON p.id = m.id
            WHERE f.ninnumber = ? OR m.ninnumber = ?";

    // Use prepared statement to prevent SQL injection
    $stmt = $con->prepare( $sql );

    // Check if the statement is valid
    if ( !$stmt ) {
        die( 'Error during query preparation: ' . $con->error );
    }

    $stmt->bind_param( 'ss', $ninNumber, $ninNumber );

    // Execute the query
    $stmt->execute();

    // Check for errors
    if ( $stmt->error ) {
        die( 'Error during query execution: ' . $stmt->error );
    }

    // Get the result
    $result = $stmt->get_result();

    // Fetch the data
    $details = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    return $details;
}

// Handle the form submission

// Check if the form has been submitted
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    // Get the NIN number from the form
    $ninNumber = $_POST[ 'ninNumber' ];

    echo "<div class='message'>";

    if ( !is_numeric( $ninNumber ) ) {
        echo "<p class='head1'>Invalid NIN number. Please enter a valid NIN.</p>";
        $buttonText = 'Go Back';
        $buttonLink = 'javascript:self.history.back()';
    } else {
        // Assuming you have a function to search details based on NIN
        $details = searchDetailsByNIN( $ninNumber );

        if ( $details ) {
            echo '<p>Details found</p>';
            echo '<p class="head2">' . ( $details[ 'firstname' ] ?? 'N/A' ) . '</p>';
            echo '<p class="head2">' . ( $details[ 'middlename' ] ?? 'N/A' ) . '</p>';
            echo '<p class="head2"> ' . ( $details[ 'lastname' ] ?? 'N/A' ) . '</p>';
            $buttonText = 'Download Birth Certificate';
            $buttonLink = 'downloadimage.php';
        } else {
            echo '<p class="head1">NIN number not found. Please try another one.</p>';
            $buttonText = 'Go Back';
            // $buttonLink = 'javascript:self.history.back()';
        }
    }

    echo '</div><br>';

    // Provide a styled button to go back or download
    echo "<form action='downloadimage2.php' method='post'>";
    echo "<button type='submit' class='btn'>$buttonText</button>";
    echo '</form>';
    echo "<link rel='stylesheet' type='text/css' href='style1.css'>";

    // Close the database connection ( assuming $con is the database connection variable )
    $con->close();
}
?>
