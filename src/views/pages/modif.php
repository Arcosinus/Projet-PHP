<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCon Seil</title>
</head>
<form action="index.php">
    <h2>Modifier le profil</h2>
        <p>Pseudo</p>
        <input type="text" method="get" name="modif"></input>
        <p>Confirmation mot de passe</p>
        <input type="text" method="get" name="oldpass"></input>
        <p>Nouveau mot de passe</p>
        <input type="text" method="get" name="newpass"></input>
        <button method="get" name="p" value="modif" action="index.php">Confirmer </a></button>
    <?php
    include 'actions/actionModif.php';
    ?>
</form>