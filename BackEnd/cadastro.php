<?php
include ('conexao.php'); // aqui vc inclui o arquivo de conexão com o banco de dados

$nome = $_POST['nome'] ?? '';
$usuario = $_POST['usuario'] ?? ''; // como exemplo, utilizamos 9 caracteres para o usuário, que é qntdd do RA dos alunos.
$senha = $_POST['senha'] ?? '';
$email = $_POST['email'] ?? '';
$dataCadastro = $_POST['data'] ?? '';

// as variaveis acima, recebem os valores inseridos na página "cadastro.html".


    if (empty($nome) || empty($email) || empty($senha) || empty($dataCadastro) || empty($usuario)) {
        die("Preencha todos os campos obrigatórios."); // essa parte do código verifica se algum campo ficou vazio
                                                       // se ss, ele exibe a mensagem e encerra o processamento
    }

$verificaEmail = $conecta->prepare("SELECT id_user FROM USUARIOS WHERE email = ?");
$verificaEmail->execute([$email]); // Executa e passa o parâmetro diretamente
$total_encontrado = $verificaEmail->rowCount(); // Conta o número de linhas

if ($total_encontrado > 0) { 
    die("Erro: Este usuário já está cadastrado no banco de dados.");
}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT); // transforma a senha em método criptografado

$dataCadastro = date("Y-m-d");

$inserirDados = $conecta->prepare("INSERT INTO USUARIOS (nome, usuario, senha_hash, email, data_cadastro) 
VALUES (:nome, :usuario, :senha_hash, :email, :data_cadastro)");

// Bind usando parâmetros nomeados (o que você está fazendo)
$inserirDados->bindParam(':nome', $nome);
$inserirDados->bindParam(':usuario', $usuario);
$inserirDados->bindParam(':senha_hash', $senhaHash); // Nome correto é 'senha_hash' no SQL
$inserirDados->bindParam(':email', $email);
$inserirDados->bindParam(':data_cadastro', $dataCadastro);


if ($inserirDados->execute()) { // executa o comando SQL de inserção (INSERT)
    echo "<h3>Funcionário cadastrado com sucesso!</h3>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Usuário gerado: <b>$usuario</b><br>";
    echo '<p>Iniciar Sessão <a href="../index.html">Fazer login</a></p>'; // apos cadastro mostra os dados e link para login
} else {
    $erroInfo = $InserirDados->errorInfo();
echo "Erro ao cadastrar: " . $erroInfo[2]; // caso aconteca algum erro na inserção ou conexão, ele exibe a mensagem de erro
    
}

$conecta=null();

?>
