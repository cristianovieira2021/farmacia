<?php
class HistoricoDePagamento {
    private $idHistorico;
    private $cliente_idCliente;
    private $funcionario_idFuncionario;
    private $nome_Cliente;
    private $valorTotal;
    private $data_Venda;
    
    function getIdHistorico() {
        return $this->idHistorico;
    }

    function getCliente_idCliente() {
        return $this->cliente_idCliente;
    }

    function getFuncionario_idFuncionario() {
        return $this->funcionario_idFuncionario;
    }

    function getNome_Cliente() {
        return $this->nome_Cliente;
    }

    function getValorTotal() {
        return $this->valorTotal;
    }

    function getData_Venda() {
        return $this->data_Venda;
    }

    function setIdHistorico($idHistorico) {
        $this->idHistorico = $idHistorico;
    }

    function setCliente_idCliente($cliente_idCliente) {
        $this->cliente_idCliente = $cliente_idCliente;
    }

    function setFuncionario_idFuncionario($funcionario_idFuncionario) {
        $this->funcionario_idFuncionario = $funcionario_idFuncionario;
    }

    function setNome_Cliente($nome_Cliente) {
        $this->nome_Cliente = $nome_Cliente;
    }

    function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;
    }

    function setData_Venda($data_Venda) {
        $this->data_Venda = $data_Venda;
    }
    
    function toString(){
        return $this->nome_Cliente;
    }


}
