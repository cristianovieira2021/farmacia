<?php
class Venda {
    private $idVenda;
    private $cliente_idCliente;
    private $funcionario_idFuncionario;
    private $data_Venda;
    private $data_Vencimento;
    private $data_pagamento;
    private $hora_Venda;
    
    function getIdVenda() {
        return $this->idVenda;
    }

    function getCliente_idCliente() {
        return $this->cliente_idCliente;
    }

    function getFuncionario_idFuncionario() {
        return $this->funcionario_idFuncionario;
    }

    function getData_Venda() {
        return $this->data_Venda;
    }

    function getData_Vencimento() {
        return $this->data_Vencimento;
    }

    function getData_pagamento() {
        return $this->data_pagamento;
    }

    function getHora_Venda() {
        return $this->hora_Venda;
    }

    function setIdVenda($idVenda) {
        $this->idVenda = $idVenda;
    }

    function setCliente_idCliente($cliente_idCliente) {
        $this->cliente_idCliente = $cliente_idCliente;
    }

    function setFuncionario_idFuncionario($funcionario_idFuncionario) {
        $this->funcionario_idFuncionario = $funcionario_idFuncionario;
    }

    function setData_Venda($data_Venda) {
        $this->data_Venda = $data_Venda;
    }

    function setData_Vencimento($data_Vencimento) {
        $this->data_Vencimento = $data_Vencimento;
    }

    function setData_pagamento($data_pagamento) {
        $this->data_pagamento = $data_pagamento;
    }

    function setHora_Venda($hora_Venda) {
        $this->hora_Venda = $hora_Venda;
    }
    
    function toString (){
        return $this->cliente_idCliente;
    }


}
