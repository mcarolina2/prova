<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location:index.php?msg=nao_autorizado');
    exit();
} 
function is_logged() {
    return isset($_SESSION['usuario_id']);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mtmp</title>

</head>
<body>
<h1>
        Minhas Antiguidades
    </h1>
    <?php if(is_logged()):?> 
<?php
$usuario_id = $_SESSION['usuario_id'];

$dsn = 'mysql:dbname=prova;port=3307';
$pdo = new PDO($dsn, 'root','root');
$stmt = $pdo->query("
    select * from antiguidades 
    where usuario_id != $usuario_id
    order by ano , tipo , marca , preco
");
$data = $stmt->fetchAll();
?> 
<table>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['tipo'] ?></td>
                <td><?= $row['ano'] ?></td>
                <td><?= $row['marca'] ?></td>
                <td><?= $row['preco'] ?></td>

                </td></tr>
        <?php endforeach ?>
    </table>
   
<!--
    <a href="logout.php">sair</a>
    <a href="livros/index.php">Ver meus Anúncios </a>
     -->

    <?php endif ?>

    <header> 
        <ul>
            <li>
                <a href="home.php"> 
            <span class="icon"></span> 
            <span class="icon">Home</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Usuario</span> 
            </li> 

            <li>
                <a href="livros/index.php"> 
            <span class="icon"></span> 
            <span class="icon">Minhas Antiguidades</span> 
            </li>

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Configuração</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Duvidas</span> 
            </li> 

            <li>
                <a href=""> 
            <span class="icon"></span> 
            <span class="icon">Ajuda</span> 
            </li> 

            <li>
                <a href="logout.php"> 
            <span class="icon"></span> 
            <span class="icon">Sair</span> 
            </li>

        
        </ul>
    </header>
<style>
    header{ 
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
   
}
    

</style> 




</body>
</html>