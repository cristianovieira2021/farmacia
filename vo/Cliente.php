<?php

class Cliente {

    private  $idCliente;
    private $nome;
    private $cpf;
    private $rg;
    private $data_Nascimento;
    private $endereco;
    private $telefone;
    private $email;
    private  $data_Cadastro;

    function getIdCliente() {
        return $this->idCliente;
    }
    function getNome() {
        return $this -> nome;
    }
    function getCpf() {
        return $this->cpf;
    }
    function getRg() {
        return $this->rg;
    }

    function getData_Nascimento() {
        return $this->data_Nascimento;
    }

    function getEndereco() {
       return $this->endereco;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getData_Cadastro() {
        return $this->data_Cadastro;
    }

    function setIdCliente($idCliente) {
         $this->idCliente = $idCliente;
    }

    function setNome($nome) {
         $this->nome =  $nome;
    }

    function setCpf($cpf) {
         $this->cpf =  $cpf;
    }

    function setRg($rg) {
         $this->rg =  $rg;
    }

    function setData_Nascimento($data_Nascimento) {
         $this->data_Nascimento =  $data_Nascimento;
    }

    function setEndereco($endereco) {
         $this->endereco =  $endereco;
    }

    function setTelefone($telefone) {
         $this->telefone =  $telefone;
    }

    function setEmail($email) {
         $this->email =  $email;
    }

    function setData_Cadastro($data_Cadastro) {
         $this->data_Cadastro =  $data_Cadastro;
    }

    function toString() {
    return $this-> nome;
    }

}
