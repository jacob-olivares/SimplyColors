<?php
    include '../../constantes.php';
    include '../../librerias.php';
?>
<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$oUsr = new Usuario();

$oUsr->user = $user;
$oUsr->pass = $pass;


if(!$oUsr->verificarClave()){
    echo "La clave de administrador es incorrecta";
}

$oUsr->eliminarUsuario();




