<?php
require_once '../../src/db.php';
?>

<?php
if (!(empty($_GET['IdSupr'])){

    $email = $_GET['IdSupr'];

    $sql ='DELETE FROM user WHERE idUser as :idUser';

    $querry = $db->prepare($sql);

    $querry->execute([
    ':idUser'=> $id,
    ]);

    $user = $querry->fetch(PDO::FETCH_ASSOC);
}
?>