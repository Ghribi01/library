<?php
include "../dbconn.php";

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Supprimer le livre de la base de données
    $sql = "DELETE FROM book WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:index.php?error=livre supprimée');
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
