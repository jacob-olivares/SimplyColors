<?php
    include './constantes.php';
    include './librerias.php';
?>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$confirmpass = $_POST['confirm-pass'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$oUsr = new Usuario();

$oUsr ->user = $user;
$oUsr ->pass = $pass;
$oUsr ->confirmpass = $confirmpass;
$oUsr ->nombre = $nombre;
$oUsr ->apellido = $apellido;

if($pass!=$confirmpass){
    echo 'Las contraseñas no coinciden';
    return;
}
if(!$nombre!="" && $apellido!=""){
    echo "El nombre y apellido no pueden estar vacios";
}

$oUsr->agregarUsuario();

