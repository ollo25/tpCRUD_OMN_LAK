<?php
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
            echo "Email ou mot de passe incorrect !";
            echo "<form action='tpSequence2.php' method='get'>
    <button type='submit'>Retour</button>
</form>";
        }
}
else {
    echo "Veuillez remplir tous les champs";
}
?>
