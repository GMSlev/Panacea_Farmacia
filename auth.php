<?php
session_start(); // inicia a sessao
require_once 'conexao.php'; //carrega apenas uma vez o arquivo conexao.php

if (isset($_POST['email']) && !empty($_POST['email']) && // verifica se email existe no formulario enviado e se nao esta vazio
    isset($_POST['senha']) && !empty($_POST['senha'])) { // verifica se senha existe no formulario enviado e se nao esta vazio
    echo "Campos válidos! Pode processar o login"; // se tudo estiver correto, executara isso
} else { // caso algum nao esteja certo...
    echo "Por favor, preencha todos os campos."; // ira exibir isso
}
?>