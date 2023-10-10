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
      $sql="SELECT * FROM book";
      $resultat=mysqli_query($conn,$sql);
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Author</th>
            <th>Year</th>
            <th>Availibiliter</th>
            <th>Poster</th>
        </tr>
    <?php
    while($row=mysqli_fetch_assoc($resultat)) {?>
       <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['author']?></td>
          <td><?php echo $row['year']?></td>
          <td><?php echo $row['availibility']?></td>
          <td><img src="<?php echo $row['poster']?>" alt=""></td>
          <td><a href="./suppbook.php?id=<?php echo $row['id']?>" class="btn">Supprimer</a></td>
       </tr>
    <?php } ?>
    </table>
</body>
</html>