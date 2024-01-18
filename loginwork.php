<?php session_start();

include('config.php');

if(isset ($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // verifying the unique email 
    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");
    if (mysqli_num_rows($verify_query) !=0){
        echo "<script type = 'text/javascript'>alert('Username not registered');
        document.location='registrarlogin.php'</script>";
    } else{
        mysqli_query($con, "INSERT INTO users(Email,Password) VALUES('$email', '$password',)") or die ("Error occured");
        echo "<script type = 'text/javascript'>alert('Username not registered')</script>";

    }
}else{}

?>