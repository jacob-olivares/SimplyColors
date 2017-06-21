<?php
    include './librerias.php';
    include './constantes.php';
?>
<?php
$oUsr = new Usuario();
$oUsr->user=$_POST['user'];
$oUsr->pass=$_POST['pass'];

if( $oUsr->VerificarUsuarioClave()){
    $_SESSION['USR']=$oUsr;
}

header('Location:http://localhost:8081/SimplyColors/');

