<?php
class ConnectionTestResponse{
    public $IsSuccess;
    public $Message;

    function __construct($IsSuccess,$Message){
        $this->IsSuccess = $IsSuccess;
        $this->Message = $Message;
    }

    function getIsSuccess(){
        return $this->IsSuccess;
    }

    function getMessage(){
        return $this->Message;
    }
}
?>