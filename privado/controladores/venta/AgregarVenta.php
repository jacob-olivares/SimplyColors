<?php
include("../../constantes.php");
include("../../librerias.php");
?>
<?php

$idProducto = $_POST['idProducto'];
$dniCliente = $_POST['dniCliente'];
$idFacturacion = $_POST['idFacturacion'];
$total = $_POST['total'];

//Datos del Cliente de la venta
$oCliente = new Cliente();
$oCliente->dni=$dniCliente;
//Trae los datos del cliente desde bdd
$oClienteDB = $oCliente->TraertCliente();


//Datos de la Facturacion



//Datos de la Venta 
$oVenta = new Venta();

$oVenta->idProducto = $idProducto;
$oVenta->idCliente = $oClienteDB->idCliente;
$oVenta->dniCliente = $oClienteDB->dni;
$oVenta->emailCliente = $oClienteDB->email;
$oVenta->total = $total;




if($oVenta->AgregarVenta())
{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../CSS/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Simply Colors</title>
    </head>
    <body>
        
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>  
        <div id="Cuerpo">
                <h4>Mantenedor Usuario - Agregar</h4>
                Usuario Agregado!
                <a href="../../index.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>

<?php
}
else
{
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../CSS/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Simply Colors</title>
    </head>
    <body>
        
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>  
        <div id="Cuerpo">
                <h4>Mantenedor Usuario - Agregar</h4>
                Usuario no Agregado!
                <a href="../../formularios/venta/AgregarVenta.php">Intenta de nuevo!</a><br>
                <a href="../../index.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>
<?php
}

