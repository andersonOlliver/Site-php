<!DOCTYPE html>
<?php
require_once("_includes/modelos/Usuario.php");
error_reporting(~E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
$login;
$senha;

if ($temp = unserialize($_SESSION['usuario'])) {
    $usuario = new Usuario($temp->getLogin(), $temp->getSenha());


    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if ($id != null) {
        $usuarioCadastro = $usuario->porId($id);
        if (!is_bool($usuarioCadastro)) {
            $login = $usuarioCadastro->getLogin();
            $senha = $usuarioCadastro->getSenha();
        }
    } else {
        $login = "";
        $senha = "";
    }
    echo $login . $senha;
} else {
    header("Location: login.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Inicial</title>
    </head>
    <body style="zoom:0">
        <div id="interface-menu">
            <header>
                <a href="index.php"><img src="_img/logo_final.fw.png"></a>
                <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul type="disk">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="admin.php">Cadastro</a></li>
                        <li><a href="login.php">Sistur</a></li>
                        <li><a href="https://www.facebook.com/Aratur/">Facebook</a></li>
                        <li><a href="agendamento.php">Agendamento</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <main class="principal painel">
            <section id="form"> 
                <form action="_controlador/cadastrar-usuario.php" method="POST">
                    <fieldset>
                        <legend>Cadastrar Funcionário</legend>

                        <label for="id">ID funcionário: </label>
                        <?php echo '<input id = "id" type = "text" value = "' . $id . '" name = "id" disabled = "true"
                        size = "30"/>'; ?>

                        <br class="block"></br>

                        <label for="login">Login funcionário: </label>
                        <?php echo '<input id="usuario" type="text" value="' . $login . '" name="usuario" size="30"/>'; ?>
                        <br class = "block"></br>

                        <label for = "codigoFuncionario">Senha: </label>
                        <?php echo '<input id = "senha" type = "password" value="' . $senha . '" name="senha" size = "30"/>'; ?>
                        <br class = "block"></br>

                    </fieldset>

                    <div id = "botoes">

                        <input id = "enviar" class = "botao-personalizado" type = "submit" name = "name" value = "Salvar dados"/>
                    </div>
                </form>
            </section>

            <footer style = "font-family: 'Open Sans', sans-serif; color:white; margin-top: 130px" >
                Site desenvolvido por<br>
                Rafael Penha RGA: 201311316041 <br>
                Anderson Oliver RGA: 201411316024<br>
                como parte da avaliação da disciplina <br>
                Programação em Ambiente Web I.<br>
                Instituto de Computação<br>
                UFMT - Cuiabá – 2016<br>
            </footer>
        </main>
    </body>
    <link rel = "stylesheet" href = "_css/estilo.css" media = "(min-width: 801px)" title = "no title" charset = "utf-8">
    <link rel = "stylesheet" href = "_css/estilo_mobile.css" media = "(min-width: 320px) and (max-width: 800px)" title = "no title" charset = "utf-8">
    <link rel = "stylesheet" href = "_css/admin.css" media = "(min-width: 788px)" title = "no title" charset = "utf-8">
    <link rel = "stylesheet" href = "_css/admin_mobile.css" media = "(min-width: 320px) and (max-width: 787px)" title = "no title" charset = "utf-8">
    <script src = "_script/controlador.js" charset = "utf-8"></script>
</html>
