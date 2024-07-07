<?php   
    define("KEY_TOKEN", "APR.evt-354*"); 
    define("MONEDA", "US$"); 
    define("DESCUENTO", " Descuento "); 
    define("Descripcion", " Pantalla: "); 

    $numero_cart = 0;
    if (isset($_SESSION['carrito']['almacen'])) {
        $numero_cart = count($_SESSION['carrito']['almacen']);
    }

    $NombreUsuario = $_SESSION["usuario_registros"];

    //Obteniendo 
    $consulta = $conexion->prepare("SELECT * FROM t_usuario where f_activo=true  and f_codigo_usuario=?");
    $consulta ->execute([$NombreUsuario]);
    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach ($datos as $cargo) {
        $_SESSION['s_cargo']  = $cargo['f_cargo'];
    } 

    $consulta = $conexion->prepare("SELECT * FROM t_pais ORDER BY id_pais");
    $consulta ->execute();
    $datosPais = $consulta->fetchAll(PDO::FETCH_ASSOC);

    $consulta = $conexion->prepare("SELECT * FROM t_almacen ORDER BY id_almacen");
    $consulta ->execute();
    $datosAlmacen = $consulta->fetchAll(PDO::FETCH_ASSOC);

    
?>