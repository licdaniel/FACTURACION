<?php
    try {
        session_start();

       // require('../conexion/conexion.php');
        require('conexion.php');
        //$objeto = new Conexion();
        //$conexion = $objeto->Conectar();

        //recepción de datos enviados mediante POST desde ajax 
        $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
        $password = (isset($_POST['password'])) ? $_POST['password'] : '';

        $pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD


        $consulta = $conexion->prepare("SELECT * FROM t_usuario WHERE f_activo=true and f_id_usuario='$usuario' AND f_contrasena='$password' ");
        //$resultado = $conexion->prepare($consulta);
        $consulta->execute();
        //$data = $consulta->fetchAll();
        //fetch(PDO::FETCH_ASSOC); me traer los datos de postgres
        $data = $consulta->fetch(PDO::FETCH_ASSOC);

        if($data){
            //$data = $consulta->fetchAll();
            $data = $consulta->fetch(PDO::FETCH_ASSOC);
            $_SESSION["usuario_registros"] = $usuario;
        }else if(!$data){
            $_SESSION["usuario_registros"] = null;
            $data=null;
        }

        print json_encode($data);
        $conexion=null;

} catch (PDOException $e) {
    echo "Error".$e;
}


//usuarios de pruebaen la base de datos
//usuario:admin pass:12345
//usuario:demo pass:demo

?>