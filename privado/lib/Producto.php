<?php
class Producto {
    var $nprod;
    var $idcat;
    var $iddisenno;
    var $precio;
    var $infproducto;
    
    function agregarProducto(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
       
        $sql = "INSERT INTO producto(idCategoria,idDisenno,"
                . "nombreProducto,precio,informacionProducto)VALUES($this->idcat,
                    $this->iddisenno,$this->nprod,$this->precio,$this->infproducto)";
        $resultado=$db->query($sql);
    }
    function VerificarExistenciaProducto(){
        
    }
    function EliminarProducto(){
        
    }
    function ModificaProducto(){
        
    }
}

