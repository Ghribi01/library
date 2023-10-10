<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h1>Ghribi's <span>Library</span></h1>
            <img src="book.png" alt="">
        </nav>
        <div class="listbar">
             <ul class="options">
                <li class="first"><a href="#" class="prfl"><i class="fa-solid fa-house" style="color: #ffffff;"></i>Profile</a></li>
                <li><a href="#" class="message"><i class="fa-solid fa-message" style="color: #ffffff;"></i>Messages</a></li>
                <li><a href="#" class="bks"><i class="fa-solid fa-book" style="color: #ffffff;"></i>All books</a></li>
                <li><a href="" class="re"><i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i>Recommend Book</a></li>
                <li><a href="" class="recbook"><i class="fa-sharp fa-solid fa-bookmark" style="color: #ffffff;"></i>Recommanded books</a></li>
                <li class="last"><a href="../Home/index.php"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>Logout</a></li>

             </ul>
        </div>
        <div class="rule">

        </div>
        <div class="header-container2">
        <?php if(isset($_GET["error"])){?>
            <p class="error"><?php echo $_GET["error"]?></p>
        <?php }?>

        </div>

    </header>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="script2.js"></script>
</html>