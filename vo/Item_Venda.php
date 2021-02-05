<?php
class Item_venda {
    private $id_ItemVenda;
    private $venda_idVenda;
    private $produto_idProduto;
    private $quantidade;
    private $valor;
    
    function getId_ItemVenda() {
        return $this->id_ItemVenda;
    }

    function getVenda_idVenda() {
        return $this->venda_idVenda;
    }

    function getProduto_idProduto() {
        return $this->produto_idProduto;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getValor() {
        return $this->valor;
    }

    function setId_ItemVenda($id_ItemVenda) {
        $this->id_ItemVenda = $id_ItemVenda;
    }

    function setVenda_idVenda($venda_idVenda) {
        $this->venda_idVenda = $venda_idVenda;
    }

    function setProduto_idProduto($produto_idProduto) {
        $this->produto_idProduto = $produto_idProduto;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }
    
    function toString () {
        return $this->id_ItemVenda();
    }
        

}
