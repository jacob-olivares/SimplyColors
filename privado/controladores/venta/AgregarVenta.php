<?php
include("../../constantes.php");
include("../../librerias.php");
?>
<?php

$idProducto = $_POST['idProducto'];
$dniCliente = $_POST['dniCliente'];
$total = $_POST['total'];

//Datos del Cliente de la venta
$oCliente = new Cliente();
$oCliente->dni=$dniCliente;
//Trae los datos del cliente desde bdd
$oClienteDB = $oCliente->TraertCliente();

//Trae los Datos de Facturacion del Cliente
$oFacturacion = new Facturacion();
$oFacturacion->dniCliente = $oClienteDB->dni;
$oFacturacionDB = $oFacturacion->TraerFactura3();

/*
//Traer los Datos del Producto
$oProducto = new Producto();
$oProducto->idProducto=$idProducto;
$oProductoDB = $oProducto->TraertProducto();
*/

//Datos de la Venta 
$oVenta = new Venta();

$oVenta->idProducto = $idProducto;
$oVenta->idCliente = $oClienteDB->idCliente;
$oVenta->dniCliente = $oClienteDB->dni;
$oVenta->emailCliente = $oClienteDB->email;
$oVenta->total = $total;
$oVenta->idFacturacion = $oFacturacionDB->idFacturacion;


if($oVenta->AgregarVenta())
{
    /*
    $oConfirmacion = new ConfirmacionVenta();
    $oConfirmacion->entregado=false;
     * 
     */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Simply Colors</title>
    </head>
    <body>
        
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>  
        <div id="Cuerpo">
                <h4>Mantenedor Venta - Agregar</h4>
                Venta Agregada!
                <a href="../../index.php">Volver a Home</a>
           <?php
           /*
            * Para Enviar Mails por la carpeta phpMailer mediante Mercury
                require '../../phpMailer/class.phpmailer.php';

                $mail = new PHPMailer;
                $mail->Host="localhost";
                $mail->From = "diegodiazj124@gmail.com";
                $mail->FromName = "Administrador";
                $mail->Subject = "Venta Agregada";
                $mail->addAddress("diegodiazj124@gmail.com","Diego");
                $mail->msgHTML("Se ha agregado un valor de venta de simplyColors");
                if($mail->send())
                {
                    echo "Se ha enviado un email al administrador";
                }
                else
                {
                    echo "Ocurrio un error al envíar el email";
                }
            * 
            */
           ?>
            
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
        <link href="../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Simply Colors</title>
    </head>
    <body>
        
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>  
        <div id="Cuerpo">
                <h4>Mantenedor Venta - Agregar</h4>
                Venta no Agregada!
                <a href="../../formularios/venta/AgregarVenta.php">Intenta de nuevo!</a><br>
                <a href="../../index.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>
<?php
}

