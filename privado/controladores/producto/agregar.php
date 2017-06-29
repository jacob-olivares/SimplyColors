<?php
    include '../../constantes.php';
    include '../../librerias.php';
 ?>

<?php

$idCategoria = $_POST['idCategoria'];
$idDisenno = $_POST['idDisenno'];
$nombreProducto = $_POST['nombreProducto'];
$precio = $_POST['precio'];
$cantidadStock = $_POST['cantidadStock'];
$informacionProducto = $_POST['informacionProducto'];


$oProd = new Producto();

$oProd ->idCategoria = $idCategoria;
$oProd ->idDisenno = $idDisenno;
$oProd ->nombreProducto = $nombreProducto;
$oProd ->cantidadStock = $cantidadStock;
$oProd ->precio = $precio;
$oProd ->informacionProducto = $informacionProducto;





$oUsr->agregarProducto();