<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>GhLibrary</title>
    <link rel="shortcut icon" href="book.png" type="image/png">
</head>
<body>
    <header class="header" id="header">
        <nav class="navbar">
            <i class="fa-solid fa-bars logo">
                <ul class="menu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#act">Actualities</a></li>
                    <li><a href="#accordion">Frequently Questions</a></li>
                    <li><a href="#books">Recommended Books</a></li>
                </ul>
                

            </i>
           <img class="book" src="book.png" alt="">
           <div class="navcontainer">
                <i class="fa-solid fa-crown">
                    <div class="login">
                        <p>Vous n'avez pas de compte</p>
                        <hr>
                        <a href="../inscription/index.php" class="btn">Créer le</a>
                        <!-- <button class="btn">Créer Un compte</button> -->
                    </div>
                </i>
                <a href="../login/index.php" class="btn">Connect</a>
           </div>
        </nav>
         <div class="container">
            <h1 class="textmo">Hello World</h1>
            <a href="#aboutus" class="btn">Discover</a>
         </div>
    </header>
    <!-- acualité -->
    <section class="actualite" id="act">
        <h1>Bienvenue</h1>
            <p>Découvrir les actualité de Ghribi librairie</p>
        <div class="box-container">
            <div class="box">
               <img src="images/nv.jpg" alt="">
               <h3>Nouveaux livres</h3>
            </div>
            <div class="box">
                <img src="images/fete.jpg" alt="">
                <h3>En savoirs plus</h3>
             </div>
             <div class="box">
                <img src="images/img4.webp" alt="">
                <h3>Commentaires</h3>
             </div>
        </div>
    </section>
    <!-- Frequently Questions -->
    <section class="accordion" id="accordion">
        <div class="titre"><h1>Frequently Asked Questions</h1></div>
        <div class="acontainer">
            <div class="content-container">
                <p class="question">Do I have to register my account?</p>
                <p class="answer">You will need to register your account to use any of the account features, such as being able to place holds, view your checked-out items</p>
            </div>
            <div class="content-container">
                <p class="question">Does the library use social media?</p>
                <p class="answer">Yes, the library regularly interacts on Facebook, Twitter and Instagram.</p>
            </div>
            <div class="content-container">
                <p class="question">goals of library services ?</p>
                <p class="answer">access to knowledge, promote scholarly communication and provide information to academic community</p>
            </div>
        </div>
        

    </section>
    <!-- Recommended Books -->
    <section class="books" id="books">
       <h1>Recommended Books</h1>
       <p>Ghribi's Library selects her books of the moment</p>
       <div class="l1"></div>
       <div class="bookcontainer">
        
        <div class="onebook">
            <img src="images/catchingfire.jpg" alt="">
            <p class="booktitle">Catching Fire</p>
            <p class="author">Suzanne Collins(2009)</p>
        </div>
        <div class="onebook">
            <img src="images/one.jpg" alt="">
            <p class="booktitle">A million to one</p>
            <p class="author">Tony Faggioli(2010)</p>
        </div>
        <div class="onebook">
            <img src="images/two.jpg" alt="">
            <p class="booktitle">The martian</p>
            <p class="author">Andy weir(2011)</p>
        </div>
        <div class="onebook">
            <img src="images/three.jfif" alt="">
            <p class="booktitle">Zombie</p>
            <p class="author">Mike Johnson(2018)</p>
        </div>
        <div class="onebook">
            <img src="images/four.webp" alt="">
            <p class="booktitle">The hypocrite world</p>
            <p class="author">Sophia hill(2021)</p>
        </div>
        
       </div>
       <div class="l2"></div>
    </section>
    <!-- Disocver -->
    <section class="aboutus" id="aboutus">
        <h1>About Us</h1>
        <p>Ghribi's Library est une librairie en ligne immersive qui offre une expérience littéraire exceptionnelle aux passionnés de lecture. Avec une vaste sélection de livres soigneusement choisis dans divers genres, cette bibliothèque virtuelle vise à satisfaire les goûts éclectiques de ses utilisateurs. Naviguer à travers les étagères numériques de Ghribi's Library offre une expérience conviviale, permettant aux visiteurs de découvrir de nouveaux auteurs, de parcourir des best-sellers ou de plonger dans des œuvres classiques intemporelles. L'interface intuitive facilite la recherche de livres spécifiques, tandis que les recommandations personnalisées basées sur les préférences de lecture antérieures ajoutent une touche personnalisée à l'expérience. Que ce soit pour les amateurs de fiction, de non-fiction, de science-fiction ou de poésie, Ghribi's Library s'efforce de créer un univers littéraire en ligne où chacun peut trouver son prochain livre préféré, le tout avec la commodité de pouvoir explorer cette bibliothèque à partir de chez soi.</p>

    </section>
    <footer class="footer">
         <ul class="links">
            <a href="#"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
         </ul>
         <p>&copy;Created By Ghribi Mohamed|All Rights Reserved</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>