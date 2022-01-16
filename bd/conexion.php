<?php
//conexion base de datos
    class conexion{
        public static function conectar(){
            define('servidor','localhost');//hosting o servidor
            define('nombre_bd','appcell2');//base de datos
            define('usuario','root');//nombre del usuario
            define('password','');//contraseña de la base de datos

            //reconecta la base de datos
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

            try{
                $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);
                return "$conexion";

            }catch (Exception $e){//si hay error nos este mensaje
                die("el error de conexion es: ".$e->getMessage());
            }
        }
    }
?>