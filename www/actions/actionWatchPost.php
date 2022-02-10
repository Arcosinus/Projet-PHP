<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
?>
<div>
<?php
    $sql ='SELECT * FROM post';

    $querry = $db->prepare($sql);
    $querry->execute([]);
    ?>
    <form><?php
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
        ?>
        <button><a <?= $p == $user["jeu"] ? 'class="active"' : ""?> href="index.php?p=<?=$user["jeu"]?>" > <?=$user["categorie"] . ": " . $user["jeu"] . "-" . $user["contenue"]?> </a></button>
        <?php
        };
        ?>
    </form>
    <?php
?>
</div>