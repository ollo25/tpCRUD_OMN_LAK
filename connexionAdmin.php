<?php
var_dump($_POST);
if (isset($_POST['emailAdmin']) && isset($_POST['mdpAdmin'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=gestionlivre;charset=utf8', 'root', '');
    $req = $bdd->prepare('SELECT * FROM inscrit WHERE email = :email AND mdp = :mdp');
    $req->execute(array(
        'email' => $_POST['emailAdmin'],
        'mdp' => $_POST['mdpAdmin']));
    $utilisateur = $req->fetch();
    if ($utilisateur) {
        var_dump($utilisateur);
        echo "Connexion reussit ! ";
        session_start();
        $_SESSION['mdp'] = $utilisateur['mdp'];
        $_SESSION['email'] = $utilisateur['email'];

        $_SESSION['nom'] = $utilisateur['nom'];
        $_SESSION['prenom'] = $utilisateur['prenom'];
        $_SESSION['rue'] = $utilisateur['rue'];
        $_SESSION['cp'] = $utilisateur['cp'];
        $_SESSION['ville'] = $utilisateur['ville'];
        $_SESSION['tel_portable'] = $utilisateur['tel_portable'];
        $_SESSION['tel_fixe'] = $utilisateur['tel_fixe'];
        header('Location: affichage_donnee.php');
    }
    else {
        echo "erreur";
    }
}
else {
    echo "Veuillez remplir tous les champs";
}
?>