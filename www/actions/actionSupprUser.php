<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
if (!(empty($_GET['IdSupr'])))
{

    $sql = 'DELETE FROM users WHERE idUser = :idUser';

    $querry = $db->prepare($sql);

    $querry->execute([
    ':idUser'=> $_GET['IdSupr']
    ]);

    $user = $querry->fetch(PDO::FETCH_ASSOC);
    echo "Suppression of user confirm; ";
}
?>