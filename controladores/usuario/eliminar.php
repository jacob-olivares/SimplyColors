<?php
    include './librerias.php';
    include './constantes.php';
?>
<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$oUsr = new Usuario();

$oUsr->user = $user;
$oUsr->pass = $pass;


if(!$oUsr->verificarClaveAdmin()){
    echo "La clave de administrador es incorrecta";
}

$oUsr->eliminarUsuario();




