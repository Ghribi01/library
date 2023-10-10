<?php 
include "../dbconn.php";
if(isset($_POST["idd"]) && $_POST["nomm"] && $_POST["author"] && $_POST["year"] && $_POST["avai"] && $_POST["poster"]){
$id=$_POST["idd"];
$name=$_POST["nomm"];
$author=$_POST["author"];
$year=$_POST["year"];
$avai=$_POST["avai"];
$poster=$_POST["poster"];
$sql="INSERT INTO book VALUES('$id','$name','$author','$year','$avai','$poster')";
$resultat=mysqli_query($conn,$sql);
if($resultat===true){
    header("location:index.php?error=Book Added");
    exit();
}else{
    header("location:index.php?error=there is an error");
    exit();}
}else{
    header("location:index.php?error=type something");
    exit();  
}
?>