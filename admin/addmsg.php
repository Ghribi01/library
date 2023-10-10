<?php 
include "../dbconn.php";
if(isset($_POST["cintext"]) && $_POST["msg"]){
$cin=$_POST["cintext"];
$msg=$_POST["msg"];
$date=date("Y-m-d");
$sql="INSERT INTO messages VALUES('$cin','$msg','$date')";
$resultat=mysqli_query($conn,$sql);
if($resultat===true){
    header("location:index.php?error=message Added");
    exit();
}else{
    header("location:index.php?error=there is an error");
    exit();}

}else{
    header("location:index.php?error=type something");
    exit();}

?>