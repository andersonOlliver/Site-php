<?php
require_once("_includes/modelos/Usuario.php");
if (!isset($_SESSION)) {
    session_start();
}

$temp = unserialize($_SESSION['usuario']);
$usuario = new Usuario($temp->getLogin(), $temp->getSenha());

$dados = $usuario->todos();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página Inicial</title>
        <link rel="stylesheet" href="_css/estilo.css" media="screen" title="no title" charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
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
        <main class="principal painel">
            <div id="msg-alerta" style="margin-top: 70px">
                <p>Se você tem acesso aqui lembre-se: Com grandes poderes vem grandes responsabilidades!</p>
            </div>
            <section id="dados-section">
                <h2 id="titulo">Listagem dos usuários cadastrados</h2>
                <table id="dados-gerais">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>LOGIN</th>
                            <th>SENHA</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dados as $k => $a) {
                            echo "<tr>";
                            echo "<td>" . $a->getId() . "</td>";
                            echo "<td>" . $a->getLogin() . "</td>";
                            echo "<td>" . $a->getSenha() . "</td>";
                            echo "<td>";

                            echo "<a href='admin.php'><i class='material-icons button edit'>edit</i></a>";
                            echo "<a href='#' onclick='enviaPainelConfirmacao(" . $a->getId() . ")'><i class='material-icons button delete'>delete</i></a>";

                            "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </section>
            <section id="msg-confirma" style="display: none">
                <h1>Tem certeza disso? </h1>
                
                <div id="botoes">
                    <input class="botao-personalizado" type="button" name="sim" id="sim" value="Sim" onclick="excluir()"  />
                    <input class="botao-personalizado" type="button" name="nao" id="nao" value="Não" onclick="retornaTabela()" />
                </div>
            </section>
            <script>
                function enviaPainelConfirmacao(id) {
                    document.getElementById("dados-section").style.display = "none";
                    console.log(document.getElementById("msg-confirma").style.display);
                    document.getElementById("msg-confirma").style.display = "block";
                    console.log(document.getElementById("msg-confirma").style.display);
                    localStorage.setItem("id", id);
                }

                function retornaTabela() {
                    document.getElementById("msg-confirma").style.display = "none";
                    document.getElementById("dados-section").style.display = "block";
                    localStorage.removeItem("id");
                }
                
                function excluir(){
                    var id = localStorage.getItem("id");
                    localStorage.removeItem("id");
                    window.location = "_controlador/remover-usuario.php?id="+id;
                }
            </script>
            <footer style="font-family: 'Open Sans', sans-serif; color:white; margin-top: 130px">
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
    <link href="_css/retaguarda.css" rel="stylesheet" type="text/css"/>
</html>