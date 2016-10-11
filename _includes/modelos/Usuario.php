<?php

class Usuario {

    private $id;
    private $login;
    private $senha;

    function __construct($login, $senha, $id = null) {
        $this->id = $id;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function validarLogin() {
        if ($this->haDados()) {
            $sql = "SELECT distinct(idlogin), usuario, senha FROM tb_login where usuario = '" . $this->login . "' AND senha = '" . $this->senha . "';";
            $conn = new mysqli("localhost", "root", "olliver89632", "db_sistur");
            if (!$resultado = $conn->query($sql)) {
                return null;
            } else {
                while($linha = $resultado->fetch_assoc()) {
                    $usuario = new Usuario($linha['usuario'], $linha['senha'], $linha['idlogin']);
                }
                return $usuario;
            }
        }
        return null;
    }

    public function todos() {
        $sql = "SELECT * FROM tb_login";
        $conn = new mysqli("localhost", "root", "olliver89632", "db_sistur");

        if (!$resultado = $conn->query($sql)) {
            echo "Erro ao executar busca [" . $conn->error . "]";
        } else {
            while ($linha = $resultado->fetch_assoc()) {
                echo $linha['usuario'] . "<br />";
//                $usuario = new Usuario($linha['usuario'], $linha['senha'], $linha['idlogin']);
            }
        }
    }

    private function haDados() {
        return $this->login != null and $this->senha != null;
    }

    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}

?>
