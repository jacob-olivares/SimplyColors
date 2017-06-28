<?php
include("../../constantes.php");
include("../../librerias.php");
?>
<?php

$idVenta = $_POST['idVenta'];

//Datos de la Venta 
$oVenta = new Venta();

$oVenta->idVenta = $idVenta;

if($oVenta->EliminarVenta())
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
                <h4>Mantenedor Venta - Eliminar</h4>
                Venta Eliminada!
                <a href="../../index.php">Volver a Home</a>
           <?php
           /*
            * Para Enviar Mails por la carpeta phpMailer mediante Mercury
                require '../../phpMailer/class.phpmailer.php';

                $mail = new PHPMailer;
                $mail->Host="localhost";
                $mail->From = "diegodiazj124@gmail.com";
                $mail->FromName = "Administrador";
                $mail->Subject = "Eliminacion de Venta";
                $mail->addAddress("diegodiazj124@gmail.com","Diego");
                $mail->msgHTML("Se ha modificado un valor de venta de simplyColors");
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
        <link href="../../CSS/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Simply Colors</title>
    </head>
    <body>
        
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>  
        <div id="Cuerpo">
                <h4>Mantenedor Ventas - Eliminar</h4>
                Venta no Eliminada!
                <a href="../../formularios/venta/AgregarVenta.php">Intenta de nuevo!</a><br>
                <a href="../../index.php">Volver a Home</a>
           
            
        </div> 
                
            
        </form>
    </body>
</html>
<?php
}

