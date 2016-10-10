<?php


require("../_includes/modelos/usuario.php");

$usuario = new Usuario($_POST['usuario'], $_POST['senha']);



echo 'Usuario = '.$usuario->login.'<br/>';
echo 'Senha = '.$usuario->senha;


?>