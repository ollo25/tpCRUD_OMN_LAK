
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=gestionlivre;charset=UTF8', 'root', '');

if (isset($_POST['nouvelEmail'])) {
    $req = $bdd->prepare("UPDATE inscrit SET email = :email WHERE email = :session_email");
    $req->execute(array(
        'email' => $_POST['nouvelEmail'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['nouveauNom'])) {
    $req = $bdd->prepare("UPDATE inscrit SET nom = :nom WHERE email = :session_email");
    $req->execute(array(
        'nom' => $_POST['nouveauNom'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['nouveauPrenom'])) {
    $req = $bdd->prepare("UPDATE inscrit SET prenom = :prenom WHERE email = :session_email");
    $req->execute(array(
        'prenom' => $_POST['nouveauPrenom'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['nouveauTelFix'])) {
    $req = $bdd->prepare("UPDATE inscrit SET tel_fixe = :tel_fixe WHERE email = :session_email");
    $req->execute(array(
        'tel_fixe' => $_POST['nouveauTelFix'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['nouveauTelPor'])) {
    $req = $bdd->prepare("UPDATE inscrit SET tel_portable = :tel_portable WHERE email = :session_email");
    $req->execute(array(
        'tel_portable' => $_POST['nouveauTelPor'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['nouvelleRue'])) {
    $req = $bdd->prepare("UPDATE inscrit SET rue = :rue WHERE email = :session_email");
    $req->execute(array(
        'rue' => $_POST['nouvelleRue'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['newCp'])) {
    $req = $bdd->prepare("UPDATE inscrit SET cp = :cp WHERE email = :session_email");
    $req->execute(array(
        'cp' => $_POST['newCp'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['nouvelleVille'])) {
    $req = $bdd->prepare("UPDATE inscrit SET ville = :ville WHERE email = :session_email");
    $req->execute(array(
        'ville' => $_POST['nouvelleVille'],
        'session_email' => $_SESSION['email']
    ));
}

if (isset($_POST['nouveauMdpIn']) && isset($_POST['nouveauMdpConfirmation'])) {
    if ($_POST['nouveauMdpIn'] == $_POST['nouveauMdpConfirmation']) {
        $req = $bdd->prepare("UPDATE inscrit SET mdp = :mdp WHERE email = :session_email");
        $req->execute(array(
            'mdp' => $_POST['nouveauMdpIn'],
            'session_email' => $_SESSION['email']
        ));
    } else {
        echo("Les mots de passe ne correspondent pas");
    }
}
