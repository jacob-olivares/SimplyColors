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
            <h1>Eliminar Usuario!</h1>
            <div id="eliminarUsu">
         <form action="../../controladores/usuario/eliminar.php" method="POST">
             <div>Usuario a eliminar: <input type="text" name="user"></div>
             <div>Admin Password:</div><div><input type="password" name="pass"></div> 
        <input type="submit" value="Eliminar">
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
