<?php

$dsn = 'mysql: bdname = farmacia,host=127.0.0.1';
$user = "root";
$password = " ";

$bdh=null;
try {
    $bdh=new PDO ($dsn, $user,$password, array(
                 PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    ));
}
catch (PDOException $ex) {
    echo 'Falha na conexão:'. $ex->getMessage();
    
}

?>
