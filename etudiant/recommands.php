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
    session_start();
    $cin2=$_SESSION['cin2'];
      include "../dbconn.php";
      $sql="SELECT * FROM recomands WHERE cinetu='$cin2'";
      $resultat=mysqli_query($conn,$sql);
    ?>
    <table>
        <tr>
            <th>IdBook</th>
            <th>Name</th>
            <th>Cin</th>
            <th>Date</th>
            <th>Date retour</th>
        </tr>
    <?php
    while($row=mysqli_fetch_assoc($resultat)) {?>
       <tr>
          <td><?php echo $row['idbook']?></td>
          <td><?php echo $row['namebook']?></td>
          <td><?php echo $row['cinetu']?></td>
          <td><?php echo $row['date']?></td>
          <td><?php echo $row['dateretour']?></td>
       </tr>
    <?php } ?>
    </table>
</body>
</html>