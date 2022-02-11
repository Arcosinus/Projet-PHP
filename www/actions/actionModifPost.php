<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
if (!(empty($_GET['idModifP']))){
    $sql ='SELECT * FROM post WHERE idpost = :idpost';

    $querry = $db->prepare($sql);
    $querry->execute([
        ':idpost' => $_GET['idModifP']
    ]);
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
    if (!(empty($_GET['idCons']))){
            $sql = 'UPDATE post SET categories = :categories WHERE idpost = :idpost';
            $query = $db->prepare($sql);
            $query->execute([
                ':idpost' => $_GET['idModifP'],
                ':categories' => $_GET['idCons'],
            ]);
            echo "Modification of console confirm; ";
    }
    if (!(empty($_GET['idJeu']))){
            $sql = 'UPDATE post SET titlePost = :titlePost WHERE idpost = :idpost';
            $query = $db->prepare($sql);
            $query->execute([
                ':idpost' => $_GET['idModifP'],
                ':titlePost' => $_GET['idJeu'],
            ]);
            echo "Modification of game confirm; ";
    }
    if (!(empty($_GET['idCont']))){
            $sql = 'UPDATE post SET postContent = :postContent WHERE idpost = :idpost';
            $query = $db->prepare($sql);
            $query->execute([
                ':idpost' => $_GET['idModifP'],
                ':postContent' => $_GET['idCont'],
            ]);
            echo "Modification of content confirm; ";
    }
    if (!(empty($_GET['idUser']))){
            $sql = 'UPDATE post SET idUser = :idUser WHERE idpost = :idpost';
            $query = $db->prepare($sql);
            $query->execute([
                ':idpost' => $_GET['idModifP'],
                ':idUser' => $_GET['idUser'],
            ]);
            echo "Modification of user confirm; ";
    }
}
}
?>