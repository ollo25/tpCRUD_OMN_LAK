<html>
<head>

</head>
<body>
<?php
session_start();
    echo "Bienvenue sur votre session ". $_SESSION['nom']." ".$_SESSION['prenom']."<br>";
    echo "Vous habitez au ".$_SESSION['rue']." ".$_SESSION['ville'].", ".$_SESSION['cp']."<br>";
?>
<form action='utilisateur.php' method='get'>
    <button type='submit'>modifier ses informations</button>
</form>





</body>
</html>
