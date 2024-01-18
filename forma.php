<?php
// Database connection
include( 'config2.php' );

// Check connection
if ( $con->connect_error ) {
    die( 'Connection failed: ' . $con->connect_error );
}

$success = true;

// ISSUE
$registrationCentre = $_POST[ 'RegistrationCentre' ];
$villageTown = $_POST[ 'Town' ];
$localGovernmentArea = $_POST[ 'LocalGovernmentArea' ];
$state = $_POST[ 'State' ];
$birthCertificateNumber = $_POST[ 'BirthCertificateNumber' ];
$birthRegisterVolume = $_POST[ 'BirthRegisterVolume' ];
$entryNumber = $_POST[ 'EntryNumber' ];
$dateOfRegistration = $_POST[ 'DateOfRegistration' ];
$staffName = $_POST[ 'StaffName' ];

// Insert data into the first table
$sql1 = "INSERT INTO issue (entrynumber, registrationcentre, lga, town, state, birthcertificatenumber, volume,  dateofregistration, staff)
VALUES ('$entryNumber', '$registrationCentre', '$localGovernmentArea', '$villageTown','$state', '$birthCertificateNumber', '$birthRegisterVolume', '$dateOfRegistration', '$staffName')";

if ( $con->query( $sql1 ) !== TRUE ) {
    error_log( 'Error: ' . $sql1 . ' ' . $con->error );
    $success = false;
}

// particulars of child
$firstName = $_POST[ 'FirstName' ];
$middleName = $_POST[ 'MiddleName' ];
$lastName = $_POST[ 'LastName' ];
$dateOfBirth = $_POST[ 'DateOfBirth' ];
$birthOrder = $_POST[ 'BirthOrder' ];
$sex = $_POST[ 'Sex' ];
$placeOfOccurrence = $_POST[ 'PlaceOfOccurrence' ];
$villageTown2 = $_POST[ 'Town' ];
$typeOfBirth = $_POST[ 'TypeOfBirth' ];

$sql2 = "INSERT INTO particularsofchild (entrynumber, FirstName, MiddleName, LastName, dob, birthOrder, sex, placeofbirth, town, typeofbirth)
VALUES ('$entryNumber','$firstName', '$middleName', '$lastName', '$dateOfBirth', '$birthOrder', '$sex', '$placeOfOccurrence', '$villageTown2', '$typeOfBirth')";

if ( $con->query( $sql2 ) !== TRUE ) {
    error_log( 'Error: ' . $sql2 . ' ' . $con->error );
    $success = false;
}

// particulars of mother
$firstNamem = $_POST[ 'FirstNameM' ];
$middleNamem = $_POST[ 'MiddleNameM' ];
$lastNamem = $_POST[ 'LastNameM' ];
$ageatdateOfBirth = $_POST[ 'AgeatBirthOfChild' ];
$maritalstatus = $_POST[ 'MaritalStatus' ];
$phonenumber = $_POST[ 'PhoneNumber' ];
$ninnumber = $_POST[ 'NINNumber' ];
$nationality = $_POST[ 'Nationality' ];
$stateoforigin = $_POST[ 'StateOfOrigin' ];
$lori = $_POST[ 'LorI' ];
$occupation = $_POST[ 'Occupation' ];
$aor = $_POST[ 'AoR' ];

$sql3 = "INSERT INTO particularsofmother (entrynumber, firstname, middlename, lastname, ageatdob, maritalstatus, phonenumber, ninnumber, nationality, stateoforigin, proficiency, occupation, aoresidence)
VALUES ('$entryNumber','$firstNamem', '$middleNamem', '$lastNamem', '$ageatdateOfBirth', '$maritalstatus', '$phonenumber', '$ninnumber', '$nationality', '$stateoforigin', '$lori','$occupation', '$aor')";

if ( $con->query( $sql3 ) !== TRUE ) {
    error_log( 'Error: ' . $sql3 . ' ' . $con->error );
    $success = false;
}

// particulars of father
$firstNameF = $_POST[ 'FirstNameF' ];
$middleNameF = $_POST[ 'MiddleNameF' ];
$lastNameF = $_POST[ 'LastNameF' ];
$ageatdateOfBirthF = $_POST[ 'AgeatBirthOfChildF' ];
$maritalstatusF = $_POST[ 'MaritalStatusF' ];
$phonenumberF = $_POST[ 'PhoneNumberF' ];
$ninnumberF = $_POST[ 'NINNumberF' ];
$nationalityF = $_POST[ 'NationalityF' ];
$stateoforiginF = $_POST[ 'StateOfOriginF' ];
$loriF = $_POST[ 'LorIF' ];
$occupationF = $_POST[ 'OccupationF' ];

$sql4 = "INSERT INTO particularsoffather (entrynumber, firstname, middlename, lastname, ageatdob, maritalstatus, phonenumber, ninnumber, nationality, stateoforigin, proficiency, occupation)
VALUES ('$entryNumber','$firstNameF', '$middleNameF', '$lastNameF', '$ageatdateOfBirthF', '$maritalstatusF', '$phonenumberF', '$ninnumberF', '$nationalityF', '$stateoforiginF', '$loriF','$occupationF')";

if ( $con->query( $sql4 ) !== TRUE ) {
    error_log( 'Error: ' . $sql4 . ' ' . $con->error );
    $success = false;
}

// particulars of informant
$firstNameI = $_POST[ 'FirstNameI' ];
$middleNameI = $_POST[ 'MiddleNameI' ];
$lastNameI = $_POST[ 'LastNameI' ];
$dateOfBirthI = $_POST[ 'DOBI' ];
$aorI = $_POST[ 'AoRI' ];
$sexI = $_POST[ 'SexI' ];
$relationshiptochildI = $_POST[ 'RoCI' ];
$phonenumberI = $_POST[ 'phonenumberI' ];
$ninI = $_POST[ 'ninnumberI' ];

$sql5 = "INSERT INTO particularsofinformant (entrynumber, firstname, middlename, lastname, dob, aoresidence, sex, relationshiptochild, phonenumber, ninnumber)
VALUES ('$entryNumber','$firstNameI', '$middleNameI', '$lastNameI', '$dateOfBirthI', '$aorI', '$sexI', '$relationshiptochildI', '$phonenumberI', '$ninI')";

if ( $con->query( $sql5 ) !== TRUE ) {
    error_log( 'Error: ' . $sql5 . ' ' . $con->error );
    $success = false;
}

if ( $success ) {
    echo 'Success';
    // Send a success message back to the client
} else {
    echo 'Error: Birth registration failed';
}

$con->close();
?>
