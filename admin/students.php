<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style3.css">
    <title>Document</title>
</head>
<body>
<?php
include "../dbconn.php";
$sql="SELECT * FROM etudiant";
$resultat=mysqli_query($conn,$sql);
?>
<table>
<tr>
    <th>Cin</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
</tr>
<?php while($row=mysqli_fetch_assoc($resultat)) {?>
<tr>
    <td><?php echo $row['cin']?></td>
    <td><?php echo $row['nom']?></td>
    <td><?php echo $row['prenom']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['password']?></td>
    <td><a href="./suppstu.php?cin=<?php echo $row['cin'] ?>" class="btn">Supprimer</a></td>
</tr>
   
<?php }?>
</table>
</body>
</html>