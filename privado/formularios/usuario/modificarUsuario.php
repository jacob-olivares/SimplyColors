
<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['USR'])) {
    
  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link href="../../css/estilos.css?v=<?= time(); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <div id="Cabecera"> 
            <img src="../../../publico/img/logo_simply_colors.png" alt=""/>
        </div>
        <div align="right"><button><a id="cancelar" href="../../index.php">Cancelar</a></button></div>    
        <div id="Cuerpo">
            <h1>Modificar Usuario!</h1>
         <div id="modificarUsu">
         <form action="../../controladores/usuario/modificar.php" method="POST">
            <div>User: </div><input type="text" name="user">
            <div>Password:</div> <input type="password" name="pass">
            <div>New Password:</div> <input type="password" name="newpass">
            <div>Nombre: </div><input type="text" name="nombre">
            <div>Apellido: </div><input type="text" name="apellido">
            <input type="submit" value="Modify">
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
