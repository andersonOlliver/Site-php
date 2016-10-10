<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="_css/login.css"
    </head>
    <body>
        <div id="logo-login">
            <img src="_img/logo_final.fw.png">
        </div>
        <form action="_controlador/logar-usuario.php" method="POST">
            <div id="container">
                <fieldset>
                    <legend>Login SISTUR</legend>
                    <div>
                        <label>Usuário</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário">
                    </div>
                    <div>
                        <label>Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                    </div>
                    <div>
                        <button type="submit">Entrar</button>
                        <button><a href="index.php" id="sair">Sair</a></button>
                    </div>
                </fieldset>
            </div>
        </form>    
    </body>
</html>