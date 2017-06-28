<?php
class Producto {
    var $nprod;
    var $idcat;
    var $iddisenno;
    var $precio;
    var $infproducto;
    var $stock;
    
    function agregarProducto(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
       
        $sql = "";
        $resultado=$db->query($sql);
    }
    function VerificarExistenciaProducto(){
        
    }
    function EliminarProducto(){
        
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

}

