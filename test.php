<?php

// $fp = fopen('users.csv', 'r');
// $data = [];
// while ($row = fgets($fp)) {
//     $data[] = explode(',', trim($row));
// }

$dsn = 'mysql:dbname=prova;port=3307';

$pdo = new PDO($dsn, 'root', 'root');
$stmt = $pdo->query('select * from usuario');
$data = $stmt->fetchAll();

var_dump($data);
?>