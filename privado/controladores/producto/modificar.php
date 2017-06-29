<?php
    include '../../constantes.php';
    include '../../librerias.php';
 ?>

<?php

$idProducto = $_POST['idProducto'];
$idCategoria = $_POST['idCategoria'];
$idDisenno = $_POST['idDisenno'];
$nombreProducto = $_POST['nombreProducto'];
$cantidadStock = $_POST['cantidadStock'];
$precio = $_POST['precio'];
$informacionProducto = $_POST['informacionProducto'];

$oProd = new Producto();

$oProd ->idProducto=$idProducto;
$oProd ->idCategoria = $idCategoria;
$oProd ->idDisenno = $idDisenno;
$oProd ->nombreProducto = $nombreProducto;
$oProd ->cantidadStock = $cantidadStock;
$oProd ->precio = $precio;
$oProd ->informacionProducto = $informacionProducto;

$oProd->ModificaProducto();