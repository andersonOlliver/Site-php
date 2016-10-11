<?php


require("../_includes/modelos/Usuario.php");

$usuario = new Usuario($_POST['usuario'], $_POST['senha']);
//$usuario = new Usuario();

echo 'Usuario = ' . $usuario->getLogin() . '<br/>';
echo 'Senha = ' . $usuario->getSenha();

$usuario = $usuario->validarLogin();


if($usuario == NULL){
    echo "Login e senha não encontrados!";
}else{
    echo "<br/><br/><br/>ID = ".$usuario->getId().", <br/>Login = ".$usuario->getLogin().", <br/>Senha = ".$usuario->getSenha();
}



//echo $usuario->todos();
?>
