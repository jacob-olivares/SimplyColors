<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['USR'])) {
    //QUERY Categoria
    $sql="select idProducto, nombreProducto from producto";
    $query=mysqli_query($con,$sql);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link href="../../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <div id="Cabecera">
             
            
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>
        <div align="right"><button><a id="cancelar" href="../../index.php">Cancelar</a></button></div>    
        <div id="Cuerpo">
            <h1>Eliminar Producto!</h1>
            <div id="eliminarProd">
        <form action="../../../privado/controladores/producto/eliminar.php" method="post">
            <select name="idProducto">
                    <?php
                    while ($idProductolst = mysqli_fetch_array($query)) {
                        ?> 
                        <option value =  <?php echo $idProductolst['idProducto']; ?> >
                            <?php echo $idProductolst['nombreProducto']; ?>

                        </option> 
                        <?php
                    }
                    ?> 
                </select>
            <input type="submit" value="Eliminar Producto">
        </form>
        </div>
        </div>
      
    </body>
</html>

<?php } ?>
<?php
if (!isset($_SESSION['USR'])) {
    header('Location:http://localhost:' . $_SERVER['SERVER_PORT'] . '/SimplyColors/privado/index.php');
}?>