<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header('location: index.php');
    exit ();
}


/*
código acima serve para proteger de login de usuários que não estão logados.
Abaixo deve ser adicionado o código html (com css).
*/

//<a href="logout.php" class="btn-logout">Sair</a>    tirar do comentario quando for acrescentar.


// link para redirecionamento de logout,  no fim do código html.
?>

