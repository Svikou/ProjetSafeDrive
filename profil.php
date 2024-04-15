<?php

require('./config.php');

if (empty($_SESSION['user'])) {
    header('location:/SafeDrive/connexion.html');
    exit();
}

$user = $_SESSION['user'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
</head>
<body>
    <h1>Votre Profil:</h1>

    <img src="<?= $user['picture'] ?>" alt="Photo de profil">
    <ul>
        <li>Nom : <?= $user['given_name'] ?></li>
        <li>Email : <?= $user['email'] ?></li>
    </ul>

    <p>
        <a href="kissal.html">Deconnexion</a>
    </p>

</body>
</html>