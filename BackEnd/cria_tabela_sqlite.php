 <?php
 /*
require_once 'config.php';
require_once 'conecta.php';

if($conecta==true){

if (DB_TYPE !== 'sqlite') { die("Este script é apenas para SQLite. Altere DB_TYPE em config.php."); }

$query = "CREATE TABLE IF NOT EXISTS usuarios(
id_user INTEGER not null primary key autoincrement,
nome text not null,
usuario char(16) not null,
senha_hash text not null, 
email TEXT not null UNIQUE, 
data_cadastro DATE)";
$pdo->exec($query);
echo "Tabela USER (SQLite) criada/verificada com sucesso (campo **email UNIQUE**)!";

$pdo = null;
}*/
?> 