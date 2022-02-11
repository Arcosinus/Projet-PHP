<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCon Seil</title>
</head>
<div>
    <form action="index.php">
    <button name ="class" method="get" value="Nintendo Switch">Nintendo Switch</button>
    <button name ="class" method="get" value="Playstation 5">Playstation 5</button>
    <button name ="class" method="get" value="Xbox Series X">Xbox Series X</button>
</form>
    <?php
    include 'actions/actionWatchPost.php';
    ?>
</div>