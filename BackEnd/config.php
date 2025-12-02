<?php

define('DB_TYPE', 'mysql');

// Config para SQLite
if (DB_TYPE === 'sqlite') {
    define("DATABASE_SQLITE", "panacea_farmacia.sqlite");
}

// Config para MySQL
elseif (DB_TYPE === "mysql") {
    define("HOST_MYSQL", "localhost");
    define("USER_MYSQL", "root");
    define("PASS_MYSQL", "");
    define("DBNAME_MYSQL", "panacea_farmacia");
}
else {
     die("SGBD não definido! <b>" . DB_TYPE."</b>");
 }
?>