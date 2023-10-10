<?php
$uname="localhost";
$sname="root";
$password="";
$dbname="testdb";
$conn=mysqli_connect($uname,$sname,$password,$dbname);
if(!$conn){
    echo "Connection Failed!";
}
?>