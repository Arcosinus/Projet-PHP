<?php

require_once '../src/init.php';

session_start();

?>

<?php
    include '../src/views/partials/navbar.php'
?>

    <body>
    <?php
 
    if ($p == "home"){
        include '../src/views/pages/home.php';
    } else if ($p == "login"){
        include '../src/views/pages/login.php';
    } else if ($p == "signup") {
        include '../src/views/pages/signup.php';
    } else if($p == "contact"){
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