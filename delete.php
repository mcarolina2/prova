<?php
session_start();

$usuario_id = $_SESSION['user_id'];
$id=$_GET['id'];


$dsn = 'mysql:dbname=prova;port=3307';
$pdo = new PDO($dsn, 'root', 'root');
$stmt = $pdo->query("
DELETE FROM antiguidades WHERE id= '$id' AND usuario_id='$usuario_id'
");

header('location: ./livros/index.php');
?>