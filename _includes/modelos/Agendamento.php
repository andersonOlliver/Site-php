<?php

class Agendamento {

    private $idagendamento;
    private $nome;
    private $sobrenome;
    private $telefone;
    private $email;
    private $cidadeOri;
    private $cidadeDes;
    private $rua;
    private $quadra;
    private $numero;
    private $dataViagem;

    function __construct($idagendamento = null, $nome = null, $sobrenome = null, $telefone = null, $email = null, $cidadeOri = null, $cidadeDes = null, $rua = null, $quadra = null, $numero = null, $dataViagem = null) {
        $this->idagendamento = $idagendamento;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cidadeOri = $cidadeOri;
        $this->cidadeDes = $cidadeDes;
        $this->rua = $rua;
        $this->quadra = $quadra;
        $this->numero = $numero;
        $this->dataViagem = $dataViagem;
    }

    function getIdagendamento() {
        return $this->idagendamento;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getCidadeOri() {
        return $this->cidadeOri;
    }

    function getCidadeDes() {
        return $this->cidadeDes;
    }

    function getRua() {
        return $this->rua;
    }

    function getQuadra() {
        return $this->quadra;
    }

    function getNumero() {
        return $this->numero;
    }

    function getDataViagem() {
        return $this->dataViagem;
    }

    function setIdagendamento($idagendamento) {
        $this->idagendamento = $idagendamento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCidadeOri($cidadeOri) {
        $this->cidadeOri = $cidadeOri;
    }

    function setCidadeDes($cidadeDes) {
        $this->cidadeDes = $cidadeDes;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setQuadra($quadra) {
        $this->quadra = $quadra;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setDataViagem($dataViagem) {
        $this->dataViagem = $dataViagem;
    }

}
