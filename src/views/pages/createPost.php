<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Créer un post</p>
<form action="actions/actionPost.php" method="GET" >
    <label for="">Console :</label>
    <input type="text" name ="console" placeholder="Console"> <br>
    <label for="">Jeu :</label>
    <input type="text" name = "jeu" placeholder="Jeu"> <br>
    <label for="">Commentaire :</label> <br>
    <textarea type="text" name = "contenue" placeholder="Commentaire"> </textarea> <br>
    <input type="submit"> 
</form>
<?php
$erreur = (isset($_GET['erreur'])) ? $_GET['erreur'] : "";
if($erreur == '1'){
?>
<p>veuillez rentrer des champs valide</p>
<?php
};
?>
<?php
$successful = (isset($_GET['successful'])) ? $_GET['successful'] : "";
if($successful == '1'){
?>
<p>vous avez créer un compte avec succès</p>

<?php
};
?>
</body>
</html>