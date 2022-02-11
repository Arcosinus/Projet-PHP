<?php session_start(); 
require_once '../../src/db.php';
?>

<?php

$email = $_POST['mail'];
$mdp = $_POST['mdp'];

$sql ='SELECT * FROM users WHERE emailUser = :email and mdpUser = :mdp';

$querry = $db->prepare($sql);

$querry->execute([
    ':email'=> $email,
    ':mdp'=> $mdp
]);

$user = $querry->fetch(PDO::FETCH_ASSOC);
if($user == false){
    header("Location: /index.php?p=login&erreur=1");
}
foreach ($user as $key => $value) {
    if($key == 'idUser'){
        $_SESSION['idUser'] = $value;
        $_SESSION['admin'] = $user["ifAdmin"];
        header("Location: /index.php?p=login&successful=1");
    }
}
?>
