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
        
        <div id="Cabecera">
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>
        <div align="right"><button><a href="../paginaAdministrador/Login.php">Cancelar</a></button></div>    
        <div id="Cuerpo">
                <h4>Mantenedor Ventas - Eliminar</h4>
           
                <form action="../../controladores/venta/EliminarVenta.php" method="POST">
                <div id="eliminarVenta">
                    <div id="linea"><label>ID VENTA</label><input type="number" name="idVenta"></div>
                    <div id="boton"><input type="submit" value="Eliminar"></div>
                </div>
                    
                
            </form>
        </div> 
                
            
        </form>
    </body>
</html>

