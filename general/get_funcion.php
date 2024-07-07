<?php   

    //Obteniendo 
    /** 
    *   -------------------------------------------------------------------------------------------------------------CONSULTA EMPRESA
    */
    $consulta = $conexion->prepare("SELECT * FROM t_preferencia");
    $consulta ->execute();
    $datosEmpresa = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach ($datosEmpresa as $empresa) {
        $empresaCodigo  = $empresa['f_codigo'];
        $empresa        = $empresa['f_nombrecia'];
        
    } 
    /** 
    * !  -------------------------------------------------------FIN  
    */

    

    //------------------------------------------------------------------------------------------------CONSULTA PAIS
    $consulta = $conexion->prepare("SELECT * FROM t_pais ORDER BY f_id");
    $consulta ->execute();
    $datosPais = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //------------------------------------------------------------------FIN

    //------------------------------------------------------------------------------------------------CONSULTA DIA SEMANA
    $consulta = $conexion->prepare("SELECT * FROM t_dias_semana ORDER BY f_id");
    $consulta ->execute();
    $datosDiasSemana = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //------------------------------------------------------------------FIN


    //------------------------------------------------------------------------------------------------CONSULTA IMPUESTO
    $consulta = $conexion->prepare("SELECT * FROM t_clase_impuesto ORDER BY f_id");
    $consulta ->execute();
    $datosImpuesto = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //------------------------------------------------------------------FIN

    /** 
    //  -------------------------------------------------------------------------------------------------------------CONSULTA CLIENTES
    */
    $consulta = $conexion->prepare("SELECT * FROM t_clientes  WHERE f_tipo_cliente=1 ORDER BY f_id");
    $consulta ->execute();
    $datosClientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

    $consulta = $conexion->prepare("SELECT * FROM t_clientes  ORDER BY f_id");
    $consulta ->execute();
    $DatoClientes = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //------------------------------------------------------------------FIN

    //------------------------------------------------------------------------------------------------CONSULTA TIPO CLIENTES
    $consulta = $conexion->prepare("SELECT * FROM t_tipo_cliente where f_id=1 ORDER BY f_id");
    $consulta ->execute();
    $datosTipoCliente = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //------------------------------------------------------------------FIN

    //------------------------------------------------------------------------------------------------CONSULTA TIPO PROVEEDOR
    $consulta = $conexion->prepare("SELECT * FROM t_tipo_cliente where f_id=2 ORDER BY f_id");
    $consulta ->execute();
    $datosTipoProvedoor = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //------------------------------------------------------------------FIN


    //------------------------------------------------------------------------------------------------CONSULTA TIPO PROMOTOR
    $consulta = $conexion->prepare("SELECT * FROM t_tipo_cliente where f_id=3 ORDER BY f_id");
    $consulta ->execute();
    $datosTipoPromotor = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //------------------------------------------------------------------FIN




    /** 
    //  -------------------------------------------------------------------------------------------------------------CONSULTA PROVEEDOR
    */
    $consulta = $conexion->prepare("SELECT * FROM t_clientes WHERE f_tipo_cliente=2");
    $consulta ->execute();
    $datosProveedor = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    *   -------------------------------------------------------FIN
    */


    /** 
    *! -------------------------------------------------------------------------------------------------------------CONSULTA PROMOTOR
    */
    $consulta = $conexion->prepare("SELECT * FROM t_clientes WHERE f_tipo_cliente=3");
    $consulta ->execute();
    $datosPromotor = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    *   -------------------------------------------------------FIN 
    */

    /** 
    //  -------------------------------------------------------------------------------------------------------------CONSULTA VENDEDORES promotor
    */
    $consulta = $conexion->prepare("SELECT * FROM t_vendedores ");
    $consulta ->execute();
    $datosVendedores = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    *   -------------------------------------------------------FIN

    /** 
    * !  -------------------------------------------------------------------------------------------------------------CONSULTA Productos
    */
    $consulta = $conexion->prepare("SELECT * FROM t_productos_sucursal ORDER BY f_id_producto");
    $consulta ->execute();
    $datosProductos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach ($datosProductos as $dato) {
        $id_producto1          = $dato['f_referencia'];
        $id_producto2          = $dato['f_id_producto'];
    }
    /** 
    * !  -------------------------------------------------------FIN  
    */ 





    /** 
    //   -------------------------------------------------------------------------------------------------------------CONSULTA ALMACEN
    */
    $consulta = $conexion->prepare("SELECT * FROM t_almacen where f_disponible_venta=true ORDER BY f_iddepto");
    $consulta ->execute();
    $datosAlmacen = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    *   -------------------------------------------------------FIN  
    */ 

    /** 
    //   -------------------------------------------------------------------------------------------------------------CONSULTA CATEGORIA
    */
    $consulta = $conexion->prepare("SELECT * FROM t_categorias ORDER BY f_idcategoria");
    $consulta ->execute();
    $datosCategorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    *   -------------------------------------------------------FIN  
    */ 


    /** 
    * !  -------------------------------------------------------------------------------------------------------------CONSULTA Entradas Inventario
    */
    $consulta = $conexion->prepare("SELECT * FROM t_entradas_inventario ORDER BY f_nodoc");
    $consulta ->execute();
    $datosEntradaInventario = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    * !  -------------------------------------------------------FIN  
    */



    /** 
    * !  -------------------------------------------------------------------------------------------------------------CONSULTA Cotizacion
    */
    $consulta = $conexion->prepare("SELECT * FROM t_cotizacion ORDER BY f_nodoc");
    $consulta ->execute();
    $datosCotizacion = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    * !  -------------------------------------------------------FIN  
    */



    /** 
    * !  -------------------------------------------------------------------------------------------------------------CONSULTA PEDIDO
    */
    $consulta = $conexion->prepare("SELECT * FROM t_factura_pedido ORDER BY f_nodoc");
    $consulta ->execute();
    $datosPedido = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    * !  -------------------------------------------------------FIN  
    */




    /** 
    * !  -------------------------------------------------------------------------------------------------------------CONSULTA FACTURA
    */
    $consulta = $conexion->prepare("SELECT * FROM t_factura ORDER BY f_nodoc");
    $consulta ->execute();
    $datosFactura = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    * !  -------------------------------------------------------FIN  
    */




    /** 
    * !  -------------------------------------------------------------------------------------------------------------CONSULTA DETALLE FACTURA
    */
    $consulta = $conexion->prepare("SELECT * FROM t_detalle_factura ORDER BY f_nodoc");
    $consulta ->execute();
    $datosDetalleFactura = $consulta->fetchAll(PDO::FETCH_ASSOC);
    /** 
    * !  -------------------------------------------------------FIN  
    */

    
?>