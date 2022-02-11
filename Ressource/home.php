
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>HOME</p>
<?php
$logout= (isset($_GET['logout'])) ? $_GET['logout'] : "";
if($logout == '1'){
?>
<p>vous avez été déconnecté</p>
<?php
};
?>
</body>
</html>