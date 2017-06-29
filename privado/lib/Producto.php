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
       
        $sql = "INSERT INTO producto(idCategoria,idDisenno,nombreProducto,stock,precio,cantidadStock,informacionProducto)VALUES($this->idCategoria,"
                . " $this->idDisenno,$this->nombreProducto,$this->cantidadStock,$this->precio,$this->informacionProducto)";
        $resultado=$db->query($sql);
        
           if ($resultado)
            return true;
        else
            return false;  
    }
    function VerificarExistenciaProducto(){
        
    }
    function EliminarProducto(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM producto WHERE idProducto='$this->idProducto'";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;      
    }
    function ModificaProducto(){
        
    }
    
    function llenarCombobox(){
                
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $sql = "SELECT * from categoria";
        $result = $db->query($sql); //usamos la conexion para dar un resultado a la variable

        if ($result->num_rows > 0) { //si la variable tiene al menos 1 fila entonces seguimos con el codigo
            $combobit = "";
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $combobit .=" <option value='" . $row['idCategoria'] . "'>" . $row['tipoCategoria'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
            }
        } else {
            echo "No hubo resultados";
        }
    }
    
 
    function TraerProducto()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idProducto,$tipoCategoria,idDisenno,nombreProducto,cantidadStock,precio,informacionProducto FROM producto WHERE idProducto=$this->idProducto;";
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

