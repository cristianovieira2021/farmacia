<?php
class Funcionario {
    private $codigo;
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $telefone;
    private $endereco;
    private $salario;
    private $dataContratacao;
    
    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getSalario() {
        return $this->salario;
    }

    function getDataContratacao() {
        return $this->dataContratacao;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setDataContratacao($dataContratacao) {
        $this->dataContratacao = $dataContratacao;
    }
    
    function toString(){
        return $this-> nome;
    }


    
}


