<?php
// Ensure that the session has started
include "../dbconn.php";
session_start();
// Access the session variables
$username2=$_SESSION['username2'];
$password2=$_SESSION['password2'];
$cin2=$_SESSION['cin2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/style1.css">
    <title>Profile</title>
</head>
<body>
    <form action="" method="post">
        <img src="./images/ap.png" alt="">
        <label for="cin">Cin:</label>
        <p id="cin"><?php echo $cin2; ?></p>
        <label for="nom">Nom:</label>
        <p id="nom"><?php echo $username2; ?></p>
        <label for="pass">Password:</label>
        <p id="pass"><?php echo $password2; ?></p>
    </form>
</body>
</html>
