<?php 
$con = mysqli_connect("localhost", "root", "","authenticationsys_db");

// checking the connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
?>