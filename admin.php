<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title> 
</head>git status

<body>
<?php
<<<<<<< HEAD
git pullgit add *git add
=======

$bdd = new PDO('mysql:host=localhost;dbname=gestionlivre;charset=utf8', 'root', '');
$req = $bdd->prepare('SELECT email FROM inscrit');
$req->execute();

$emailListe = $req->fetchAll();
echo "Liste des utilisateurs inscrits sur le site : <br>";
for ($i = 0; $i < count($emailListe); $i++) {
    echo $emailListe[$i]['email']."<br>";
}
?>
<form>
    <input type="email" name="emailChercher">
    <input type="submit" value="Chercher">
</form>
<?php
if (isset($_POST['emailChercher'])) {
    if(($_POST['emailChercher'])==$emailListe['email']) {
        session_start();
        $_SESSION['emailChercher'] = $_POST['emailChercher'];
        header('location: adminmodif.php');
    }
    else {
        header('location: admin.php');
    }
}

if(isset($_POST['emailNv'])){

}
?>

</body>

</html>


>>>>>>> 6523bea265022398d57d6963a3ddef6f955caf64
