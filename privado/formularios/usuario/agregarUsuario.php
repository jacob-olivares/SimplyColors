
<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['USR'])) {
    
    
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
            <h1>Agregar Usuario!</h1>
            <div id="agregarUsu">
        <form action="../../controladores/usuario/agregar.php" method="POST">
            <div>Usuario:</div><input type="text" name="user">
            <div>Password: </div><input type="password" name="pass">
            <div>Confirma Password: <input type="password" name="confirm-pass"></div>
            <div>Nombre Usuario: <input type="text" name="nombre"></div>
            <div>Apellido Usuario: <input type="text" name="apellido"></div>
        <input type="submit" value="Enviar"> 
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
