<?php
session_start();
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<link href = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap' rel = 'stylesheet'>
<link href = 'https://fonts.googleapis.com/css2?family=Inter&family=Urbanist:wght@900&display=swap' rel = 'stylesheet'>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Log In with your credentials</title>
<link rel = 'stylesheet' href = 'login2.css'>
</head>

<body>
<div class = 'pagecontent'>
<?php

include( 'config.php' );
if ( isset( $_POST[ 'submit' ] ) ) {
    $email = mysqli_real_escape_string( $con, $_POST[ 'email' ] );

    $result = mysqli_query( $con, "SELECT * FROM users WHERE Email='$email' " ) or die( 'Select Error' );
    $row = mysqli_fetch_assoc( $result );

    if ( is_array( $row ) && !empty( $row ) ) {
        $_SESSION[ 'valid' ] = $row[ 'Email' ];
        //    $_SESSION[ 'username' ] = $row[ 'Username' ];
        //    $_SESSION[ 'age' ] = $row[ 'Age' ];
        //    $_SESSION[ 'id' ] = $row[ 'Id' ];
    } else {
        echo "<script type='text/javascript'>alert('User Not Registered');
                document.location='npcofficials.php'</script>";

    }
    if ( isset( $_SESSION[ 'valid' ] ) ) {
        header( 'Location: dashboard.php' );
    }
} else {

    ?>
    <div class = 'logologin'>
    National Birth Registration Portal
    </div>

    <div class = 'whitebox'>
    <div class = 'whitebox-text'>

    <h1 class = 'whitebox-text1'>
    Welcome Back
    </h1>

    <h2 class = 'whitebox-text2'>
    Enter your credentials to access your account
    </h2>
    </div>

    <form action = '' method = 'post' class = 'inputing'>
    <h1>Email Address</h1>
    <input type = 'text'  id = 'email' name = 'email' class = 'inputing-1'>
    <button name = 'submit' class = 'submit-button'>
    LOG IN
    </button>
    </form>

    </div>
    <?php }
    ?>

    </div>
    </body>

    <script src = 'login.js'>

    </script>

    </html>