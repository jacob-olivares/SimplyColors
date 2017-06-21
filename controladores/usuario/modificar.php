<?php
    include './librerias.php';
    include './constantes.php';
?>
<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
$newPass = $_POST['newpass'];

$oUsr = new Usuario();
$oUsr->user = $user;
$oUsr->pass = $pass;
$oUsr->newPass = $newPass;

if(!$oUsr->VerificarClave()){
    echo 'CLAVE ANTIGUA NO CORRESPONDE';
}else{
    echo 'USUARIO MODIFICADO CORRECTAMENTE<br>';
    echo '<a href="../index.php">Inicio</a>';
}


$oUsr->modificarUsuario();
