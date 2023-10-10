<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
    <form action="inscription.php" method="post">
        <div class="titre"><h2>Inscrivez vous</h2></div>
        <?php if(isset($_GET["error"])){?>
            <p class="error"><?php echo $_GET["error"]?></p>
        <?php }?>
        <input class="text" type="text" name="cin" id="cin" placeholder="CIN">
        <input class="text" type="text" name="nom" id="nom" placeholder="Nom">
        <input class="text" type="text" name="prenom" id="prenom" placeholder="Prenom">
        <input class="text" type="text" name="email" id="email" placeholder="Email">
        <label for="grp">Choisissez votre groupe:</label>
        <select class="select" name="grp" id="grp">
            <optgroup label="L1">
                <option value="L1CS01">L1CS01</option>
                <option value="L1CS02">L1CS02</option>
                <option value="L1CS03">L1CS03</option>
                <option value="L1CS04">L1CS04</option>
            </optgroup>
              <optgroup label="L2">
                <option value="L2CS01">L2CS01</option>
                <option value="L2CS02">L2CS02</option>
                <option value="L2CS03">L2CS03</option>
                <option value="L2CS04">L2CS04</option>
            </optgroup>
            <optgroup label="L3">
                <option value="L3CS01">L3CS01</option>
                <option value="L3CS02">L3CS02</option>
                <option value="L3CS03">L3CS03</option>
                <option value="L3CS04">L3CS04</option>
            </optgroup>
        </select>
        <label for="img">Charger photo de profile :</label>
        <input class="file" type="file" name="img" id="img">
        <input class="text" type="text" name="username" id="username" placeholder="Username">
        <input class="text" type="text" name="password" id="password" placeholder="Password">
        <div class="buttons">
            <input class="btn" type="submit" value="S'inscrire">
            <a href="../Home/index.php" class="btn">Retourner</a>
        </div>
        
    </form>
</body>
</html>