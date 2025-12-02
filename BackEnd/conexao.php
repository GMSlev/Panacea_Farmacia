<?php
require_once 'config.php';

if (DB_TYPE === 'mysql') {
    $conecta = new mysqli(HOST_MYSQL, USER_MYSQL, PASS_MYSQL, DBNAME_MYSQL);
                        // localhost,   root,        "",       panacea_farmacia
    if ($conecta->connect_error) {
        die("Falha na conexão: " . $conecta->connect_error);
    }
} elseif (DB_TYPE === 'sqlite') {
    $conecta = new PDO("sqlite:" . DATABASE_SQLITE);
}
if ($conecta->connect_error) {
    die("Falha na conexão: " . $conecta->connect_error);
}
?>
