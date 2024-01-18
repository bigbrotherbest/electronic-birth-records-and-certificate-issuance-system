<!-- <?php session_start(); 

include('databaseconnection.php');
if(isset($_POST['login']));
{
    $user_unsafe=$_POST['username'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($con, $user_unsafe);
    $pass = mysqli_real_escape_string($con, $pass_unsafe);

    $query = mysqli_query($con, "select * from login where username= '$user' and password = '$pass'" ) or die (mysqli_error($con));

    $row = mysqli_fetch_array($query);

    $name = $row['username'];
    $counter = mysqli_num_rows($query);
    $id=$row['id'];

    if ($counter == 0){
        echo "<script type = 'text/javascript'>alert('Username not registered');
        document.location='registrarlogin.php'</script>";
    } else{
        $_SESSION['id']=$id;
        $_SESSION['username']=$name;

        echo "<script type='text/javascript'>document.location='dashboard.php'</script>";
    }

    

}

?>


<?php 


include('databaseconnection.php');

if(isset($_POST['signup'])) { // Change from 'login' to 'signup'
    $user_unsafe = $_POST['username'];
    $pass_unsafe = $_POST['password'];

    $user = mysqli_real_escape_string($con, $user_unsafe);
    $pass = mysqli_real_escape_string($con, $pass_unsafe);

    $query = mysqli_query($con, "SELECT * FROM login WHERE username = '$user'") or die(mysqli_error($con));

    $counter = mysqli_num_rows($query);

    if ($counter > 0) {
        echo "<script type='text/javascript'>alert('Username already exists. Please choose a different username.');
              document.location='signup.php'</script>";
    } else {
        // Perform the signup process
        mysqli_query($con, "INSERT INTO login (username, password) VALUES ('$user', '$pass')") or die(mysqli_error($con));
        
        $query = mysqli_query($con, "SELECT * FROM login WHERE username = '$user'") or die(mysqli_error($con));
        $row = mysqli_fetch_array($query);
        
        $id = $row['id'];
        $name = $row['username'];

        $_SESSION['id'] = $id;
        $_SESSION['username'] = $name;

        echo "<script type='text/javascript'>document.location='dashboard.php'</script>";
    }
}
?>



 -->
