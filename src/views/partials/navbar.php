
<ul class="nav navbar-nav navbar-right">
    <?php
        //Define each name associated with an URL
        $pages = array(
            'home' => 'categorie',
            'contact' => 'profil',
            'login' => 'login',
            'signup' => 'signup',
            'createPost' => 'createPost'
        );
        $p = (isset($_GET['p'])) ? $_GET['p'] : "";
        
        if(empty($_SESSION['idUser'])){
          foreach ($pages as $url => $label) {
            if($label != 'createPost'){
              ?>
              <li><a <?= $p == $url ? 'class="active"' : ""?> href="index.php?p=<?=$url?>" > <?=$label?> </a></li>
              <?php
            }
            };
        }else{
          ?>
          <?php
          if(!empty($_SESSION['idUser'])){
            foreach ($pages as $url => $label) {
              if($label != 'login' && $label != 'signup'){
                ?>
                <li><a <?= $p == $url ? 'class="active"' : ""?> href="index.php?p=<?=$url?>" > <?=$label?> </a></li>
                <?php
              }
              };
          ?>
          <li><a href="/actions/actionLogout.php">déconnexion</a></li>
          <?php
          }
        }
        ?>
</ul>