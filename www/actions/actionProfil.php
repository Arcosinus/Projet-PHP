<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
?>
<?php
    $sql ='SELECT * FROM users WHERE idUser = :idUser';

    $querry = $db->prepare($sql);
    $querry->execute([
        ':idUser' => $_SESSION['idUser']
    ]);
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
        ?>
        <h2> <?=$user["userName"].""?></h2>
        <p> <?=$user["emailUser"].""?></p>
        <?php
        };
?>