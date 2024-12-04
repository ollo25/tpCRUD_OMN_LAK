<html>
<head>

</head>
<body>
<?php
session_start();
if($_SESSION['email']=="admin@admin" && $_SESSION['mdp']=="admin"){
    echo "vous etes l'admin";
   header ("location : admin.php");
}
else{
    echo "Bienvenue sur votre session ". $_SESSION['nom']." ".$_SESSION['prenom']."<br>";
    echo "Vous habitez au ".$_SESSION['rue']." ".$_SESSION['ville'].", ".$_SESSION['cp']."<br>";
    header ("location : utilisateur.php");
}
?>




</body>
</html>
