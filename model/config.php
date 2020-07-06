<?php
########******* Coding BY CHEIKH MBOW **********#########
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dsn = 'mysql: host=localhost; dbname=Gesbanque';
$dbUser = 'cheikh';
$pw = 'Cheikh@mbow123';

try {

    $pdo = new PDO($dsn, $dbUser, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion etablie";
} catch (PDOException $e) {
    echo 'Erreur :' . $e->getMessage();
}
//$pdo->query("SET NAMES UTF8");
return $pdo;
