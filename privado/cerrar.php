<?php
    session_start();
    session_destroy();
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/SimplyColors/privado/index.php');
?>
