<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Simply Colors</title>
    </head>
    <body>
        <?php if(isset($_SESSION['USR'])) { ?>
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>
        <div align="right"><button><a id="cancelar" href="../../index.php">Cancelar</a></button></div>     
        <div id="Cuerpo">
                <h4>Mantenedor Venta - Modificar</h4>
           
            <div id="ModificarVenta">
                    <form action="../../controladores/venta/ModificarVenta.php" method="POST">
                        <div><label>ID Venta</label><input type="number" name="idVenta"></div>
                        <div><label>ID Producto</label><input type="number" name="idProducto"></div>
                        <div><label>DNI Cliente </label><input type="text" name="dniCliente"></div>
                        <div><label>ID Facturacion</label><input type="text" name="idFacturacion"></div>
                        <div><label>Total</label><input type="text" name="total"></div>
                        <input type="submit" value="Modificar">
                    </form>
                </div>
        </div>   
        </form>
        <?php }?>
        <?php if(!isset($_SESSION['USR'])) {
            header('Location:'.$_SERVER["DOCUMENT_ROOT"].'/SimplyColors/index.php');
         }?>
    </body>
</html>

