<?php
session_start();
require_once '../../src/db.php';
?>
<?php
if (empty($_POST['mail']) && empty($_POST['mdp']) && empty($_POST['userName'])){
    header("Location: /index.php?p=signup&erreur=1");
    exit;
}
else {
    $adresse_mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $userName = $_POST['userName'];
};
$sql = 'INSERT INTO users(emailUser, mdpUser, userName) VALUES (:email, :mdp, :userName)';

$querry = $db->prepare($sql);

$querry->execute([
    ':email' => $adresse_mail,
    ':mdp' => $mdp,
    ':userName' => $userName
]);

header("Location: /index.php?p=signup&successful=1");
?>