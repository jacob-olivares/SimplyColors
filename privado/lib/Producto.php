<?php

class Producto{
    var $idProducto;
    var $idCategoria;
    var $idDisenno;
    var $nombreProducto;
    var $cantidadStock;
    var $precio;
    var $informacionProducto;
    
    function __construct($idProducto=0,$idCategoria=0,$idDisenno=0,$nombreProducto="",$cantidadStock=0,$precio=0,$informacionProducto=""){
            $this->idProducto=$idProducto;
            $this->idCategoria=$idCategoria;
            $this->idDisenno=$idDisenno;
            $this->nombreProducto=$nombreProducto;
            $this->cantidadStock=$cantidadStock;
            $this->precio=$precio;
            $this->informacionProducto=$informacionProducto;
    }   
     function agregarProducto(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
       
        $sql = "INSERT INTO producto(idCategoria,idDisenno,nombreProducto,cantidadStock,precio,informacionProducto)VALUES($this->idCategoria,"
                . " $this->idDisenno,'$this->nombreProducto',$this->cantidadStock,$this->precio,'$this->informacionProducto');";
        $resultado=$db->query($sql);
    }
    function VerificarExistenciaProducto(){
        
    }
    function EliminarProducto(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $sql="DELETE FROM producto WHERE idProducto=$this->idProducto";
        $resultado=$db->query($sql);

    }
    function ModificaProducto(){
        
    }
    function TraerProducto()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idProducto,idCategoria,idDisenno,nombreProducto,cantidadStock,precio,informacionProducto FROM producto WHERE idProducto=$this->idProducto;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oProducto = new Producto($fila["idProducto"],
                                        $fila["idCategoria"],
                                        $fila["idDisenno"],
                                        $fila["nombreProducto"],
                                        $fila["cantidadStock"],
                                        $fila["precio"],
                                        $fila["informacionProducto"]);
         }
         return $oProducto;
    }
    
}

