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
                <div>Categoria : </div> 
                <div>
                <select name="tipoCategoria">
                    <option value="seleccione">Seleccione</option>
                    <option value="seleccione">Hombres</option>
                    <option value="seleccione">Mujeres</option>
                    <option value="seleccione">Bebes    </option>
                    
                </select>
                </div>
                <div>Diseño :</div>
                <div>
                    <select name="tipoDiseño">
                    <option value="seleccione">Seleccione</option>
                    <option value="seleccione">Manga Corta</option>
                    <option value="seleccione">Manga Larga</option>
                    <option value="seleccione">Conjunto  </option>
                    <option value="seleccione">Deporte  </option>
                    <option value="seleccione">Pijamas  </option>
                    </select>
                </div>
                <div>Stock :</div><div> <input type="number" name="stock"></div>
                <div>Precio del Producto : <input type="number" name="precprod"></div>
                <div>Informacion del producto : <input type="text" name="infprod"></div>
                <input type="submit" value="Ingresa Producto">
                
         </div>  
        </div>
         
            </form>
    </body>
    
</html>