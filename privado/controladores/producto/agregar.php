<?php
    include '../../constantes.php';
    include '../../librerias.php';
 ?>

<?php
$nprod = $_POST['nameprod'];
$idcat = $_POST['idcat'];
$iddisenno = $_POST['iddis'];
$precio = $_POST['precprod'];
$infproducto = $_POST['infprod'];
$stock = $_POST['stock'];

$oUsr = new Producto();

$oUsr ->nprod = $nprod;
$oUsr ->idcat = $idcat;
$oUsr ->iddisenno = $iddisenno;
$oUsr ->precio = $precio;
$oUsr ->infproducto = $infproducto;




$oUsr->agregarProducto();