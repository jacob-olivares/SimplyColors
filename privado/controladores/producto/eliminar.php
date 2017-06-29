<?php

    include '../../constantes.php';
    include '../../librerias.php';
 ?>
<?php

$idProducto = $_POST['idProducto'];

 $oProd = new Producto();
 
$oProd ->idProducto = $idProducto;
        
$oProd -> EliminarProducto();