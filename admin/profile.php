<?php
// Ensure that the session has started
session_start();

// Access the session variables
$ausername = isset($_SESSION['ausername']) ? $_SESSION['ausername'] : '';
$apassword = isset($_SESSION['apassword']) ? $_SESSION['apassword'] : '';
$acin=isset($_SESSION['acin']) ? $_SESSION['acin'] :'' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style/style1.css">
    <title>Profile</title>
</head>
<body>
    <form action="" method="post">
        <img src="images/ap.png" alt="">
        <label for="cin">Cin:</label>
        <p id="cin"><?php echo $acin; ?></p>
        <label for="nom">Nom:</label>
        <p id="nom"><?php echo $ausername; ?></p>
        <label for="pass">Password:</label>
        <p id="pass"><?php echo $apassword; ?></p>
    </form>
</body>
</html>
