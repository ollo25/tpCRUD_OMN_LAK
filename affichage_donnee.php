<html>
<head>

</head>
<body>
<?php
session_start();
    echo "Bienvenue sur votre session ". $_SESSION['nom']." ".$_SESSION['prenom']."<br>";
    echo "Vous habitez au ".$_SESSION['rue']." ".$_SESSION['ville'].", ".$_SESSION['cp']."<br>";
?>
<form action='utilisateur.php' method='post'>
    <button type='submit'>modifier ses informations</button>
</form>

<form action="tpSequence2.php" method="post">
    <button type='submit'>Deconnexion <?php
         session_destroy();
?>  </button>
</form>





</body>
</html>
