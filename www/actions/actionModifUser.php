<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
if (!(empty($_GET['idModif']))){
    $sql ='SELECT * FROM users WHERE idUser = :idUser';

    $querry = $db->prepare($sql);
    $querry->execute([
        ':idUser' => $_GET['idModif']
    ]);
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
    if (!(empty($_GET['idPass']))){
            $sql = 'UPDATE users SET mdpUser = :mdpUser WHERE idUser = :idUser';
            $query = $db->prepare($sql);
            $query->execute([
                ':idUser' => $_GET['idModif'],
                ':mdpUser' => $_GET['idPass'],
            ]);
            echo "Modification of password confirm; ";
    }
    if (!(empty($_GET['idName']))){
            $sql = 'UPDATE users SET userName = :userName WHERE idUser = :idUser';
            $query = $db->prepare($sql);
            $query->execute([
                ':idUser' => $_GET['idModif'],
                ':userName' => $_GET['idName'],
            ]);
            echo "Modification of username confirm; ";
    }
    if (!(empty($_GET['idMail']))){
            $sql = 'UPDATE users SET emailUser = :emailUser WHERE idUser = :idUser';
            $query = $db->prepare($sql);
            $query->execute([
                ':idUser' => $_GET['idModif'],
                ':emailUser' => $_GET['idMail'],
            ]);
            echo "Modification of email confirm; ";
    }
    if (!(empty($_GET['idAdmin']))){
            $sql = 'UPDATE users SET ifAdmin = :ifAdmin WHERE idUser = :idUser';
            $query = $db->prepare($sql);
            $query->execute([
                ':idUser' => $_GET['idModif'],
                ':ifAdmin' => $_GET['idAdmin'],
            ]);
            echo "Modification of admin confirm; ";
    }
}
}
?>