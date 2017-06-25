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
    header('Location:'.$_SERVER["DOCUMENT_ROOT"].'/SimplyColors/index.php');
}
else
{
    echo 'No entra';
}



