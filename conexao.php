<?php
    //criando as variáveis de conexão
    $host = "localhost";
    $dbname = "dropping";
    $username = "root";
    $password = "";


    //Criar a conexão
    $DRB_conn = new mysqli($host, $username, $password, $dbname); //Nesta ordem

    //Verificando se ocorreu algum erro na conexão
    if($DRB_conn->connect_errno){
        echo "Falha de Conexão: (".$DRB_conn->DRB_connect_errno.")";
    }else{
        //echo "Conectado com Sucesso";
    }

?>