<?php
session_start();
include('conexao.php');

if(isset($_POST['usuario']) && isset($_POST['senha'])){

    $usuario = $conecta->real_escape_string($_POST['usuario']);
    $senha   = $_POST['senha']; // senha digitada

    // Seleciona o usuário do banco
    $sql = "SELECT * FROM USUARIOS WHERE usuario = '$usuario'";
    $result = $conecta->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();

        // Verifica senha
        if(password_verify($senha, $row['senha_hash'])){
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nome'] = $row['nome'];

            header("Location: painel/home.php"); // dashboard
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Panácea</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleLogin.css">
</head>
<body>
    <h1>Panácea Software</h1>
    <img src="Panácea.png" alt="Logo Panácea" style="width:150px;height:150px;"><br><br>

    <?php if(isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>

    <form action="" method="POST">
        <input type="text" name="usuario" placeholder="Nome de usuário" required><br><br>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>

    <button onclick="window.location.href='formulario.php'">Cadastrar</button><br><br>
</body>
</html>
