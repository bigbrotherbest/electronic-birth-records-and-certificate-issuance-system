<?php
session_start();

include( 'config.php' );
if ( !isset( $_SESSION[ 'valid' ] ) ) {
    header( 'Location: npcofficials.php' );
}
$username = isset( $_SESSION[ 'valid' ] ) ? $_SESSION[ 'valid' ] : '';
// Retrieve the last used entry number from the session or set a default value
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<link rel = 'stylesheet' href = 'dashboarrd.css'>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>

<body>
<div class = 'hearder'>
<div class = 'logo'>
National Birth Registration Portal
</div>
<form action = 'logoutprocess.php'>
<button class = 'headerbutton'>
LOG OUT
</button>

</form>

</div>

<div class = 'bodycontent'>
<h1>
Welcome <?php echo htmlspecialchars( $username );
?>
</h1>

<button class = 'registerbirth1'>
Register Birth
</button>
<button class = 'registerbirth2'>
View Records
</button>
</div>

</body>

<script src = 'dashboard.js'>

</script>

<script src = 'firstfirm.js'>

</script>

<script src = 'firstfirm.js'>

</script>

<script src = 'directocertificate.js'>

</script>

</html>