<?php
class Fornecedor {
    private $idFornecedor;
    private $idProduto;
    private $nome;
    private $cnpj;
    private $telefone;
    private $endereco;
    private $cidade;
    private $cep;
    private $uf;
    private $email;
    
    function getIdFornecedor() {
        return $this->idFornecedor;
    }

    function getIdProduto() {
        return $this->idProduto;
    }

    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getUf() {
        return $this->uf;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdFornecedor($idFornecedor) {
        $this->idFornecedor = $idFornecedor;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function toString(){
        return $this->nome();
    }

    
    
}
