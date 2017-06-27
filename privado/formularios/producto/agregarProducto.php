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
                <div>Nombre Producto :<input type="text" name="nameprod" ></div>        
                <div>Id Categoria : <input type="number" name="idcat"></div>      
                <div>Id Diseño : <input type="number" name="iddis"></div>
                <div>Precio del Producto : <input type="number" name="precprod"></div>
                <div>Informacion del producto : <input type="text" name="infprod"></div>
                <input type="submit" value="Ingresa Producto">
         </div>
        </div>
            </form>
    </body>
    
</html>