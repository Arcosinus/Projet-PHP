<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GameCon Seil</title>
        <meta name="description" content="">
    </head>
    <body>
        <?php
        include_once("Ressource/navbar.php");
        if (!(empty($_GET["prof"])))
        {
            if ($_GET["prof"] == "true")
            {
            include_once("Pages/Profil.php");
            }
        }
        if (!(empty($_GET["modif"])))
        {
            if ($_GET["modif"] == "true")
            {
            include_once("Pages/Modif.php");
            }
        }
        ?>
    </body>
</html>