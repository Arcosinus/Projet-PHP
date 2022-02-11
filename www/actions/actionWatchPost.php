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
    <form><?php
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
        ?>
        <button><a <?= $p == $user["titlePost"] ? 'class="active"' : ""?> href="index.php?p=game&titlePost=<?=$user["titlePost"]?>" > <?=$user["categories"] . ": " . $user["titlePost"] . "-" . substr($user["postContent"], 0, 25) . "..."?> </a></button>
        <?php
        };
        ?>
    </form>
    <?php
}
else
{
    $console = $_GET['class'];
    $sql ='SELECT * FROM post where categories = :categories';
    $querry = $db->prepare($sql);
    $querry->execute([
        ':categories' => $console
    ]);
    ?>
    <form><?php
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
        ?>
        <button><a <?= $p == $user["titlePost"] ? 'class="active"' : ""?> href="index.php?p=game&titlePost=<?=$user["titlePost"]?>" > <?=$user["categories"] . ": " . $user["titlePost"] . "-" . substr($user["postContent"], 0, 25) . "..."?> </a></button>
        <?php
        };
        ?>
    </form>
    <?php
}
?>
</div>