<html>
    <head>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="frmusuario" action="../controladores/agregar.php" method="POST">
            <div>User: <input type="text" name="user"></div>
            <div>Password: <input type="password" name="pass"></div>
            <div>Confirm Password: <input type="password" name="confirm-pass"></div>
        <input id="enviar" type="button" onclick="" value="Enviar"> 
        </form>
    </body>
        <script>
    $(document).ready(function(){
            $("#enviar").click(function(){
        
                if ($("#user").val()!="" && $("#pass").val()!=""&& $("#confirm-pass").val()!=""){
                        $.ajax({url:"../controladores/agregar.php"
                            ,type:'post'
                            ,data:{'user':$("#user").val(),
                                'pass':$("#pass").val(),
                                'confirm-pass':$("#confirm-pass").val()
                                }
                            ,success:function(resultado){
                                $("#mensaje").html(resultado);
                            }
                        });
                    }//Cierre IF Valida blancos
                else
                    alert("Debe Agregar el usuario y clave");
            });//Click Boton enviar
     });//Function Ready de la página
     </script>
</html>

