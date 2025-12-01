<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: ../index.php");
    exit;
}
include('../conexao.php');

// Consultar produtos
$sql_produtos = "SELECT * FROM REMEDIO ORDER BY id_rem DESC";
$result_produtos = $conecta->query($sql_produtos);

// Consultar funcionários
$sql_funcionarios = "SELECT * FROM FARMACEUTICO ORDER BY id DESC";
$result_funcionarios = $conecta->query($sql_funcionarios);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Panácea</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Painel Panácea</h1>
        <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
        <a href="../logout.php">Sair</a>
    </header>

    <main>
        <h2>Produtos</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Classe</th>
                <th>Tipo</th>
                <th>Preço</th>
                <th>Estoque</th>
            </tr>
            <?php while($row = $result_produtos->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id_rem']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['classe']; ?></td>
                <td><?php echo $row['tipo']; ?></td>
                <td><?php echo $row['preco']; ?></td>
                <td><?php echo $row['estoque']; ?></td>
            </tr>
            <?php } ?>
        </table>

        <h2>Farmacêuticos</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data Contratação</th>
            </tr>
            <?php while($row = $result_funcionarios->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['matricula']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['sobrenome']; ?></td>
                <td><?php echo $row['dt_cont']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </main>
</body>
</html>
