<html>
<head>

</head>
<body>
<?php
session_start();
echo
$_SESSION['mdp'].
$_SESSION['email'].
$_SESSION['nom'].
$_SESSION['prenom']. 
$_SESSION['rue']. 
$_SESSION['cp']. 
$_SESSION['ville']. 
$_SESSION['tel_portable']. 
$_SESSION['tel_fixe'];
?>


</body>
</html>
