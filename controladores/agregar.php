<?php
    include '../lib/Usuario.php';
    include '../lib/Conexion.php';
?>
<?php
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$confirmpass = $_REQUEST['confirm-pass'];

$oUsr = new Usuario();

$oUsr ->user = $user;
$oUsr ->pass = $pass;
$oUsr ->confirmpass = $confirmpass;

if($pass!=$confirmpass){
    echo 'Las contraseñas no coinciden';
    return;
}

$oUsr->agregarUsuario();

