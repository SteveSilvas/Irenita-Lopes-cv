<?php

class ConexaoBD{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "usbw";
    private $bdName = "mundopet";



public function conectar(){

    $conn = new mysqli ($this -> serverName,$this -> userName, $this ->password, $this ->bdName );
    return $conn;
}
}

?>