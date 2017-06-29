<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['USR'])) {
    //QUERY Categoria
    $sqlCategoria="select idCategoria, tipoProducto from categoria";
    $miqueryCategoria=mysqli_query($con,$sqlCategoria);
    
    //Query Diseño
    $sqlDisenno="select idDisenno, tipoDisenno from disenno";
    $miqueryDisenno=mysqli_query($con,$sqlDisenno);
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
              <h1>Agregar Producto!</h1>    
            <div id="AgregarProd">
              
            <form action="../../../privado/controladores/producto/agregar.php" method="post">     
                <div>Nombre Producto :<input type="text" name="nombreProducto" ></div>        
                <div>Categoria : </div> 
                <div>
                    <select name="idCategoria">
                        <option value="seleccione">Seleccione</option>
                        <?php
                        while ($idCategorialst = mysqli_fetch_array($miqueryCategoria)) {
                            ?> 
                            <option value =<?php echo $idCategorialst['idCategoria']; ?> >
                                <?php echo $idCategorialst['tipoProducto']; ?>

                            </option> 
                            <?php
                        }
                        ?> 
                    </select>
                </div>
                <div>Diseño :</div>
                <div>
                            <select name="idDisenno">
                                <option value="seleccione">Seleccione</option>
                            <?php
                            while ($idDisennolst = mysqli_fetch_array($miqueryDisenno)) {
                                ?> 
                                <option value =<?php echo $idDisennolst['idDisenno']; ?> >
                                    <?php echo $idDisennolst['tipoDisenno']; ?>

                                </option> 
                                <?php
                            }
                            ?> 
                        </select>
                </div>
                <div>Stock :</div><div> <input type="number" name="stock"></div>
                <div>Precio del Producto : <input type="number" name="precio"></div>
                <div>Informacion del producto : <input type="text" name="info"></div>
                <input type="submit" value="Ingresa Producto">
                
         </div>  
        </div>
         
            </form>
    </body>
</html>
    <?php }?>
<?php if(!isset($_SESSION['USR'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/SimplyColors/privado/index.php');
}?>