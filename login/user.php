<?php 
include "../dbconn.php";
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
if(empty($username)){
    header("location:index.php?error=username is required");
    exit();
}elseif(empty($password)){
    header("location:index.php?error=password is required");
    exit();
}
else{
$sql="SELECT * FROM admin where nom='$username' and pass='$password'";
$resultat=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultat)===1){
    $row=mysqli_fetch_assoc($resultat);
    $ausername=$row['nom'];
    $apassword=$row['pass'];
    $_SESSION['acin']=$row['cin'];
    $_SESSION['ausername'] = $ausername;
    $_SESSION['apassword'] = $apassword;
    header("location:../admin/index.php");
    exit();
}else{
    header("location:index.php?error=n'existe pas");
    exit();
}
}
?>