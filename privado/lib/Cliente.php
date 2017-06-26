<?php

class Cliente{
    var $idCliente;
    var $dni;
    var $email;
    var $nombreCliente;
    var $apellidoCliente;
    var $pwdCliente;
    
    function __construct($idCliente=0,$dni="",$email="",$nombreCliente="",$apellidoCliente="",$pwdCliente=""){
            $this->idCliente=$idCliente;
            $this->dni=$dni;
            $this->email=$email;
            $this->nombreCliente=$nombreCliente;
            $this->apellidoCliente=$apellidoCliente;
            $this->pwdCliente=$pwdCliente;
    }    
    /*
    function AgregarCliente(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $clavemd5=md5($this->pwdUsuario);
        $sql="INSERT INTO usuario(nomUsuario, pdwUsuario, nombre, apellido) VALUES ('$this->nomUsuario', '$clavemd5', '$this->nombre','$this->apellido');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $clavemd5=md5($this->pwdUsuario);        
        $sql="UPDATE usuario SET nomUsuario='$this->nomUsuario',pdwUsuario='$clavemd5',nombre='$this->nombre',apellido='$this->apellido' WHERE idusuario=$this->idAcceso;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM usuario WHERE idUsuario='$this->idAcceso'";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function VerificaUsuarioClave(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $clavemd5=md5($this->pwdUsuario);
        $sql="SELECT * FROM usuario WHERE nomusuario='$this->nomUsuario' and pdwusuario='$clavemd5'";
              
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;        
    }
    */
    function TraertCliente()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "select IDUSUARIO, NOMUSUARIO, PDWUSUARIO, NOMBRE, APELLIDO from usuario where nomusuario='$this->dni';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oUsuario1 = new Usuario($fila["IDUSUARIO"],
                                        $fila["NOMBRE"],
                                        $fila["APELLIDO"],
                                        $fila["NOMUSUARIO"],
                                        $fila["PDWUSUARIO"]);
         }
         return $oUsuario1;
    }
    
}