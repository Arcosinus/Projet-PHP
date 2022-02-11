<?php
session_start();
require_once '../../src/db.php';
?>
<?php
if (empty($_POST['titlePost']) && empty($_POST['postContent'])){
    header("Location: /index.php?p=createPost&erreur=1");
    exit;
}
else {
    $titlePost = $_POST['titlePost'];
    $postContent = $_POST['postContent'];
    $categorie = $_POST['categories'];
};
$sql = 'INSERT INTO post(titlePost, postContent, categories, idUser, upVotes, downVotes) VALUES (:titlePost, :postContent, :categories, :idUser, :upVotes, :downVotes)';

$querry = $db->prepare($sql);

$querry->execute([
    ':titlePost' => $titlePost,
    ':postContent' => $postContent,
    ':categories' => $categorie,
    ':idUser' => $_SESSION['idUser'],
    ':upVotes' => 0,
    ':downVotes' => 0
]);

header("Location: /index.php?p=createPost&successful=1");
?>