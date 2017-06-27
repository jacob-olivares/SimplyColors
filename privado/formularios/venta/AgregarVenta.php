<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    //QUERY Producto
    $sqlProducto="select idProducto, nombreProducto from producto";
    $miqueryProducto=mysqli_query($con,$sqlProducto);
    
    //QUERY Cliente
    $sqlCliente="Select dni from cliente";
    $miqueryCliente=mysqli_query($con,$sqlCliente);
?>
<?php if(isset($_SESSION['USR'])) { ?>
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
        <div id="Cuerpo">
                <h4>Mantenedor Venta - Agregar</h4>
                <div id="AgregarVenta">
                    <form action="../../controladores/venta/AgregarVenta.php" method="POST">
                        <div><label>ID Producto</label>
                            <select name="idProducto">
                                <?php 
                                    while($idProductolst = mysqli_fetch_array($miqueryProducto)) { 
                                    ?> 
                                    <option value =  <?php echo $idProductolst['idProducto'];?> >
                                    <?php echo $idProductolst['nombreProducto']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        </div>
                        <div><label>DNI Cliente </label>
                                <select name="dniCliente">
                                        <?php 
                                            while($idClientelst = mysqli_fetch_array($miqueryCliente)) { 
                                            ?> 
                                            <option value =  <?php echo $idClientelst['dni'];?> >
                                            <?php echo $idClientelst['dni']; ?>

                                            </option> 
                                            <?php 
                                            }
                                            ?> 
                                </select>
                        </div>
                        <div><label>Total</label><input type="text" name="total"></div>
                        <input type="submit" value="Agregar">
                    </form>
                </div>
            
        </div> 
        </form>
        
        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USR'])) {
            header('Location:'.$_SERVER["DOCUMENT_ROOT"].'/SimplyColors/index.php');
         }?>