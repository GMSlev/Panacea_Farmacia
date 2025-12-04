<?php
require "conexao.php";


$nome     = $_POST['nome'] ?? '';
$email    = $_POST['email'] ?? '';
$senha    = $_POST['senha'] ?? '';


if (empty($nome) || empty($email) || empty($senha)) {
    die("Preencha todos os campos obrigatórios.");
}


$sqlCheck = $conn->prepare("SELECT id_user FROM USUARIOS WHERE email = ?");
$sqlCheck->bind_param("s", $email);
$sqlCheck->execute();
$sqlCheck->store_result();

if ($sqlCheck->num_rows > 0) {
    die("Este e-mail já está cadastrado no sistema.");
}


$base = explode("@", $email)[0]; 
$base = strtoupper(substr($base, 0, 5)); 


$sqlCount = $conn->query("SELECT COUNT(*) AS total FROM USUARIOS");
$total = $sqlCount->fetch_assoc()['total'] + 1;

$numero = str_pad($total, 4, "0", STR_PAD_LEFT); 
$usuario = $base . $numero;


$usuario = substr($usuario, 0, 9);


$senhaHash = password_hash($senha, PASSWORD_DEFAULT);


$dataCadastro = date("Y-m-d");


$sqlInsert = $conn->prepare("
    INSERT INTO USUARIOS (nome, usuario, senha_hash, email, data_cadastro)
    VALUES (?, ?, ?, ?, ?)
");

$sqlInsert->bind_param("sssss", $nome, $usuario, $senhaHash, $email, $dataCadastro);

if ($sqlInsert->execute()) {
    echo "<h3>Funcionário cadastrado com sucesso!</h3>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Usuário gerado: <b>$usuario</b><br>";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
