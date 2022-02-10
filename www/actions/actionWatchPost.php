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
        <button><a <?= $p == $user["titlePost"] ? 'class="active"' : ""?> href="index.php?p=<?=$user["titlePost"]?>" > <?=$user["titlePost"] . ": " . $user["titlePost"] . "-" . substr($user["postContent"], 0, 25) . "..."?> </a></button>
        <?php
        };
        ?>
    </form>
    <?php
?>
</div>