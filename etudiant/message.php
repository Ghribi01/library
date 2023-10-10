<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style4.css">
    <title>Document</title>
</head>
<body>
<?php 
include "../dbconn.php";
session_start();
$cin=isset($_SESSION['cin2']) ? $_SESSION['cin2'] :'' ;
$sql="SELECT * FROM messages where cin='$cin'";
$resultat=mysqli_query($conn,$sql);
?>
<table>
<tr>
    <th>Cin</th>
    <th>Message</th>
    <th>Date reception</th>
</tr>
<?php while($row=mysqli_fetch_assoc($resultat)){?>
    <tr>
    <td><?php echo $row['cin']?></td>
    <td><?php echo $row['message'] ?></td>
    <td><?php echo $row['date']?></td>
    <td><a href="./suppmsg.php?message=<?php echo $row['cin'] ?>" class="btn">Supprimer</a></td>
</tr>
    <?php } ?>
</table>
    
</body>
</html>