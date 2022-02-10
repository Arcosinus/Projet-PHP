<?php

// tableau de config
$config_db = [
	'host' => '65.108.209.42',
	'port' => '3306',
	'dbname' => 'gameconseil',
	'user' => 'gameconseil',
	'pass' => 'CYwjvjsjBgbtbTvq'
];

// Le DSN est une chaine de caractere composée d'une partie de la config (sans le user/password)
$dsn = 'mysql:host=' . $config_db['host'] . ';dbname=' . $config_db['dbname'] . ';port=' . $config_db['port'] . '';

// On essaye de se connecter avec PDO
try {
	$db = new PDO($dsn, $config_db['user'], $config_db['pass']);
}
catch (Exception $e) {
	// sinon on die(), cela fait 'crasher' le site internet avec un message d'erreur
	die('Erreur MySQL, maintenance en cours.' . $e->getMessage());
}

// si tout est OK, nous avons accès à la variable $db permettant d'intéragir avec la BDD
// ce fichier est à inclure en début de script (souvent dans le init.php)

?>
