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
    $mediaPost = $_POST['mediaPost'];
};
$sql = 'INSERT INTO posts(titlePost, postContent, mediaPost) VALUES (:titlePost, :postContent, :mediaPost)';

$querry = $db->prepare($sql);

$querry->execute([
    ':titlePost' => $titlePost,
    ':postContent' => $postContent,
    ':mediaPost' => $mediaPost
]);

header("Location: /index.php?p=createPost&successful=1");
?>