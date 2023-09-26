<?php
    //criando as variáveis de conexão
    $host = "localhost";
    $dbname = "dropping";
    $username = "root";
    $password = "2006";


    //Criar a conexão
    $conn = new mysqli($host, $username, $password, $dbname); //Nesta ordem

    //Verificando se ocorreu algum erro na conexão
    if($conn->connect_errno){
        echo "Falha de Conexão: (".$conn->connect_errno.")";
    }else{
        //echo "Conectado com Sucesso";
    }

?>