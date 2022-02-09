<?php session_start(); 
require_once '../../src/db.php';
?>

<?php

$email = $_POST['mail'];
$mdp = $_POST['mdp'];

$sql ='SELECT * FROM Users WHERE email = :email and mdp = :mdp';

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
    if($key == 'id'){
        $_SESSION['id'] = $value;
        header("Location: /index.php?p=login&successful=1");
    }
}
?>
