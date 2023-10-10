<?php
include "../dbconn.php";

if(isset($_GET['idbook']) && is_numeric($_GET['idbook'])) {
    $id = $_GET['idbook'];

    $sql = "DELETE FROM recomands WHERE idbook = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:index.php?error=commande supprimée');
        exit();
    } else {
        header('location:index.php?error=il ya un erreur');
        exit();
    }
} else {
    header('location:index.php?error=il ya un erreur');
    exit();
}
?>
