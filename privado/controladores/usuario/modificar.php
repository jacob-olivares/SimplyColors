<?php
    include '../../constantes.php';
    include '../../librerias.php';
?>
<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
$newPass = $_POST['newpass'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$oUsr = new Usuario();
$oUsr->user = $user;
$oUsr->pass = $pass;
$oUsr->newPass = $newPass;
$oUsr->nombre = $nombre;
$oUsr->apellido = $apellido;

if(!$oUsr->VerificarClave()){
    echo 'CLAVE ANTIGUA NO CORRESPONDE';
}else{
    echo 'USUARIO MODIFICADO CORRECTAMENTE<br>';
    echo '<a href="../../index.php">Inicio</a>';
}


$oUsr->modificarUsuario();
