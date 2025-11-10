<?php
// Aqui define as credenciais de acesso ao banco de dados
$localhost = "localhost";
$user = "root";
$senha = "";
$banco = "panacea_farmacia";

// Fiz a conexão do banco de dados usando MySQLi
$conecta = new mysqli($localhost, $user, $senha, $banco);

if($conecta -> conect_error) {
    die ("Erro na conexão com banco de dados: " . $conecta -> conect_error);
}
$conecta->set_charset("utf8"); 
?>
