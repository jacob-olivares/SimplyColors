<?php
    include '../lib/Usuario.php';
    include '../lib/Conexion.php';
?>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$confirmpass = $_POST['confirm-pass'];

$oUsr = new Usuario();

$oUsr ->user = $user;
$oUsr ->pass = $pass;
$oUsr ->confirmpass = $confirmpass;

if($pass!=$confirmpass){
    echo 'Las contraseñas no coinciden';
    return;
}

$oUsr->agregarUsuario();

