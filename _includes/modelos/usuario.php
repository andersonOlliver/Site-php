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
