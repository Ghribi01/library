<?php
include "../dbconn.php";

if(isset($_GET['message'])) {
    $mesg = $_GET['message'];
    $sql = "DELETE FROM messages WHERE 'message' = $mesg";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:index.php?error=message supprimée');
        exit();
    } else {
        header('location:index.php?error=il ya un erreur');
        exit();
    }
} else {
    echo "ID de Message non valide.";
}
?>