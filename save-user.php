<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $redesocial = $_POST['redesocial'];
   
    

    // $fp = fopen('users.csv', 'a');
    // fwrite($fp, "$nome,$email,$senha\n");

    $dsn = 'mysql:dbname=prova;port=3307';
    $pdo = new PDO($dsn, 'root', 'root');
    $stmt = $pdo->query("
        INSERT INTO usuario (nome, email, senha, cpf, telefone, redesocial)
        VALUES ('$nome', '$email', '$senha' , '$cpf', ' $telefone', '$redesocial')
    ");

    header('location: index.php?msg=usuario_cadastrado');
?>