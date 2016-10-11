<?php
    require '_includes/config.php';
?>

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
                        <li><a href="login.php">Sistur</a></li>
                        <li><a href="https://www.facebook.com/Aratur/">Facebook</a></li>
                        <li><a href="agendamento.php">Agendamento</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <main class="principal painel">
            <div id="descricao">
                <p>Agora você pode solicitar passagens pela web, agende a sua agora mesmo!</p>
            </div>
            <section>
                <?php
                    $query = mysql_query("SELECT nome FROM tb_cliente");
                ?>
                
                <form method="POST" action="_includes/modelos/pedido.php">
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div>
                            <label>Nome</label>
                            <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required> 
                            <label>Sobrenome</label>
                            <input type="text" name="sobrenome" placeholder="Digite seu sobrenome"
                        </div>
                        <div>
                            <label>Tel:</label>
                            <input id="telefone" type="number" name="telefone" placeholder="Digite seu telefone" required>
                        </div>
                        <div>
                            <label>E-mail</label>
                            <input id="email" type="text" name="email" style="width: 300px" placeholder="Digite seu e-mail">
                        </div>

                    </fieldset>
                    <fieldset>
                        <legend>Dados Endereço</legend>
                        <div id="destino"
                             <label>Cidade Origem</label>
                            <select>
                                <?php while ($city = mysql_fetch_array($query)) { ?>
                                    <option value="<?php echo $city['nome'] ?>"></option>
                                <?php } ?>
                                <option value="cuiaba">Cuiabá</option>
                            </select>
                            <label>Cidade Destino</label>
                            <select>
                                <option value="araputanga">Araputanga</option>
                                <option value="cuiaba">Cuiabá</option>
                            </select>
                        </div>
                        <div>
                            <label>Rua</label>
                            <input id="rua" type="text" name="rua" placeholder="Digite nome da rua">
                            <label>Quadra</label>
                            <input id="quadra" type="text" name="quadra" placeholder="Digite a quadra">
                            <label>Número</label>
                            <input id="numero" type="number" name="numero" style="width:40px">
                        </div>
                        <div> 
                            <label>Data Viagem</label>
                            <input type="date" name="data">
                        </div>

                    </fieldset>
                    <div id="butao">
                        <button type="submit">Enviar</button>
                    </div>
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
