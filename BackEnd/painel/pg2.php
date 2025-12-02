<?php
session_start();

// Se o usuário já estiver logado, redireciona para o painel
if (isset($_SESSION['usuario'])) {
    header('location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleLogin.css">
    <title>Login</title>
</head> 

<body>
    <img src="imgs/panacea1.png" alt="imagem panácea">
    <h1>panácea</h1>
    <h2 id="principal">software</h2>

    <div class="glass-container">
        <h2>Login</h2>

        <!-- FORMULÁRIO DE LOGIN REAL -->
        <form action="autenticar.php" method="post">
            <div class="input-group">
                <input type="text" name="usuario" required>
                <label>Usuário</label>
            </div>

            <div class="input-group">
                <input type="password" name="senha" required>
                <label>Senha</label>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" name="lembrar">Lembrar de mim</label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <button type="submit" class="login-btn">Entrar</button>

            <div class="register-link">
                <p>Não tem uma conta? <a href="#">Registrar</a></p>
            </div>
        </form>
    </div>
</body>
</html>
