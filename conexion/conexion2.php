<?php
 class Conexion{
    public static function Conectar(){
         
         try{
                $conn= "sqlsrv:server=DESKTOP-L7G7OCC\SQLEXPRESS;database=DBtelefono";
                $usuario="sa";
                $clave="daniel06";
                
                $conexion =new PDO($conn, $usuario,$clave);
                if ($conexion) {
                    echo "Conexion Exitosa";
                }
                else {
                    echo "Error En La Conexion Con El Servidor. <br> />";
                    echo "<h1>Usuario o Contraseña Incorrectas</h1>";
                    //die( print_r(sqlsrv_errors(), true));
                }

                return $conexion;
            //$conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);             
            //return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());
         }         
     }
     
 }
?>