<?php

class Venta{
    var $idVenta;
    var $idProducto;
    var $idCliente;
    var $dniCliente;
    var $emailCliente;
    var $idFacturacion;
    var $total;
    
    function __construct($idVenta=0,$idProducto=0,$idCliente=0,$dniCliente="",$emailCliente="",$idFacturacion=0,$total=0){
            $this->idVenta=$idVenta;
            $this->idProducto=$idProducto;
            $this->idCliente=$idCliente;
            $this->dniCliente=$dniCliente;
            $this->emailCliente=$emailCliente;
            $this->idFacturacion=$idFacturacion;
            $this->total=$total;
    }    
    
    function AgregarVenta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO venta(idProducto,idCliente,dniCliente,emailCliente,idFacturacion,total) VALUES ($this->idProducto,"
                . " $this->idCliente, '$this->dniCliente','$this->emailCliente',$this->idFacturacion,$this->total);";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarVenta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;     
        $sql="UPDATE venta SET idProducto=$this->idProducto,idCliente=$this->idCliente,dniCliente='$this->dniCliente',"
                . "emailCliente='$this->emailCliente', idFacturacion=$this->idFacturacion, total=$this->total WHERE idVenta=$this->idVenta;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarVenta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM venta WHERE idVenta='$this->idVenta'";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function TraertVenta()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idVenta, idProducto, idCliente, dniCliente, emailCliente, idFacturacion, total FROM venta WHERE idVenta=$this->idVenta;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oVenta = new Venta($fila["idVenta"],
                                        $fila["idProducto"],
                                        $fila["idCliente"],
                                        $fila["dniCliente"],
                                        $fila["emailCliente"],
                                        $fila["idFacturacion"],
                                        $fila["total"]);
         }
         return $oVenta;
    }
    
}
