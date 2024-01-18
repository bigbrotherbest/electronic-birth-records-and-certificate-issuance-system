<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Urbanist:wght@900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In with your credentials</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="pagecontent">

    <?php 

include('config.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Check if the entered password matches a specific password
        $specific_password = "osregistrar"; // Replace with the specific password you want to compare against
    
        if ($password != $specific_password) {
            echo "<script type='text/javascript'>alert('Incorrect Key');
                document.location='registrarlogin.php'</script>";
        } else {
            // Verify the unique email
            $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");
            
            if (mysqli_num_rows($verify_query) != 0) {
             
                echo "<script type='text/javascript'>alert('Email already registered');
                    document.location='registrarlogin.php'</script>";
            } else {
                // Insert into the database
               mysqli_query ($con, "INSERT INTO users(Email, Password) VALUES('$email', '$password')") or die("Error occurred");
                echo "<div class= 'message'>
                <p> Registration Succesful</p> 
                </div> <br>";
                echo "<a href='npcofficials.php'><button class='btn'> Login Now</button>";
                // echo "<script type='text/javascript'>alert('User registered successfully');</script>";
            }
        }
    } else {

?>
        <div class="logologin">
            National Birth Registration Portal
        </div>

        <div class="whitebox">
            <div class="whitebox-text">

                <h1 class="whitebox-text1">
                    Admin
                </h1>

                <h2 class="whitebox-text2">
                    Enter Email Address and Unique key to register staff
                </h2>
            </div>

          
            <form action="" method="post" class="inputing">
                <h1>Email Address</h1>
                <input type="text"  id = "email" name= "email" class="inputing-1">

                <h2>Unique Key</h2>
                <input type="password" id = "password" name= "password"class="inputing-2">



                <button type="submit" name="submit" class="submit-button">
                    Register
                </button>
</form>






        </div>

        <?php } ?>

    </div>
</body>

<script src="login.js">

</script>

</html>