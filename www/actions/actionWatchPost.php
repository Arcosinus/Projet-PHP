<?php
    $sql ='SELECT * FROM post WHERE categorie = :categorie and contenue = :contenu';

    $querry = $db->prepare($sql);

    $querry->execute([
        ':categorie'=> $categorie,
        ':contenu'=> $contenu
    ]);
    
    $user = $querry->fetch(PDO::FETCH_ASSOC);
    if($user == false){
        header("Location: /index.php?p=login&erreur=1");
    }
    foreach ($user as $i){
        echo $categorie;
        echo $contenu;
    }
?>