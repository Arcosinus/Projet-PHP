<?php
require_once '../../src/db.php';
?>
<?php
    $sql ='SELECT * FROM post WHERE categorie = :categorie and contenue = :contenu';

    $querry = $db->prepare($sql);

    $querry->execute([
        ':categorie'=> $categorie,
        ':contenu'=> $contenu
    ]);
    
    $user = $querry->fetch(PDO::FETCH_ASSOC);
    if($user == false){
        header("Location: /index.php?p=home&erreur=1");
    }
    echo $user;
    echo $categorie;
    echo $contenu;
    foreach ($user as $i){
        echo $categorie;
        echo $contenu;
    }
?>