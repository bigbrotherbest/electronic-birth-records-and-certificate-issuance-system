<!-- <?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the homepage
header("Location: homepage.php");
exit();
?> -->

<?php


// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Check if the session has been terminated
if (session_status() === PHP_SESSION_NONE) {
    $statusMessage = "Session has been terminated successfully.";
} else {
    $statusMessage = "Session termination failed.";
}

// Echo JavaScript code to output the status message in the console
echo "<script>console.log('$statusMessage');</script>";

// Redirect back to homepage.php
header("Location: homepage.php");
exit();
?>

