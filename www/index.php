<?php

require_once '../src/init.php';

session_start();

?>

<?php
    include '../src/views/partials/navbar.php'
?>

    <body>
    <?php
 
    if ($p == "login"){
        include '../src/views/pages/login.php';
    } elseif ($p == "signup") {
        include '../src/views/pages/signup.php';
    } elseif($p == "contact"){
        include '../src/views/pages/contact.php';
    }
    elseif ($p == "logout") {
        include 'actions/actionLogout.php';
    }
    else{
        include '../src/views/pages/home.php';
    };
    ?>
    </body>

<?php
    include '../src/views/partials/footer.php'
?>