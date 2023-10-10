<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style4.css">
    <title>Document</title>
</head>
<body>
    <?php
      include "../dbconn.php";
      $sql="SELECT * FROM recomands";
      $resultat=mysqli_query($conn,$sql);
    ?>
    <table>
        <tr>
            <th>IdBook</th>
            <th>Name</th>
            <th>Cin</th>
            <th>Date</th>
            <th>Date Retour</th>
        </tr>
    <?php
    while($row=mysqli_fetch_assoc($resultat)) {?>
       <tr>
          <td><?php echo $row['idbook']?></td>
          <td><?php echo $row['namebook']?></td>
          <td><?php echo $row['cinetu']?></td>
          <td><?php echo $row['date']?></td>
          <td><?php echo $row['dateretour']?></td>
          <td><a href="./supprec.php?idbook=<?php echo $row['idbook'] ?>" class="btn">Supprimer</a></td>
       </tr>
    <?php } ?>
    </table>
</body>
</html>