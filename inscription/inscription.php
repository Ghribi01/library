<?php
include "../dbconn.php";
if(isset($_POST["cin"]) && $_POST["nom"] && $_POST["prenom"] && $_POST["email"] && $_POST["username"]){
    function validmail($data){
        $exp='/^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/';
        if (preg_match($exp, $data)) {
            return true;
          } else {
            return false;
          }
        }
        
    $cin=$_POST["cin"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $groupe=$_POST["grp"];
    $image=$_POST["img"];
    $user=$_POST["username"];
    $pass=$_POST["password"];
    if(empty($cin)){
        header("location:index.php?error=cin is required");
        exit();
    }elseif(strlen($cin)!=8){
        header("location:index.php?error=cin contient seleument 8 chiffres");
        exit();  
    }elseif(ctype_digit($cin)===FALSE){
        header("location:index.php?error=nom doit étre contient seulement des chiffres");
        exit(); 
    }elseif(empty($nom)){
        header("location:index.php?error=name is required");
        exit(); 
    }elseif(ctype_alpha($nom)===FALSE){
        header("location:index.php?error=nom doit étre contient seulement des lettres");
        exit(); 
    }elseif(empty($prenom)){
        header("location:index.php?error=prenom is required");
        exit();  
    }elseif(ctype_alpha($prenom)===FALSE){
        header("location:index.php?error=prenom doit étre contient seulement des lettres");
        exit();
    }elseif(empty($email)){
        header("location:index.php?error=email is required");
        exit();  
    }
    elseif(!validmail($email)){
        header("location:index.php?error=verifier votre email");
        exit(); 
    }
    elseif(empty($groupe)){
        header("location:index.php?error=choisir votre groupe");
        exit();  
    }
    elseif(empty($image)){
        header("location:index.php?error=choisir votre image de profile");
        exit();  
    }
    elseif(empty($user)){
        header("location:index.php?error=username is required");
        exit();  
    }elseif(ctype_alpha($user)===FALSE){
    header("location:index.php?error=username contient seulement des lettres");
    exit();
    }elseif(empty($pass)){
        header("location:index.php?error=password is required");
        exit();
    }
    elseif(strlen($pass)!=8){
        header("location:index.php?error=password contient 8 caractéres");
        exit(); 
    }
    else{
        $sql="INSERT into etudiant values('$cin','$nom','$prenom','$email','$groupe','$image','$user','$pass')";
        $sql1="SELECT * from etudiant where cin='$cin'";
        $sql2="SELECT * from etudiant where email='$email'";
        $sql3="SELECT * from etudiant where username='$user'";
        $resultat1=mysqli_query($conn, $sql1);
        $resultat2=mysqli_query($conn, $sql2);
        $resultat3=mysqli_query($conn, $sql3);
            if(mysqli_num_rows($resultat1)===1){
                header("location:index.php?error=utilisateur existe");
                exit();
            }elseif(mysqli_num_rows($resultat2)===1){
                header("location:index.php?error=Email existe");
                exit();  
            }elseif(mysqli_num_rows($resultat3)===1){
                header("location:index.php?error= Nom d'utilisateur existe");
                exit();
            }
            elseif(mysqli_query($conn,$sql)){
                header("location:index.php?error=Utilisatuer ajoutée avec succés");
                exit();
            }else{
                header("location:index.php?error=échouée");
                exit();
            }
        }
}else{
    header("location:index.php?error=Tu dois remplir tous les champs");
    exit();
}
?>
