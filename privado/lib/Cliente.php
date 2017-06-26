<?php

class Cliente{
    var $idCliente;
    var $dni;
    var $email;
    var $nombreCliente;
    var $apellidoCliente;
    var $pdwCliente;
    
    function __construct($idCliente=0,$dni="",$email="",$nombreCliente="",$apellidoCliente="",$pdwCliente=""){
            $this->idCliente=$idCliente;
            $this->dni=$dni;
            $this->email=$email;
            $this->nombreCliente=$nombreCliente;
            $this->apellidoCliente=$apellidoCliente;
            $this->pdwCliente=$pdwCliente;
    } 
    
    function TraertCliente()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "select idCliente, dni, email, nombreCliente, apellidoCliente, pdwCliente from cliente where dni='$this->dni';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oCliente = new Cliente($fila["idCliente"],
                                        $fila["dni"],
                                        $fila["email"],
                                        $fila["nombreCliente"],
                                        $fila["apellidoCliente"],
                                        $fila["PdwCliente"]);
         }
         return $oCliente;
    }
}