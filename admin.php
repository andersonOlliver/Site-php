<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Inicial</title>
    </head>
    <body style="zoom:0">
        <div id="interface-menu">
          <header>
            <a href="index.php"><img src="_lib/img/logo_final.fw.png"></a>
            <nav id="menu">
              <h1>Menu Principal</h1>
              <ul type="disk">
                <li><a href="index.php">Home</a></li>
                <li><a href="admin.php">Cadastro</a></li>
                <li><a href="#">Fotos</a></li>
                <li><a href="https://www.facebook.com/Aratur/">acebook</a></li>
                <li><a href="#">Fale conosco</a></li>
              </ul>
            </nav>
          </header>
        </div>
        <main class="principal painel">
            <section id="form">
                <fieldset>
                    <legend>Cadastrar Funcionário</legend>

                    <label for="funcionario">Funcionário: </label>
                    <input id="funcionario" type="text" name="funcionario" placeholder="Insira a funcionario"
                           oninput="validarTexto('funcionario')" onunfocus="validarTexto('funcionario')" size="30"
                           onfocus="validarTexto('funcionario')" />
                    <br class="block"></br>

                    <label for="codigoFuncionario">Código Funcionário: </label>
                    <input id="codigoFuncionario" type="text" name="codigoFuncionario" placeholder="Insira o código do funcionário"
                           oninput="validarTexto('codigoFuncionario')" onunfocus="validarTexto('codigoFuncionario')"  size="30"
                           onfocus="validarTexto('codigoFuncionario')" onchange="validarTexto('codigoFuncionario')"/>
                    <br class="block"></br>

                    <label for="cargo">Cargo:</label>
                    <input id="cargo" type="text" name="cargo" placeholder="Insira o cargo:"
                           oninput="validarTexto('cargo')" onunfocus="validarTexto('cargo')" size="30"
                           onfocus="validarTexto('cargo')" />
                    <br class="block"></br>

                    <label for="telefone">Telefone:</label>
                    <input id="telefone" type="text" name="telefone" placeholder="Insira o número de telefone:"
                           oninput="validarTexto('telefone')" onunfocus="validarTexto('telefone')"  size="30"
                           onfocus="validarTexto('telefone')" onchange="validarTexto('telefone')"/>
                    <br class="block"></br>

                </fieldset>
                <span id="msg-erro">Favor Verifique os campos</span>
                <div id="botoes">

                    <input id="enviar" class="botao-personalizado" type="button" name="name" value="Salvar dados" onclick="salvar()"/>
                </div>

            </section>
            <div id="msg">
                <input id="voltar"  class="voltar" type="button" name="voltar" alt="Clique para voltar" title="Clique para voltar"
                       value="Tentar novamente" onclick="voltarFormulario()" />
            </div>
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
    <link rel="stylesheet" href="_lib/css/estilo.css" media="(min-width: 801px)" title="no title" charset="utf-8">
    <link rel="stylesheet" href="_lib/css/estilo_mobile.css" media="(min-width: 320px) and (max-width: 800px)" title="no title" charset="utf-8">
    <link rel="stylesheet" href="_lib/css/admin.css" media="(min-width: 788px)" title="no title" charset="utf-8">
    <link rel="stylesheet" href="_lib/css/admin_mobile.css" media="(min-width: 320px) and (max-width: 787px)" title="no title" charset="utf-8">
    <script src="_lib/js/controlador.js" charset="utf-8"></script>
</html>
