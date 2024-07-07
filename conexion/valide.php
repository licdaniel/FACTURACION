<?php
    class Model{
        var $id;
        var $user;
        var $password;

        function __construct(){

        }

        function Logear(){
           /* $conexion = "sqlsrv:server=DESKTOP-L7G7OCC\SQLEXPRESS;database=DBtelefono";
            $clave    ="daniel06";
            $usuario  ="sa";

            $establecer_conexion = new PDO($conexion,$usuario,$clave);

            if (!$establecer_conexion) {
                echo "Error En La Conexion Con El Servidor. <br> />";
            }*/
            require_once('conexion.php');

            try {
                session_start();
                //$consulta = $establecer_conexion->prepare("SELECT *from usuario where usuario_nombre=:parametro1 AND usuario_contraseña=:parametro2");
                
                $consulta = $conexion->prepare("SELECT *from t_usuario where f_activo=true and f_id_usuario=:parametro1 AND f_contrasena=:parametro2");
                $consulta->bindValue(":parametro1",$this->user);
                $consulta->bindValue(":parametro2",$this->password);

                $consulta->execute();
                $filaModel=$consulta->fetch(); #me trae la fila que necesito

                if ($filaModel) {
                    //$filaModel = $consulta->fetchAll();
                    $filaModel = $consulta->fetch(PDO::FETCH_ASSOC);
                    $_SESSION["usuario_registros"] = $this->user;

                }elseif (!$filaModel) {
                    $_SESSION["usuario_registros"] = null;
                    $filaModel = null;
                }

                print json_encode($filaModel);
                $conexion=null;

                return $filaModel;

            } catch (PDOException $e) {
                echo "Error:: Conexión no establecida.".$e;
                alert("Error:: Conexión no establecida.".$e);
            }
        }
    }
    
?>