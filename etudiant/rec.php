<?php
include "../dbconn.php";
session_start();
if(isset($_POST["idb"]) && $_POST["desc"]){
$idb = $_POST["idb"];
$desc = $_POST["desc"];
$date = date('Y-m-d');
$dater=date('Y-m-d', strtotime('+1 month'));
$cin = $_SESSION['cin2'];

$sql = "SELECT * FROM book WHERE id='$idb'";
$resultat = mysqli_query($conn, $sql);

if ($resultat) {
    $row = mysqli_fetch_assoc($resultat);
    $nbook = $row['name'];
    $sql1 = "INSERT INTO recomands VALUES('$idb', '$nbook', '$cin', '$date','$dater')";
    $resultat1 = mysqli_query($conn, $sql1);

    if ($resultat1) {
        header('location:index.php?error=fait avec succès');
        exit();
    } else {
        header('location:index.php?error=Error in query execution');
        exit();
    }
} else {
    header('location:index.php?error=Error in query execution');
        exit();
}}else{
    header('location:index.php?error=type something');
        exit();
}
?>
