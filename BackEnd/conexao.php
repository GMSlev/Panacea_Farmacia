<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "panacea_farmacia";

// Criar conexão
$conecta = new mysqli($host, $user, $senha, $banco);

// Checar conexão
if ($conecta->connect_error) {
    die("Falha na conexão: " . $conecta->connect_error);
}
?>
