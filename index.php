<!DOCTYPE html>

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        O documento root é:
        <?php
        require $_SERVER['DOCUMENT_ROOT']."/farmacia/vo/Cliente.php";
        require $_SERVER['DOCUMENT_ROOT']."/farmacia/dao/ClienteDAO.php";
        $cliente = new Cliente();
        $cliente->setNome('João');
        $cliente->setCpf('1234455555');
        $cliente->setEmail('joao@gmail.com');
        $dao = new ClienteDAO();
        $dao->salvar($cliente);
       
        ?>
    </body>
</html>
