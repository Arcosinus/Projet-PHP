<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
    $sql ='SELECT * FROM users WHERE idUser = :idUser';

    $querry = $db->prepare($sql);
    $querry->execute([
        ':idUser' => $_SESSION['idUser']
    ]);
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
        if ($_GET["oldpass"] == $user["mdpUser"]){
            $sql = 'UPDATE users SET userName = :userName , mdpUser = :mdpUser WHERE idUser = :idUser';
            $query = $db->prepare($sql);
            $query->execute([
                ':idUser' => $_SESSION['idUser'],
                ':mdpUser' => $_GET['newpass'],
                ':userName' => $_GET['modif'].""
            ]);
            echo "Modification confirm";
        }
        };
?>