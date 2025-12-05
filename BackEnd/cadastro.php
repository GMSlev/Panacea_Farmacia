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

$verificaEmail = $conecta->prepare("SELECT id_user FROM USUARIOS WHERE email = ?"); // prepara o comando SQL de consultar no banco de dadaos a coluna email
$verificaEmail->bind_param("s", $email); // vincula o parâmetro de email ao comando SQL, indicando que é uma string ("s").
$verificaEmail->execute(); // roda o comando sql que no caso é a consulta (SELECT)!!
$verificaEmail->store_result(); // ao finalizar a consulta, ele armazena o valor para a variável $verificaEmail.

// a estrutura acima verifica se o email já está cadastrado no banco de dados

if ($verificaEmail->num_rows > 0) { // aqui ele verifica as linhas na tabela do banco de dados que ja possuem o email informado
    die("Este usuário já está cadastrado no sistema.<br><p>Voltar para <a href='../FrontEnd/cadastro.html'>Cadastro</a></p>");
}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT); // transforma a senha em método criptografado

$dataCadastro = date("Y-m-d");

$inserirDados = $conecta->prepare("
    INSERT INTO USUARIOS (nome, usuario, senha_hash, email, data_cadastro)
    VALUES (?, ?, ?, ?, ?) 
"); // da mesma maneira que a consulta, aqui ele prepara o comando SQL para inserir os dados no banco de dados

$inserirDados->bind_param("sssss", $nome, $usuario, $senhaCriptografada, $email, $dataCadastro);

if ($inserirDados->execute()) { // executa o comando SQL de inserção (INSERT)
    echo "<h3>Funcionário cadastrado com sucesso!</h3>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Usuário gerado: <b>$usuario</b><br>";
    echo '<p>Iniciar Sessão <a href="../index.html">Fazer login</a></p>'; // apos cadastro mostra os dados e link para login
} else {
    echo "Erro ao cadastrar: " . $conecta->error; // caso aconteca algum erro na inserção ou conexão, ele exibe a mensagem de erro
    
}

$conecta->close();
?>
