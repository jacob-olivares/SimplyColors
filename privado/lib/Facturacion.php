<?php

class Facturacion{
    var $idFacturacion;
    var $idCliente;
    var $dniCliente;
    var $emailCliente;
    var $idMedioPago;
    var $codigoPostal;
    var $pais;
    var $ciudad;
    var $calle;
    var $numeroTarjeta;
    
    
    function __construct($idFacturacion=0,$idCliente=0,$dniCliente="",$emailCliente="",$idMedioPago=0,$codigoPostal=0,$pais="",$ciudad="",$calle="",$numeroTarjeta=0){            
            $this->idFacturacion=$idFacturacion;
            $this->idCliente=$idCliente;
            $this->dniCliente=$dniCliente;
            $this->emailCliente=$emailCliente;
            $this->idMedioPago=$idMedioPago;
            $this->codigoPostal=$codigoPostal;
            $this->pais=$pais;
            $this->ciudad=$ciudad;
            $this->calle=$calle;
            $this->numeroTarjeta=$numeroTarjeta;
    }    
    
    function TraerFactura3()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idFacturacion,idCliente,dniCliente,emailCliente,idMetodoPago,codigoPostal,pais,ciudad,calle,numeroTarjeta"
                . " FROM facturacion WHERE dniCliente='$this->dniCliente';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oFacturacion = new Facturacion($fila["idFacturacion"],
                                        $fila["idCliente"],
                                        $fila["dniCliente"],
                                        $fila["emailCliente"],
                                        $fila["idMetodoPago"],
                                        $fila["codigoPostal"],
                                        $fila["pais"],
                                        $fila["ciudad"],
                                        $fila["calle"],
                                        $fila["numeroTarjeta"]);
         }
         return $oFacturacion;
    }
    
    
}

