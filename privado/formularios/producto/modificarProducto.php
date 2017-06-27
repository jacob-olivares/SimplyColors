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
        <div id="ModificarProd1">
        <form action="../../../privado/controladores/producto/agregar.php" method="post">
            <h1>Producto a Modificarse</h1>
            <div id="labelprod">Nombre Producto :</div><div><input type="text" name="nameprod" ></div>
            <div id="labelprod">Id Usuario : </div><div><input type="number" name="idUsu"></div>
            <div id="labelprod">Nombre Categoria :</div><div> <input type="number" name="idcat"></div>      
            <div id="labelprod">Nombre Usuario : </div><div><input type="text" name="nameUsu"></div>  
            <div id="labelprod">Id Diseño : </div><div><input type="number" name="iddis"></div>
            <div id="labelprod">Precio del Producto : </div><div><input type="number" name="precprod"></div>
            <div id="labelprod">Informacion del producto </div><div> <input type="text" name="infprod"></div>
        </div>
        <div id="ModificarProd2">
            <h1>Nuevos Datos de Producto. </h1>
            
            <div id="labelprod2" >Nombre Producto :</div><div></div><div><input type="text" name="nameprod" ></div>
            <div id="labelprod2">Id Usuario : </div><div><input type="number" name="idUsu"></div>
            <div id="labelprod2">Nombre Categoria : </div><div><input type="number" name="idcat"></div>      
            <div id="labelprod2">Nombre Usuario : </div><div><input type="text" name="nameUsu"></div>  
            <div id="labelprod2">Id Diseño : </div><div><input type="number" name="iddis"></div>
            <div id="labelprod2">Precio del Producto : </div><div><input type="number" name="precprod"></div>
            <div id="labelprod2">Informacion del producto : </div><div><input type="text" name="infprod"></div>
            <input type="submit" value="Modifica Producto">
        </form>
        </div>
    </body>
</html>