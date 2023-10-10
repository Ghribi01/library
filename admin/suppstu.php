<?php
include "../dbconn.php";
if(isset($_GET['cin']) && is_numeric($_GET['cin'])){
    $cin=$_GET['cin'];
    $sql="DELETE FROM etudiant WHERE cin=$cin";
    $resultat=mysqli_query($conn,$sql);
if ($resultat) {
    header('location:index.php?error=etudiant supprimée');
    exit();
} else {
    header('location:index.php?error=il ya un erreur');
    exit();
}
}else{      header('location:index.php?error=il ya un erreur');
    exit();
}

?>