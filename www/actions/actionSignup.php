<?php
session_start();
require_once '../../src/db.php';
?>
<?php
if (empty($_POST['mail']) && empty($_POST['mdp'])){
    header("Location: /index.php?p=signup&erreur=1");
    exit;
}
else {
    $adresse_mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
};
$sql = 'INSERT INTO users(emailUser, mdpUser) VALUES (:email, :mdp)';

$querry = $db->prepare($sql);

$querry->execute([
    ':email' => $adresse_mail,
    ':mdp' => $mdp
]);

header("Location: /index.php?p=signup&successful=1");
?>