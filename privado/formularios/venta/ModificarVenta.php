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
                <h4>Mantenedor Venta - Modificar</h4>
           
            <form action="../../controladores/venta/ModificarVenta.php" method="POST">
                <div><label>NickName Usuario</label><input type="text" name="nickName"></div>
                <div><label>Contraseña</label><input type="password" name="pass"></div>
                <div><label>Nombre </label><input type="text" name="nombreUsuario"></div>
                <div><label>Apellido</label><input type="text" name="apUsuario"></div>
                <input type="submit" value="Agregar">
            </form>
        </div> 
                
            
        </form>
    </body>
</html>

