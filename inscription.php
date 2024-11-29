<?php
if (
    isset($_POST['email']) &&
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['telFix']) &&
    isset($_POST['telPor']) &&
    isset($_POST['rue']) &&
    isset($_POST['cp']) &&
    isset($_POST['ville']) &&
    isset($_POST['mdp']) &&
    isset($_POST['mdpConfirmation'])) {
    if($_POST['mdp']==$_POST['mdpConfirmation']) {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionlivre;charset=UTF8', 'root', '');
        $req = $bdd->prepare("INSERT INTO inscrit (nom, prenom, email, tel_fixe, tel_portable, rue, cp, ville, mdp) values(:nom, :prenom, :email, :tel_fix, :tel_portable, :rue, :cp, :ville, :mdp)");
        $req->execute(array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'tel_fix' => $_POST['telFix'],
            'tel_portable' => $_POST['telPor'],
            'rue' => $_POST['rue'],
            'cp' => $_POST['cp'],
            'ville' => $_POST['ville'],
            'mdp' => $_POST['mdp']
        ));
        echo ("La personne a bien été ajouté");
    }else{
        echo ("Les mots de passes ne correspondent pas");
    }
}else{
    echo ("Les infos sont incompletes");
}