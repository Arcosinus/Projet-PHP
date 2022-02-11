<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCon Seil</title>
</head>
<form>
    <?php
    if ($_SESSION['admin']==1){
        include_once 'actions/actionModifUser.php';
        include_once 'actions/actionSupprUser.php';
        include_once 'actions/actionModifPost.php';
        include_once 'actions/actionSupprPost.php';
    }
    ?>
    <h2>Modification de compte</h2>
    <?php
        require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
        ?>
        <div>
        <?php
        if (empty($_GET['class'])){
            $sql ='SELECT * FROM users';
        
            $querry = $db->prepare($sql);
            $querry->execute([]);
            ?>
            <textarea><?php
            while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
                ?><?=$user["idUser"] . " Utilisateur:" . $user["userName"] . " Email:" . $user["emailUser"] . " Mot de passe:" .$user["mdpUser"] . " Administrateur:" . $user["ifAdmin"] . ";\n"?><?php
                };
                ?>
            </textarea>
            <?php
        }
        ?>
        </div>
        <form action="index.php">
            <input method="get" name="idModif" placeholder="Id Utilisateur"></input>
            <input method="get" name="idName" placeholder="Pseudo"></input>
            <input method="get" name="idMail" placeholder="Email"></input>
            <input method="get" name="idPass" placeholder="Mot de passe"></input>
            <input method="get" name="idAdmin" placeholder="Admin (0/1)"></input>
            <button method="get" name="p" value="admin">Modifier</button>
        <div>
        <form action="index.php">
            <input method="get" name="IdSupr" placeholder="Id Utilisateur"></input>
            <button method="get" name="p" value="admin">Supprimer</button>
        </div>
    <h2>Modification de commentaire</h2>
    <?php
        require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
        ?>
        <div>
        <?php
        if (empty($_GET['class'])){
            $sql ='SELECT * FROM post';
        
            $querry = $db->prepare($sql);
            $querry->execute([]);
            ?>
            <textarea><?php
            while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
                ?><?=$user['idpost'] . " Console:" . $user["categories"] . " Jeu:" . $user["titlePost"] . " Extrait:" . substr($user["postContent"], 0, 25) . "... Utilisateur:"  . $user["idUser"] .";\n"?><?php
                };
                ?>
            </textarea>
            <?php
        }
        ?>
        </div>
        <form action="index.php">
            <input method="get" name="idModifP" placeholder="Id Post"></input>
            <input method="get" name="idCons" placeholder="Console"></input>
            <input method="get" name="idJeu" placeholder="Jeu"></input>
            <input method="get" name="idCont" placeholder="Contenu"></input>
            <input method="get" name="idUser" placeholder="Id Utilisateur"></input>
            <button method="get" name="p" value="admin">Modifier</button>
        <div>
        <form action="index.php">
            <input method="get" name="IdSuprP" placeholder="Id Post"></input>
            <button method="get" name="p" value="admin">Supprimer</button>
        </div>
</form>