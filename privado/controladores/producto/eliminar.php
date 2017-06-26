<?php

    include '../../constantes.php';
    include '../../librerias.php';
 ?>
<?php

$idproducto = $_POST['idprod'];

 $oUsr = new Producto();
 
$oUsr ->idproducto = $idproducto;
        
$oUsr -> EliminarProducto();