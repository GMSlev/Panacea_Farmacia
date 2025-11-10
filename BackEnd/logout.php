<?php
session_start();
session_destroy();
header ('Location: index.php');
exit();
?>

// apaga os dados e redireciona para a pagina de login novamente.
