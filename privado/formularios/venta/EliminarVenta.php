<?php
    
    
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['USR'])) {
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
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>
        <div align="right"><button><a id="cancelar" href="../../index.php">Cancelar</a></button></div>     
        <div id="Cuerpo">
                <h1>Mantenedor Ventas - Eliminar</h1>
           
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
    
    </body>
</html>
<?php }?>
<?php if(!isset($_SESSION['USR'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/SimplyColors/privado/index.php');
 }?>
