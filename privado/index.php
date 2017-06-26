<?php
    include './constantes.php';
    include './librerias.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div id="Cabecera">
            <img src="../publico/img/logo_simply_colors.png" alt=""/>
        </div>
        <?php if(isset($_SESSION['USR'])) { ?>
        <div id="cerrarSesion" align="right"><button><a href="cerrar.php">Cerrar Sesion</a></button></div>
            <h1>Mantenedor de usuarios: </h1>
            
            <div id="mantUsuarios"></div>
            <a href="formularios/usuario/agregarUsuario.php">Agregar Usuario</a>
            <a href="formularios/usuario/modificarUsuario.php">Modificar Usuario</a>
            <a href="formularios/usuario/eliminarUsuario.php">Eliminar Usuario</a>
            </div>

            <h1>Mantenedor de productos: </h1>
            
            <div id="mantProductos">
            <a href="formularios/producto/agregarProducto.php">Agregar Producto</a>
            <a href="formularios/producto/modificarProducto.php">Modificar Producto</a>
            <a href="formularios/producto/eliminarProducto.php">Eliminar Producto</a>
            </div>
            
            <h1>Mantenedor de Ventas: </h1>
            
            <div id="mantProductos">
            <a href="formularios/venta/AgregarVenta.php">Agregar Venta</a>
            <a href="formularios/venta/ModificarVenta.php">Modificar Venta</a>
            <a href="formularios/venta/EliminarVenta.php">Eliminar Venta</a>
            </div>
            
            
        <?php } ?> 
        <?php if(!isset($_SESSION['USR'])) { ?>
        <div id="login">
        <h1>Mantenedor de usuarios: </h1>
        <form action="login.php" method="POST">
            <div>User: <input type="text" name="user"></div>
            <div>Password: <input type="password" name="pass"></div>
        <input type="submit" value="Login">
        </form>
        </div>
        <?php
         } 
        ?>
    </body>
</html>
