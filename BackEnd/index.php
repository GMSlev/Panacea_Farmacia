<?php
include('conexao.php');

if(isset($_POST['usuario']) && isset($_POST['senha'])){

    if(strlen($_POST['usuario']) == 0) {
        echo "Preencha com o seu usuario";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha a sua senha";
    }else{

        // Captura os valores do formulário
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $conecta->query($sql_code) or die("Falha na execução do código sql: " . $mysqli->error);

        // Se o login for encontrado
        if ($sql_query->num_rows == 1) {
            // Redireciona para outra página (por exemplo, página principal)
            header("Location: index.html");
            exit; // Importante para parar o código após o redirecionamento
        } else {
            echo "Usuário ou senha incorretos!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Panácea.jpg">
    <title>Login</title>
</head>
<body>
    <h1>Panácea Software</h1>
    <img src="Panácea.png" alt="Logo Panácea" style="width:150px;height:150px;"><br><br>

    <h2>Login</h2>

    <!-- Formulário que envia os dados via POST -->
    <form action="" method="POST">
        <input type="text" name="usuario" placeholder="Nome de usuário"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <button type="submit">Entrar</button>
    </form>
    <!-- Botão que redireciona para o cadastro -->
    <button onclick="window.location.href = 'formulario.php'">Cadastrar</button><br><br>
    
</body>
</html>



// consulta de produtos 

<?php
include('conexão.php');

$sql_produtos ="SELECT * FROM ... ORDER BY ... DESC";
$result_produtos = $conecta->query ($sql_produtos);


// consulta de funça

$sql_funcionarios = " SELECT * FROM ... ORDER BY ... DESC";
$result_funcionarios = $conecta ->query ($sql_funcionarios);
?>

// deixei algumas partes em branco para atualizar depois da criação do banco 

