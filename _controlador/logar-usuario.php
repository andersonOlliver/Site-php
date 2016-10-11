<?php
require("../_includes/modelos/Usuario.php");

$usuario = new Usuario($_POST['usuario'], $_POST['senha']);
//$usuario = new Usuario();

echo 'Usuario = ' . $usuario->getLogin() . '<br/>';
echo 'Senha = ' . $usuario->getSenha();

$usuario = $usuario->validarLogin();


if (!$usuario) {
    echo "Login e senha não encontrados!";
} else {
    echo "<br/><br/><br/>ID = " . $usuario->getId() . ", <br/>Login = " . $usuario->getLogin() . ", <br/>Senha = " . $usuario->getSenha();

    if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
        $testeUsuario = unserialize($_SESSION['usuario']);

        echo "<br/> usuario_login: " . $testeUsuario->getLogin();
        echo "<br/> usuario_id: " . $testeUsuario->getId();
        echo "<br/> usuario_senha: " . $testeUsuario->getSenha();

        echo "<br/> session_id: " . session_id();
        echo "<br/> user_id: " . $_SESSION['user_id'];
        echo "<br/> user_login: " . $_SESSION['user_login'];
    }
}
?>
<br/>
<br/>
<br/>

<?php
if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
    print_r($_SESSION);
    header("Location: ../retaguarda.php");
    exit();
}
?>
