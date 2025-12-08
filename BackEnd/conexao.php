<?php
require_once 'config.php';

if (DB_TYPE === 'mysql') {
    $conecta = new mysqli(HOST_MYSQL, USER_MYSQL, PASS_MYSQL, DBNAME_MYSQL);
                        // localhost,   root,        "",       panacea_farmacia
    if ($conecta->connect_error) {
        die("Falha na conexão: " . $conecta->connect_error);
    }
} elseif (DB_TYPE === 'sqlite') {
    try {
        // Conexão PDO com SQLite
        $conecta = new PDO("sqlite:" . DATABASE_SQLITE);
        // Configura para lançar exceções em caso de erro SQL
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    } catch (PDOException $e) {
        // Captura e exibe erro de conexão (ex: arquivo DB não encontrado)
        die("Falha na conexão SQLite: " . $e->getMessage()); 
    }
}    

// foi rodado uma vez pra criar o banco
/* if (DB_TYPE !== 'sqlite') { die("Este script é apenas para SQLite. Altere DB_TYPE em config.php."); }

$query = "CREATE TABLE IF NOT EXISTS usuarios(
id_user INTEGER not null primary key autoincrement,
nome text not null,
usuario char(16) not null,
senha_hash text not null, 
email TEXT not null UNIQUE, 
data_cadastro DATE)";
$conecta->exec($query);
echo "Tabela USER (SQLite) criada/verificada com sucesso (campo **email UNIQUE**)!";*/


?>
