<?php

class ConfirmacionVenta{
    var $idConfirmacion;
    var $idVenta;
    var $entregado;
    
    function __construct($idConfirmacion=0,$idVenta=0,$entregado=FALSE){            
            $this->idConfirmacion=$idConfirmacion;
            $this->idVenta=$idVenta;
            $this->entregado=$entregado;
            
    }    
    
    function AgregarConfirmacion(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO confirmacion_venta(entregado,idVenta) VALUES ($this->entregado,$this->idVenta);";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarConfirmacion(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $clavemd5=md5($this->pwdUsuario);        
        $sql="UPDATE confirmacion_venta SET entregado=$this->entregado,idVenta=$this->idVenta WHERE idConfirmacion=$this->idConfirmacion;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarConfirmacion(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM confirmacion_venta WHERE idConfirmacion='$this->idConfirmacion'";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
}
