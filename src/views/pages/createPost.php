<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCon Seil</title>
</head>
<body>
<p>Post creation</p>
<form action="actions/actionPost.php" method="POST" >
    <!-- Titre du post -->
    <label for="">Titre :</label>
    <input type="text" name ="titlePost" placeholder=""> <br>

    <!-- Catégories du jeu -->
    <label for="">Categories :</label>
    <input type="text" name="categories" id="" placeholder=""><br>

    <!-- Contenu du post -->
    <label for="">Post content :</label>
    <textarea name="postContent" id="" cols="30" rows="10"></textarea> <br>

    <!-- Image facultative (A VOIR SI ON IMPLEMENTE) -->
    <label for="">Image :</label>
    <input type="img" name="mediaPost" id="" placeholder="Lien d'une image (facultatif)"><br>

    <input type="submit">
</form>
<?php
$erreur = (isset($_GET['erreur'])) ? $_GET['erreur'] : "";
if($erreur == '1'){
?>
<p>veuillez rentrer des champs valides</p>
<?php
};
?>
<?php
$successful = (isset($_GET['successful'])) ? $_GET['successful'] : "";
if($successful == '1'){
?>
<p>vous avez créez un post avec succès</p>
<?php
};

?>

</body>
</html>