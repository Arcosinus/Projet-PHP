<form action="index.php">
    <h2>Modifier le profil</h2>
        <p>Pseudo</p>
        <input type="text" method="get" name="modif"></input>
        <p>Confirmation mot de passe</p>
        <input type="text" method="get" name="oldpass"></input>
        <p>Nouveau mot de passe</p>
        <input type="text" method="get" name="newpass"></input>
        <button method="get" name="p" value="modif" action="index.php">Confirmer </a></button>
    <?php
    include 'actions/actionModif.php';
    ?>
</form>