<?php
    include '../../constantes.php';
    include '../../librerias.php';
 ?>

<?php
$nprod = $_POST['nameprod'];
$idusuario = $_POST['idUsu'];
$nomUsu = $_POST['nameUsu'];
$idcat = $_POST['idcat'];
$iddisenno = $_POST['iddis'];
$precio = $_POST['precprod'];
$infproducto = $_POST['infprod'];

$oUsr = new Producto();

$oUsr ->nprod = $nprod;
$oUsr ->idusuario = $idusuario;
$oUsr ->nomUsu = $nomUsu;
$oUsr ->idcat = $idcat;
$oUsr ->iddisenno = $iddisenno;
$oUsr ->precio = $precio;
$oUsr ->infproducto = $infproducto;


$oUsr->agregarProducto();