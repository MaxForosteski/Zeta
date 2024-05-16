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
        $this->CONN = new mysqli($this->HOST,$this->USERNAME,$this->DATABASE,$this->PASSWORD);
    }
    function getStatus(){
        if($this->CONN->connect_errno){
            $response = new ConnectionTestResponse(false,$this->CONN->connect_error);
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