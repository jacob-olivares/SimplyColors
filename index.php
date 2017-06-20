<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        
        <?php if(isset($_SESSION['USR'])) { ?>
            <a href="./model/agregarUsuario.php">Agregar Usuario</a>
            <a href="./model/modificarUsuario.php">Modificar Usuario</a>
            <a href="./model/eliminarUsuario.php">Eliminar Usuario</a>
            <a href="cerrar.php">Cerrar Sesion</a>
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
