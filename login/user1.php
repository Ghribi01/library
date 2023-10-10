<?php
include "../dbconn.php";
session_start();
$username=$_POST["user1"];
$password=$_POST["pass1"];
if(empty($username)){
    header("location:index.php?error1=username is required");
    exit();
}elseif(empty($password)){
    header("location:index.php?error1=password is required");
    exit();
}
else{
$sql1="SELECT * FROM etudiant where username='$username' and password='$password'";
$resultat1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($resultat1)===1){
    $row=mysqli_fetch_assoc($resultat1);
    $username2=$row['username'];
    $password2=$row['password'];
   $_SESSION['cin2']=$row['cin'];
   $_SESSION['username2']=$username2;
   $_SESSION['password2']=$password2;
    header("location:../etudiant/index.php");
    exit();
}else{
    header("location:index.php?error1=n'existe pas");
    exit();
}
}
?>