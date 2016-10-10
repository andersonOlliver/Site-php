<?php

use Usuario;

//require("../config.php");
//require("../_includes/modelos/usuario.php");

class UsuarioDAO {

    private $connBD;
    
    function __construct($connBD) {
        $this->connBD = $connBD;
    }

    
    public function todos(){
        $sql = "SELECT * FROM tb_login";
        
        $resultado = mysqli_query($this->connBD, $sql);
        echo $resultado;
        $retorno = array();
        $indice = 0;
        while($dados = mysql_fetch_assoc($resultado)){
            $usuario = new Usuario($dados['usuario'], $dados['senha'], $dados['idlogin']);
            $retorno[$indice] = $usuario;
            $indice++;
        }
    
        return $retorno;
    }
    
//    function getConnBD() {
//        return $this->connBD;
//    }
//
//    function setConnBD($connBD) {
//        $this->connBD = $connBD;
//    }


    
}

?>