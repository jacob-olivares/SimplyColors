<?php
    include './constantes.php';
    include './librerias.php';
?>
<?php
$oUsr = new Usuario();
$oUsr->user=$_POST['user'];
$oUsr->pass=$_POST['pass'];

if( $oUsr->VerificarUsuarioClave()){
    $_SESSION['USR']=$oUsr;
header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/SimplyColors/privado/index.php');
}
else
{
header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/SimplyColors/privado/index.php');
}



