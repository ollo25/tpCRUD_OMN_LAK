<?php
var_dump($_POST);
if (isset($_POST['emailCo']) && isset($_POST['mdpCo'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionlivre;charset=utf8', 'root', '');
        $req = $bdd->prepare('SELECT * FROM inscrit WHERE email = :email AND mdp = :mdp');
        $req->execute(array(
            'email' => $_POST['emailCo'],
            'mdp' => $_POST['mdpCo']));
        $utilisateur = $req->fetch();
        if ($utilisateur) {
            var_dump($utilisateur);
            echo "Connexion reussit ! ";
            session_start();
            $_SESSION['id'] = $utilisateur['id'];
        }
        else {
            echo "fdgdfg";

            header('Location: inscription.php');
        }
}
else {
    echo "Veuillez remplir tous les champs";
}
