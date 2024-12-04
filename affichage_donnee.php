<html>
<head>

</head>
<body>
<?php
session_start();
echo "Bienvenue sur votre session ". $_SESSION['nom']." ".$_SESSION['prenom']."<br>";
echo "Vous habitez au ".$_SESSION['rue']." ".$_SESSION['ville'].", ".$_SESSION['cp']."<br>";

?>


</body>
</html>
