<?php /*
    $conexion =new PDO("sqlsrv:server=DESKTOP-L7G7OCC\SQLEXPRESS;database=DBtelefono", "sa", "daniel06");
    //$consulta = $conexion->prepare("SELECT * FROM usuario");
    //$consulta ->execute();
    //$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($datos);

    if ($conexion) {
        //echo "Conexion Exitosa";
    }
    else {
        echo "Error En La Conexion Con El Servidor. <br> />";
    }*/
?>

<?php
    try {
        $conexion = new PDO("pgsql:host=localhost;dbname=db_unidad", "postgres", "993651");
        //echo "Conexión exitosa";
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
?>

<?php/*
$conexion = pg_connect("host=10.0.0.3 dbname=_cliente user=usuario password=sum3651");
    if (!$conexion) {
        echo "Error de conexión.";
    } else {
        echo "Conexión exitosa";
    }*/
?>