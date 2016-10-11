<?PHP
    require_once ("../config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Pedido_Agendamento</title>
    
    </head>
    <body>
        <?php
//error_reporting(~E_NOTICE);
        error_reporting(E_ALL);

//header("Location: error.html");
//$_SERVER['REQUEST_METHOD'];

        echo "<br />Tipo de requisição: " . $_SERVER['REQUEST_METHOD'];
        
        //verifica se a variável foi iniciada
        if (isset($_REQUEST['nome'])) {
            $nome = $_REQUEST['nome'];
        }
        
        $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
        
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
        
        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $cidades = isset($_POST['cidades']) ? $_POST['cidades'] : null;
        
        //$senha = md5($_POST['senha']);

        if (($_SERVER['REQUEST_METHOD'] == "POST") && ($nome && $sobrenome && $telefone && $email && cidades)) {

            echo "<br />nome: " . $nome;
            echo "<br />sobrenome: " . $sobrenome;
            echo "<br />telefone: " . $telefone;
            echo "<br />email" . $email;
            echo "<br />cidades".$cidades;
            
            //Insere dados dos campos na tabela
            $sql_insere_dados = "INSERT INTO tb_cliente (nome,sobrenome,telefone,email)VALUES ('" . $nome . "','" . $sobrenome . "','" . $telefone . "', '" . $email. "')";
           
            $result = mysqli_query($connBD,$sql_insere_dados);

            if ($result) {
                echo "<br />Dados inseridos com sucesso!";
            } else {
                echo "<br />Erro inserindo dados: " . mysqli_error($connBD);
            }
        } else {
            echo "<br />Não vai rolar :(";
        }
        ?>
        <br />
        
    </body>
</html> 
