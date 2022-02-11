<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
if (!(empty($_GET['IdSuprP'])))
{

    $sql = 'DELETE FROM post WHERE idpost = :idpost';

    $querry = $db->prepare($sql);

    $querry->execute([
    ':idpost'=> $_GET['IdSuprP']
    ]);

    $user = $querry->fetch(PDO::FETCH_ASSOC);
    echo "Suppression of post confirm; ";
}
?>