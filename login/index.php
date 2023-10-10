<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
      <div class="container">
        <form action="user.php" method="post">
          <div class="titre">
            <h2>Connectez vous Admin</h2>
          </div>
          <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']?></p>
          <?php }?>
          <input class="text" type="text" name="username" id="username" placeholder="Username">
          <input class="text" type="password" name="password" id="password" placeholder="Password">
          <button class="btn" type="submit">Se connecter</button>
          <input class="check" type="checkbox" name="" id="b1">
          <label for="b1">Garder ma session active</label>
          <hr>
          <p>Vous n'avez pas de compte ?</p>
          <a href="../inscription/index.php">Créer un compte</a>
          <a href="">Mot de passe oublier</a>
          </form>
       <form action="user1.php" method="post">
        <div class="titre">
          <h2>Connectez vous Etudiant</h2>
        </div>
        <?php if(isset($_GET['error1'])) { ?>
          <p class="error1"><?php echo $_GET['error1']?></p>
        <?php }?>
        <input class="text" type="text" name="user1" id="user1" placeholder="Username">
        <input class="text" type="password" name="pass1" id="pass1" placeholder="Password">
        <button class="btn" type="submit"><img src="img/lock1.png" alt=""> Se connecter</button>
        <input class="check" type="checkbox" name="" id="b1">
        <label for="b1">Garder ma session active</label>
        <hr>
        <p>Vous n'avez pas de compte ?</p>
        <a href="../inscription">Créer un compte</a>
        <a href="">Mot de passe oublier</a>
        </form>
      </div>
       
</body>
</html>