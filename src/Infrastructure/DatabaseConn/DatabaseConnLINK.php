<?php

class DatabaseConnLINK{

    private $HOST;
    private $USERNAME;
    private $PASSWORD;
    private $DATABASE;
    private $CONN;

    function __construct($HOST = "localhost",$USERNAME = "root",$PASSWORD = "",$DATABASE = "faculdade-rh-sys"){
        $this->HOST = $HOST;
        $this->USERNAME = $USERNAME;
        $this->PASSWORD = $PASSWORD;
        $this->DATABASE = $DATABASE;
    }

    function Open(){
        $this->CONN = new mysqli($this->HOST,$this->USERNAME,$this->PASSWORD,$this->DATABASE);
    }
    
    function getStatus(){
        $this->Open();
        if($this->CONN->connect_errno){
            $response = new ConnectionTestResponse(false,"Erro ao tentar se conectar ao banco de dados");
        }else{
            $response = new ConnectionTestResponse(true,"OK");
        }
        return $response;
    }

    function Close(){
        $this->CONN->close();
    }

}


?>