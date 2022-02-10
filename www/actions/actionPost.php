<?php
require_once '../../src/db.php';
?>
<?php
if (empty($_GET['console']) && empty($_GET['jeu']) && empty($_GET['contenue'])){
    header("Location: /index.php?p=create&erreur=1");
    exit;
}
else {
    $console = $_GET['console'];
    $jeu = $_GET['jeu'];
    $contenu = $_GET['contenue'];
};
$sql = 'INSERT INTO post(categories, titlePost, postContent) VALUES (:console, :jeu, :contenu)';

$querry = $db->prepare($sql);

$querry->execute([
    ':console' => $console,
    ':jeu' => $jeu,
    ':contenu' => $contenu
]);

header("Location: /index.php?p=create&successful=1");
?>