<?php
session_start(); // inicia a sessao
require_once 'conexao.php'; //carrega apenas uma vez o arquivo conexao.php

$usuario = $_POST['usuario'] ?? ''; // como exemplo, utilizamos 9 caracteres para o usuário, que é qntdd do RA dos alunos.
$senha = $_POST['senha'] ?? '';  // verifica se senha existe no formulario enviado e se nao esta vazio 

$sql = "SELECT * FROM usuarios WHERE usuario = ? "; // prepara o comando SQL de consultar no banco de dadaos a coluna usuario
$consultaLogin = $conecta->prepare($sql);
$consultaLogin->bind_param("i", $usuario);  // da mesma maneira que a consulta, aqui ele prepara o comando SQL para inserir os dados no banco de dados
$consultaLogin->execute();
$resultado = $consultaLogin->get_result(); // get

if ($resultado->num_rows === 1) {

    $dados = $resultado->fetch_assoc(); 

    if ($senha === $dados['senha_hash']) {

        $_SESSION['logado']  = true;
        $_SESSION['usuario'] = $dados['usuario'];
        $_SESSION['nome']    = $dados['nome'];

        header("Location: ../FrontEnd/Inicio.html");
        exit;
    } else {
        echo "Usuário ou Senha incorreta<br>";
        echo '<p>Iniciar Sessão <a href="../index.html">Fazer login</a></p>';
        exit;
    }
} else {
    echo "ESTE USUÁRIO NÃO EXISTE NO SISTEMA.";
    echo '<p><a href="../FrontEnd/cadastro.html">CADASTRE-SE AQUI</a></p>';
    exit;
}
?>
