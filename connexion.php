<?php
$host = 'localhost';
$dbname = 'gestion_etudiants';
$username = 'root';
$password = 'your_mysql_password';


$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die("Errour de connexion : " . $e->getMessage());
}
?>
