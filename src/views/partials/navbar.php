
<ul class="nav navbar-nav navbar-right">
    <?php
        //Define each name associated with an URL
        $pages = array(
            'home' => 'home',
            'contact' => 'contact',
            'login' => 'login',
            'signup' => 'signup'
        );
        $p = (isset($_GET['p'])) ? $_GET['p'] : "";

        foreach ($pages as $url => $label) {
          ?>
          <li><a <?= $p == $url ? 'class="active"' : ""?> href="index.php?p=<?=$url?>" > <?=$label?> </a></li>
          <?php
          };
          ?>
        <?php
        if(!empty($_SESSION['id'])){
        ?>
        <li><a href="actions/actionLogout.php">Déconnexion</a></li>
        <?php
        };
        ?>
</ul>