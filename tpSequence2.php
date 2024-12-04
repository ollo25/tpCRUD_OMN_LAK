
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<hr>
<b><u>Connexion :</u></b>
<form action="connexion.php" method="post">
    <table>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td><label for="emailCo">E-mail: </label></td>
            <td><input type="email" name="emailCo" id="emailCo"><br></td>
        </tr>
        <tr>
            <td><label for="mdpCo">Mot de passe: </label></td>
            <td><input type="password" name="mdpCo" id="mdpCo"><br></td>
        </tr>
        <tr>
            <td>    <input type="submit" value="Connexion"><br></td>
        </tr>
    </table>
</form>
<hr>




<b><u>Incription :</u></b>
<form action="inscription.php" method="post">
    <table>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td><label for="loginIn">E-mail: </label></td>
            <td><input type="email" name="email" id="loginIn"><br></td>
        </tr>
        <tr>
            <td><label for="nom">Nom: </label></td>
            <td><input type="text" name="nom" id="nom"><br></td>
        </tr>
        <tr>
            <td><label for="prenom">Prénom: </label></td>
            <td><input type="text" name="prenom" id="prenom"><br></td>
        </tr>
        <tr>
            <td><label for="telFix">Téléphone Fixe: </label></td>
            <td><input type="tel" name="telFix" id="telFix"><br></td>
        </tr>
        <tr>
            <td><label for="telPor">Téléphone Portable: </label></td>
            <td><input type="tel" name="telPor" id="telPor"><br></td>
        </tr>
        <tr>
            <td><label for="rue">Rue: </label></td>
            <td><input type="text" name="rue" id="rue"><br></td>
        </tr>
        <tr>
            <td><label for="cp">Code postal: </label></td>
            <td><input type="number" name="cp" id="cp"><br></td>
        </tr>
        <tr>
            <td><label for="ville">Ville: </label></td>
            <td><input type="text" name="ville" id="ville"><br></td>
        </tr>
        <tr>
            <td><label for="mdpIn">Mot de passe: </label></td>
            <td><input type="text" name="mdp" id="mdpIn"><br></td>
        </tr>
        <tr>
            <td><label for="mdpConfirmation">Confirmation mot de passe: </label></td>
            <td><input type="text" name="mdpConfirmation" id="mdpConfirmation"><br></td>
        </tr>
        <tr>
            <td>    <input type="submit" value="Inscription"><br></td>
        </tr>
    </table>
</form>
<hr>


</body>
</html>