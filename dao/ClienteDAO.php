<?php
class ClienteDAO {
    function salvar($obj){ 
        require $_SERVER['DOCUMENT_ROOT']."/farmacia/bd/acesso.php";
        try {
            $sql="insert into Cliente(idCliente, nome, cpf, rg, data_Nascimento, endereco,telefone,email,data_Cadastro) values
                (:idCliente,:nome,:cpf,:rg,:data_Nascimento,:endereco,:telefone,:email,:data_cadastro)";
            
            $p_sql=$bdh->prepare($sql);
            $P_sql->bindvalue(":idCliente",$obj->getNome());
            $P_sql->bindvalue(":nome",$obj->getNome());
            $P_sql->bindvalue(":cpf",$obj->getCpf());
            $P_sql->bindvalue(":rg",$obj->getRg());
            $P_sql->bindvalue(":data_Nascimento",$obj->getData_Nascimento());
            $P_sql->bindvalue(":endereco",$obj->getEndereco());
            $P_sql->bindvalue(":telefone",$obj->getTelefone());
            $P_sql->bindvalue(":email",$obj->getEmail());
            $P_sql->bindvalue(":data_Cadastro",$obj->getData_Cadastro());            
            $p_sql->execute();            
            return $bdh->lastinsertId();                
            
        } 
        catch (Exception $ex) {
            echo "Erro: Não Inserido" .
                   $ex ->getMessage();
        }
          
    }
    function remover(){        
    }
    function listar(){        
    }
    function atulaizar(){        
    }
    function getpoid(){        
    }
    function listartudo(){ 
        
         require $_SERVER('DOCUMENT_ROOT')."/farmacia/bancodedados/conexao.php";
        try {
            $sql="insert into Cliente(idCliente, nome, cpf, rg, data_Nascimento, endereco,telefone,email,data_Cadastro) values
                (:idCliente,:nome,:cpf,:rg,:data_Nascimento,:endereco,:telefone,:email,:data_cadastro)";
            
            $p_sql=$bancodedadosh->prepare($sql);
            $P_sql->bindvalue(":idCliente",$obj->getNome());
            $P_sql->bindvalue(":nome",$obj->getNome());
            $P_sql->bindvalue(":cpf",$obj->getCpf());
            $P_sql->bindvalue(":rg",$obj->getRg());
            $P_sql->bindvalue(":data_Nascimento",$obj->getData_Nascimento());
            $P_sql->bindvalue(":endereco",$obj->getEndereco());
            $P_sql->bindvalue(":telefone",$obj->getTelefone());
            $P_sql->bindvalue(":email",$obj->getEmail());
            $P_sql->bindvalue(":data_Cadastro",$obj->getData_Cadastro());            
            $p_sql->execute();            
            return $bancodedadosh->lastinsertId();                
            
        } 
        catch (Exception $ex) {
            echo "Erro: Não Inserido" .
                    $ex ->getMessage();

        }
            
    
    
    }
}
