<?php

//use Usuario;

//use Usuario;

require("../Usuario.php");
//require_once ("config.php");
//require_once("../modelos/Usuario.php");

class UsuarioDAO {

    private $connBD;

    function __construct() {
        $this->connBD = new mysqli("localhost","root","olliver89632","db_sistur");
    }

//    public function login($usuario, $senha) {
//        $sql = "SELECT * FROM tb_login WHERE usuario = ".$usuario." AND senha = ". $senha.";";
////        echo getcwd();
//        $conn = new mysqli("localhost","root","olliver89632","db_sistur");
//        
//        if(!$resultado = $conn->query($sql)){
//            return null;
//        }else{
//            return "encontrado";
//        }
//    }
    
    
    public function todos() {
        $sql = "SELECT * FROM tb_login";
//        echo getcwd();
        $conn = new mysqli("localhost","root","olliver89632","db_sistur");

        if(!$resultado = $conn->query($sql)){
            echo "Erro ao executar busca [".$conn->error."]";
        }else{
            while($linha = $resultado->fetch_assoc()){
                echo $linha['usuario']."<br />";
//                $usuario = new Usuario($linha['usuario'], $linha['senha'], $linha['idlogin']);
            }
        }

       
//        $retorno = array();
//        $indice = 0;
//        while ($dados = $resultado->fetch_array(MYSQLI_ASSOC)) {
//            $usuario = new Usuario($dados['usuario'], $dados['senha'], $dados['idlogin']);
//            $retorno[$indice] = $usuario;
//            $indice++;
//        }
//
//        return $retorno;
    }
    
    function getConnBD() {
        return $this->connBD;
    }
}
?>
