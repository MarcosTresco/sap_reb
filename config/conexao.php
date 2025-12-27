<?php
$host = 'sql300.infinityfree.com';
$db   = 'if0_39413457_db_sap_reb'; // Nome que combinamos
$user = 'if0_39413457';       // Ajuste se necessário
$pass = 'U8ksZNLeIiroL';           // Ajuste se necessário

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
