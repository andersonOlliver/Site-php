<?php

require("../_includes/modelos/Usuario.php");

if (!isset($_SESSION)) {
    session_start();
}

$temp = unserialize($_SESSION['usuario']);
$usuario = new Usuario($temp->getLogin(), $temp->getSenha());

$id = $_GET['id'];

echo 'id = '.$id;

if($usuario->remove($id)){
    header("Location: ../retaguarda.php");
}
?>