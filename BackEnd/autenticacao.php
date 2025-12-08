<?php
session_start(); // inicia a sessao
include ('conexao.php'); //carrega apenas uma vez o arquivo conexao.php

$usuario = $_POST['usuario'] ?? ''; // como exemplo, utilizamos 9 caracteres para o usuário, que é qntdd do RA dos alunos.
$senha = $_POST['senha'] ?? '';  // verifica se senha existe no formulario enviado e se nao esta vazio 

$sql = "SELECT * FROM usuarios WHERE usuario = ? "; // prepara o comando SQL de consultar no banco de dadaos a coluna usuario
$consultaLogin = $conecta->prepare($sql); // da mesma maneira que a consulta, aqui ele prepara o comando SQL para inserir os dados no banco de dados
$consultaLogin->execute([$usuario]); // get

$dados = $consultaLogin->fetch(PDO::FETCH_ASSOC);

if ($dados) {

    if (password_verify($senha, $dados['senha_hash'])) {

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
