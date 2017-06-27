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
            <div>Id Producto : <input type="number" name="idprod"></div>
            <input type="submit" value="Eliminar Producto">
        </form>
        </div>
        </div>
    </body>
</html>