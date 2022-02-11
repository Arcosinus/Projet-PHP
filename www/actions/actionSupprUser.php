<?php
require_once '../../src/db.php';
if (!(empty($_GET['IdSupr'])))
{

    $sql = 'DELETE FROM user WHERE idUser as :idUser';

    $querry = $db->prepare($sql);

    $querry->execute([
    ':idUser'=> $_GET['IdSupr'],
    ]);

    $user = $querry->fetch(PDO::FETCH_ASSOC);
}
?>