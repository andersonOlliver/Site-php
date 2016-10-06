<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="_lib/css/stylesheet.css">
        <title>Cadastro Passagens</title>
    </head>
    <body>
        <header>

            <div id="logo">
                <img src="_lib/img/logo_final.fw.png">
            </div>
        </header>
        <div class="main">
            <form  method="POST" action="form.php">
                <fieldset>
                    <legend>Agendamento</legend>
                    <div>
                        <label>De:</label>
                        <select name="cidades" id="cidades">
                            <option value="araputanga">Araputanga</option>
                            <option value="cuiaba">Cuiabá</option>
                        </select>
                    </div>
                    <div>
                        <label>Para:</label>
                        <select>
                            <option value="cuiaba">Cuiabá</option>
                            <option value="araputanga">Araputanga</option>
                            <option value="cpa">CPA</option>
                        </select>
                    </div>
                    <div>
                        <label>Data Pedido</label>
                        <input type="date" name="dataPedido">
                        <label>Data Viagem</label>
                        <input type="date" name="dataAgendamento" >
                    </div>
                    <div>
                        <label>Nome</label>
                        <input  type="text" name="nome" id="nome" size="60" maxlength="60" required>
                    </div>
                    <div>
                        <label>E-mail</label>
                        <input type="text" name="email" id="email" size="50" maxlength="50" required>
                    </div>

                    <div>
                        <label>Rua</label>
                        <input type="text" name="rua" id="rua" size="100">
                        <label>Quadra</label>
                        <input type="number" name="quadra" id="quadra" size="30">
                        <label>Casa</label>
                        <input type="text" name="casa" id="casa">
                        <label>Cep</label>
                        <input type="number" name="cep" id="cep">
                    </div>
                    <div>
                        <button type="submit">Salvar</button>
                        <button type="submit">Novo</button>
                        <button type="submit">Buscar</button>
                        <button type="submit">Excluir</button>
                    </div>

                </fieldset>
            </form>
        </div>
        <footer>

        </footer>
        <script>
            function somar() {
                getElementsByClassName('casa')
            }
        </script>
    </body>
</html>
