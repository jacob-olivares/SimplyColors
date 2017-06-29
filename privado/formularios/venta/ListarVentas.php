<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['USR'])) {
    //QUERY Ventas
    $sqlVenta="SELECT idVenta, idProducto, idCliente, dniCliente, emailCliente, idFacturacion, total FROM venta ";
    $miqueryVenta=mysqli_query($con,$sqlVenta);
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
        <div align="right"><button><a id="cancelar" href="../../index.php">Cancelar</a></button></div>
            <div id="ListarVentas">
                <h1>Mantenedor Venta - Lista de Ventas</h1>
                <div>
                    <div id="divVista">ID VENTA</div>
                    <div id="divVista">ID PRODUCTO</div>
                    <div id="divVista">ID CLIENTE</div>
                    <div id="divVista">DNI CLIENTE</div>
                    <div id="divVista">EMAIL VENTA</div>
                    <div id="divVista">ID FACTURACION</div>
                    <div id="divVista">TOTAL</div><BR>
                        <?php 
                            while($idVentalst = mysqli_fetch_array($miqueryVenta)) { 
                                echo '<div id="divVista">'.$idVentalst['idVenta'].'</div>'
                                        .'<div id="divVista">'.$idVentalst['idProducto'].'</div>'
                                        .'<div id="divVista">'.$idVentalst['idCliente'].'</div>'
                                        .'<div id="divVista">'.$idVentalst['dniCliente'].'</div>'
                                        .'<div id="divVista">'.$idVentalst['emailCliente'].'</div>'
                                        .'<div id="divVista">'.$idVentalst['idFacturacion'].'</div>'
                                        .'<div id="divVista">'.$idVentalst['total'].'</div><br>'; 
                            }
                        ?>
                </div>
                        
            </div>
        </div>        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USR'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/SimplyColors/privado/index.php');
}?>
