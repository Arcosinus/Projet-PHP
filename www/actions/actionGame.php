<?php
require_once '/Users/arxcoz/Downloads/Projet PHP/src/db.php';
?>
<?php
    if (!(empty($_GET['down']))){
        $sql4 = 'UPDATE post SET downVotes = :downVotes WHERE idpost = :idpost';
        $querry4 = $db->prepare($sql4);
        $querry4->execute([
            ':idpost' => $_GET['idpost'],
            ':downVotes' => $_GET['down']
        ]);
        echo "go duck touself";
    }
    if (!(empty($_GET['up']))){
        $sql4 = 'UPDATE post SET upVotes = :upVotes WHERE idpost = :idpost';
        $querry4 = $db->prepare($sql4);
        $querry4->execute([
            ':idpost' => $_GET['idpost'],
            ':upVotes' => $_GET['up']
        ]);
        echo "thank";
    }
    $first = true;
    $sql ='SELECT * FROM post WHERE titlePost = :titlePost';
    $querry = $db->prepare($sql);
    $querry->execute([
        ':titlePost' => $_GET['titlePost']
    ]);
    $sql2 ='SELECT * FROM users WHERE idUser = :idUser';
    $querry2 = $db->prepare($sql2);
    while (($user = $querry->fetch(PDO::FETCH_ASSOC))) {
        if ($first){
        ?>
        <h2> <?=$user["titlePost"].""?></h2>
        <?php
        $first = false;
        }
        $querry2->execute([
            ':idUser' => $user['idUser']
        ]);
        if ($user2 = $querry2->fetch(PDO::FETCH_ASSOC)){
        ?>
        <p> <?=$user2['userName'] . ": " . $user["postContent"]?></p>
        <button> <a href="index.php?p=game&titlePost=<?=$user['titlePost']?>&up=<?=($user['upVotes']++)?>&idpost=<?=$user['idpost']?>"><?="d:" . $user['upVotes']?></a></button>
        <button> <a href="index.php?p=game&titlePost=<?=$user['titlePost']?>&down=<?=($user['downVotes']++)?>&idpost=<?=$user['idpost']?>"><?="q:" . $user['downVotes']?></a></button>
        <?php
        }
        };
?>