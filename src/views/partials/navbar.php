
<ul class="nav navbar-nav navbar-right">
    <?php
        //Define each name associated with an URL
        $pages = array(
            'home' => 'categorie',
            'contact' => 'profil',
            'login' => 'login',
            'signup' => 'signup'
        );
        $p = (isset($_GET['p'])) ? $_GET['p'] : "";

        foreach ($pages as $url => $label) {
          ?>
          <button><a <?= $p == $url ? 'class="active"' : ""?> href="index.php?p=<?=$url?>" > <?=$label?> </a></button>
          <?php
          };
          ?>
        <?php
        if(!empty($_SESSION['id'])){
        ?>
        <button><a href="actions/actionLogout.php">Déconnexion</a></button>
        <?php
        };
        ?>
</ul>