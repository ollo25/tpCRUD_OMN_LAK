<?php
var_dump($_POST);
if (isset($_POST['emailCo']) && isset($_POST['mdpCo'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionlivre;charset=utf8', 'root', '');
        $req = $bdd->prepare('SELECT * FROM inscrit WHERE email = :email AND mdp = :mdp');
        $info=$req->execute(array(
            'email' => $_POST['emailCo'],
            'mdp' => $_POST['mdpCo']));
        $utilisateur = $info->fetch();
        if ($utilisateur) {
            echo "Connexion reussit ! ";
        }
        else {
            echo "Mdp ou email incorrecte ! ";
        }
}
else {
    echo "Veuillez remplir tous les champs";
}
