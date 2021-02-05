<?php
class Produto {
    private $idProduto;
    private $nome;
    private $descricao;
    private $quantidade;
    private $valorCompra;
    private $valorVenda;
    private $data_Compra;
    
    function getIdProduto() {
        return $this->idProduto;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getValorCompra() {
        return $this->valorCompra;
    }

    function getValorVenda() {
        return $this->valorVenda;
    }

    function getData_Compra() {
        return $this->data_Compra;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setValorCompra($valorCompra) {
        $this->valorCompra = $valorCompra;
    }

    function setValorVenda($valorVenda) {
        $this->valorVenda = $valorVenda;
    }

    function setData_Compra($data_Compra) {
        $this->data_Compra = $data_Compra;
    }
    
    function toString (){
        return $this->nome;
    }
    
}  