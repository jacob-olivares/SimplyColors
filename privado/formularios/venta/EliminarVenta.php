<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    //QUERY Venta
    $sqlVenta="Select idVenta, dniCliente from venta";
    $miqueryVenta=mysqli_query($con,$sqlVenta);
    
    
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
                <h4>Mantenedor Ventas - Eliminar</h4>
           
                <form action="../../controladores/venta/EliminarVenta.php" method="POST">
                <div id="eliminarVenta">
                    <div id="linea"><label>ID VENTA</label>
                        <select name="idVenta">
                            <?php 
                                while($idVentalst = mysqli_fetch_array($miqueryVenta)) { 
                                ?> 
                                <option value =  <?php echo $idVentalst['idVenta'];?> >
                                <?php echo "ID Compra: ".$idVentalst['idVenta']." - "."DNI Cliente: ".$idVentalst['dniCliente']; ?>

                                </option> 
                                <?php 
                                }
                                ?> 
                        </select>
                    </div>
                    <div id="boton"><input type="submit" value="Eliminar"></div>
                </div>
                    
                
            </form>
        </div>      
        </form>
        <?php }?>
        <?php if(!isset($_SESSION['USR'])) {
            header('Location:'.$_SERVER["DOCUMENT_ROOT"].'/SimplyColors/index.php');
         }?>
        
    </body>
</html>

