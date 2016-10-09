<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_css/estilo.css" media="(min-width: 801px)" title="no title" charset="utf-8">
        <link rel="stylesheet" href="_css/estilo_mobile.css" media="(min-width: 320px) and (max-width: 800px)" title="no title" charset="utf-8">
        <link rel="stylesheet" href="_css/admin.css" media="(min-width: 788px)" title="no title" charset="utf-8">
        <link rel="stylesheet" href="_css/admin_mobile.css" media="(min-width: 320px) and (max-width: 787px)" title="no title" charset="utf-8">
        <link rel="stylesheet" href="_css/agendamento.css">
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
                        <li><a href="#">Fotos</a></li>
                        <li><a href="https://www.facebook.com/Aratur/">Facebook</a></li>
                        <li><a href="agendamento.php">Agendamento</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <main class="principal painel">
            <section>
                <div id="descricao">
                    <p>Solicite sua passagem</p>
                </div>
                <form action="" method="">
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div>
                            <label>Nome</label>
                            <input type="text" name="nome" placeholder="Digite seu nome"> 
                            <label>Sobrenome</label>
                            <input type="text" name="sobrenome" placeholder="Digite seu sobrenome"
                        </div>


                    </fieldset>
                    <fieldset>
                        <legend>Dados Endereço</legend>
                        <div id="destino"
                             <label>Cidade Origem</label>
                            <select>
                                <option value="araputanga">Araputanga</option>
                                <option value="cuiaba">Cuiabá</option>
                            </select>
                            <label>Cidade Destino</label>
                            <select>
                                <option value="araputanga">Araputanga</option>
                                <option value="cuiaba">Cuiabá</option>
                            </select>
                        </div>

                    </fieldset>
                    <button type="submit">Salvar</button>
                </form>

            </section>
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
</html>
