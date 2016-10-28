<?php

require_once("../_includes/modelos/Usuario.php");
if (!isset($_SESSION)) {
    session_start();
}

if ($temp = unserialize($_SESSION['usuario'])) {
    $usuario = new Usuario($temp->getLogin(), $temp->getSenha());

    $dados = $usuario->todos();
} else {
    header("Location: ../login.php");
}

$usuarioCadastro = new Usuario($_POST['usuario'], $_POST['senha']);
$id = isset($_POST['id']) ? $_POST['id'] : null;
if (id != null) {
    $usuarioCadastro->setId($id);
}

if($usuarioCadastro->salvar()){
    header("Location: ../retaguarda.php");
}
?>
