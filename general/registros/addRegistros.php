<?php   
    require_once('../../conexion/conexion.php');
    
    require_once('../get_funcion.php');

    
/**  /*-----------------------------------------------------------------------------------------------------------
 * ?  -------------------------------------------------------------------------Modificar Empresa------------------      
/*----------------------------------------------------------------------------------------------------------------*/   
if(isset($_POST['modificar-empresa'])){
    $empresa_nombre        =$_POST['empresa_nombre'];
    $empresa_nombrecia   = $_POST['nombrecia'];
    $empresa_direccion   = $_POST['empresa_direccion'];
    $empresa_rnc         = $_POST['empresa_rnc'];
    $empresa_telefono    = $_POST['empresa_telefono'];
    
    $empresa_ciudad      = $_POST['empresa_ciudad'];
    $empresa_correo      = $_POST['empresa_correo'];
    $empresa_itbis       = $_POST['empresa_impuesto'];

    try {
        $consulta = "UPDATE t_preferencia set  f_empresa='$empresa_nombre', f_nombrecia='$empresa_nombrecia', f_direccion='$empresa_direccion', f_rnc='$empresa_rnc',
                            f_telefono='$empresa_telefono', f_ciudad='$empresa_ciudad',f_email='$empresa_correo', f_itbis='$empresa_itbis' WHERE f_codigo='$empresaCodigo' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();     
        
        if(!$resultado){
            echo"Error En la linea de sql";
        }
        else {
            //echo"<script>window.open('cliente.php')</script>";
            Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=empresa");
            echo"<script>Swal.fire({
                type:'warning',
                title:'Registro Actualizado.!',
            });</script>";
            }
        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }
}


/**  /*-----------------------------------------------------------------------------------------------------------
 * ?  -------------------------------------------------------------------------Registros de pais------------------      
/*----------------------------------------------------------------------------------------------------------------*/ 
    if(isset($_POST['registrarse-pais'])){
        $id_pais     =$_POST['f_id'];
        $pais_nombre =$_POST['f_descripcion'];

        try {
            if ($pais_nombre =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                /*echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Enviado. </p>
                </div>";*/

                    $insertpais = $conexion->prepare("INSERT INTO t_pais values ('$id_pais','$pais_nombre')");
                    $insertpais ->execute();

                    if(!$insertpais){
                    echo"Error En la linea de sql";
                    }
                    else {
                        /* echo"<script>window.open('pais.php')</script>";
                        Header("Location: pais.php");*/
                        echo"Registrado";
                        Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=pais");
                        echo"<script>Swal.fire({
                            type:'warning',
                            title:'Registro Enviado.!',
                        });</script>";
                    }
                }
            } catch (PDOException $error) {
                die('Error: ' . $error->GetMessage());
                echo ('Error: ' . $error->GetMessage());
            }
    }


/*---------------------------------------MODIFICAR------------------*/

    if (isset($_POST['modificar-pais'])) {
        $id_pais     =$_POST['f_id'];
        $pais_nombre =$_POST['f_descripcion'];

        try {
            $consulta = "UPDATE t_pais set f_descripcion='$pais_nombre' WHERE f_id='$id_pais' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();     
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                //echo"<script>window.open('cliente.php')</script>";
                Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=pais");
                echo"<script>Swal.fire({
                    type:'warning',
                    title:'Registro Actualizado.!',
                });</script>";
                }

            } catch (PDOException $error) {
                die('Error: ' . $error->GetMessage());
                echo ('Error: ' . $error->GetMessage());
            }  
    }

    /*----------------------------------------------------------------------------------------------------*/   
/*---------------------------------------------------------------------Registros de ALMACEN------------------*/       
/*--------------------------------------------------------------------------------------------------------*/   
    if(isset($_POST['registrarse-almacen'])){
        $id_almacen     =$_POST['id_almacen'];
        $almacen_nombre =$_POST['almacen_nombre'];
        $almacen_estado =$_POST['almacen_estado'];
        $almacen_visible =$_POST['almacen_visible'];

        try {
            if ($almacen_nombre =="" || $almacen_estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                /*echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Enviado. </p>
                </div>";*/

                    $insertalmacen = $conexion->prepare("INSERT INTO t_almacen values ('$almacen_nombre','$almacen_estado','$almacen_visible')");
                    $insertalmacen ->execute();

                    if(!$insertalmacen){
                    echo"Error En la linea de sql";
                    }
                    else {
                       /* echo"<script>window.open('almacen.php')</script>";
                        Header("Location: almacen.php");*/
                        Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/almacen.php");
                        echo"<script>Swal.fire({
                            type:'warning',
                            title:'Registro Enviado.!',
                        });</script>";
                    }
                }
            } catch (PDOException $error) {
                die('Error: ' . $error->GetMessage());
                echo ('Error: ' . $error->GetMessage());
            }
    }
/*---------------------------------MODIFICAR------------------*/
    if (isset($_POST['modificar-almacen'])) {
        $id_almacen     =$_POST['id_almacen'];
        $almacen_nombre =$_POST['almacen_nombre'];
        $almacen_estado =$_POST['almacen_estado'];
        $almacen_visible =$_POST['almacen_visible'];

        try {
            $consulta = "UPDATE t_almacen set  f_descripcion='$almacen_nombre', f_disponible_venta='$almacen_estado', f_visible='$almacen_visible' 
                                            WHERE f_iddepto='$id_almacen' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();     
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                //echo"<script>window.open('cliente.php')</script>";
                Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/almacen.php");
                echo"<script>Swal.fire({
                    type:'warning',
                    title:'Registro Actualizado.!',
                });</script>";
                }

            } catch (PDOException $error) {
                die('Error: ' . $error->GetMessage());
                echo ('Error: ' . $error->GetMessage());
            }  
    }

    /*----------------------------------------------------------------------------------------------------*/   
/*---------------------------------------------------------------------Registros de categoria------------------*/ 
    if(isset($_POST['registrarse-categoria'])){
        $id_categoria     =$_POST['id_categoria'];
        $categoria_nombre =$_POST['categoria_nombre'];

        try {
            if ($categoria_nombre =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                /*echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Enviado. </p>
                </div>";*/

                    $insertcategoria = $conexion->prepare("INSERT INTO t_categoria values ('$categoria_nombre')");
                    $insertcategoria ->execute();

                    if(!$insertcategoria){
                    echo"Error En la linea de sql";
                    }
                    else {
                       /* echo"<script>window.open('categoria.php')</script>";
                        Header("Location: categoria.php");*/
                        echo"Registrado";
                        Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/categoria.php");
                        echo"<script>Swal.fire({
                            type:'warning',
                            title:'Registro Enviado.!',
                        });</script>";
                    }
                }
            } catch (PDOException $error) {
                die('Error: ' . $error->GetMessage());
                echo ('Error: ' . $error->GetMessage());
            }
    }
/*---------------------------------------------------------MODIFICAR------------------*/

    if (isset($_POST['modificar-categoria'])) {
        $id_categoria     =$_POST['id_categoria'];
        $categoria_nombre =$_POST['categoria_nombre'];
        try {
            $consulta = "UPDATE t_categoria set  categoria_nombre='$categoria_nombre' WHERE id_categoria='$id_categoria' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();     
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                //echo"<script>window.open('cliente.php')</script>";
                Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/categoria.php");
                echo"<script>Swal.fire({
                    type:'warning',
                    title:'Registro Actualizado.!',
                });</script>";
                }

            } catch (PDOException $error) {
                die('Error: ' . $error->GetMessage());
                echo ('Error: ' . $error->GetMessage());
            }  
    }



    /*--------------------------------------------------------------------------------------------------------------------------------------------*/   
/*--------------------------------------------------------------------------------------------------------Registros de marca------------------*/ 
if(isset($_POST['registrarse-marca'])){
    $id_marca     =$_POST['id_marca'];
    $marca_nombre =$_POST['marca_nombre'];

    try {
        if ($marca_nombre =="") {
            echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
            <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>";
        }else {
            /*echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
            <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Enviado. </p>
            </div>";*/

                $insertmarca = $conexion->prepare("INSERT INTO t_marca values ('$marca_nombre')");
                $insertmarca ->execute();

                if(!$insertmarca){
                echo"Error En la linea de sql";
                }
                else {
                   /* echo"<script>window.open('marca.php')</script>";
                    Header("Location: marca.php");*/
                    echo"Registrado";
                    Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/marca.php");
                    echo"<script>Swal.fire({
                        type:'warning',
                        title:'Registro Enviado.!',
                    });</script>";
                }
            }
        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }
}
/*-------------------------------------------MODIFICAR------------------*/

if (isset($_POST['modificar-marca'])) {
    $id_marca     =$_POST['id_marca'];
    $marca_nombre =$_POST['marca_nombre'];
    try {
        $consulta = "UPDATE t_marca set  marca_nombre='$marca_nombre' WHERE id_marca='$id_marca' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();     
        
        if(!$resultado){
            echo"Error En la linea de sql";
        }
        else {
            //echo"<script>window.open('cliente.php')</script>";
            Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/marca.php");
            echo"<script>Swal.fire({
                type:'warning',
                title:'Registro Actualizado.!',
            });</script>";
            }

        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }  
}





/**  /*-----------------------------------------------------------------------------------------------------------
 * ?  -------------------------------------------------------------------------Registros de PROMOTOR------------------      
/*----------------------------------------------------------------------------------------------------------------*/ 

if(isset($_POST['registrarse-promotor'])){
    $id_promotor          =$_POST['codigo'];
    $promotor_nombre          =$_POST['promotor_nombre'];
    $promotor_apellido        =$_POST['promotor_apellido'];
    $promotor_telefono        =$_POST['promotor_telefono'];
    $promotor_celular         =$_POST['promotor_celular'];
    $promotor_cedula          =$_POST['promotor_cedula'];
    $promotor_direccion       =$_POST['promotor_direccion'];
    //$promotor_estado_civil    =$_POST['promotor_estado_civil'];
    $promotor_comision          =$_POST['promotor_comision'];
    $promotor_fecha           =$_POST['promotor_fecha'];
    $fecha = getdate();
    $promotor_estado          = $_POST['promotor_estado'];

    try {
        if ($promotor_nombre =="" || $promotor_apellido == "" || $promotor_sexo == "" ||  $promotor_telefono =="" || $promotor_direccion == "" || $promotor_cedula == "" || $promotor_estado =="") {
            echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
            <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>";
        }else {
            
                $insertPromotor = $conexion->prepare("INSERT into t_promotor values ('$promotor_nombre','$promotor_apellido','$promotor_telefono','$promotor_celular','$promotor_direccion','$promotor_comision',
                                                    '', '$promotor_fechanacimiento','$promotor_cedula','$promotor_estado')");
                $insertPromotor ->execute();


                if(!$insertPromotor){
                echo"Error En la linea de sql";
                }
                else {
                   /* echo"<script>window.open('usuario.php')</script>";
                    Header("Location: usuario.php");*/
                    echo"Listo";
                    Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=promotor");
                    echo"<script>Swal.fire({
                        type:'warning',
                        title:'Registro Enviado.!',
                    });</script>";
                }
            }
        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }
}


/**  /*-----------------------------------------------------------------------------------------------------------
 * ?  -------------------------------------------------------------------------Registros de TIPO CLIENTES------------------      
/*----------------------------------------------------------------------------------------------------------------*/ 
if(isset($_POST['registrarse-tipoCliente'])){
    $tipoCliente_codigo     =$_POST['tipoCliente_codigo'];
    $tipoCliente_nombre =$_POST['tipoCliente_nombre'];

    try {
        if ($tipoCliente_nombre =="") {
            echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
            <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>";
        }else {
            /*echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
            <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Enviado. </p>
            </div>";*/

                $inserttipoCliente = $conexion->prepare("INSERT INTO t_tipo_cliente values ('$tipoCliente_codigo','$tipoCliente_nombre')");
                $inserttipoCliente ->execute();

                if(!$inserttipoCliente){
                echo"Error En la linea de sql";
                }
                else {
                   /* echo"<script>window.open('marca.php')</script>";
                    Header("Location: marca.php");*/
                    echo"Registrado";
                    Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=tipoCliente");
                    echo"<script>Swal.fire({
                        type:'warning',
                        title:'Registro Enviado.!',
                    });</script>";
                }
            }
        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }
}



/*-------------------------------------------MODIFICAR------------------*/
if (isset($_POST['modificar-tipoCliente'])) {
    $tipoCliente_codigo     =$_POST['tipoCliente_codigo'];
    $tipoCliente_nombre     =$_POST['tipoCliente_nombre'];

    try {
        $consulta = "UPDATE t_tipo_cliente set  f_descripcion='$tipoCliente_nombre' WHERE f_id='$tipoCliente_codigo' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();     
        
        if(!$resultado){
            echo"Error En la linea de sql";
        }
        else {
            //echo"<script>window.open('cliente.php')</script>";
            Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=tipoCliente");
            echo"<script>Swal.fire({
                type:'warning',
                title:'Registro Actualizado.!',
            });</script>";
            }

        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }  
}


/**  /*----------------------------------------------------------------------------------------------------------------------------------
 * ?  ---------------------------------------------------------------------------------------Registros de CLIENTES------------------      
/*---------------------------------------------------------------------------------------------------------------------------------------*/ 

/** 
    //  -------------------------------------------------------------------------------------------------------------CONSULTA SECUENCIA
    */
    $consulta = $conexion->prepare("SELECT *FROM t_secuencias where f_tipo_documento='CLI'");
    $consulta ->execute();
    $datosSecuencia = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach ($datosSecuencia as $Secuencia) {
        $SecuenciaCodigo             = $Secuencia['f_secuencia'];
        $SecuenciaDescripcion        = $Secuencia['f_descripcion'];
        $SecuenciaDocumento        = $Secuencia['f_tipo_documento'];
        
    } 

    foreach ($DatoClientes as $dato) {
        $id_cliente          = $dato['f_id'];
    } 
    /** 
    */
    if(isset($_POST['registrarse-clientes'])){
        $id_cliente              =$_POST['id_cliente'];
        $cliente_nombre          =$_POST['cliente_nombre'];
        $cliente_apellido        =$_POST['cliente_apellido'];
        $cliente_sexo            =$_POST['cliente_sexo'];
        $cliente_edad            =$_POST['cliente_edad'];
        $cliente_telefono        =$_POST['cliente_telefono'];
        $cliente_celular         =$_POST['cliente_celular'];
        $cliente_cedula          =$_POST['cliente_cedula'];
        $cliente_NSS             =$_POST['cliente_NSS'];
        $cliente_direccion       =$_POST['cliente_direccion'];
        //$cliente_estado_civil    =$_POST['cliente_estado_civil'];
        $cliente_correo          =$_POST['cliente_correo'];
        $cliente_tipo       =$_POST['id_tipo'];
        $cliente_fechanacimiento =$_POST['cliente_fechanacimiento'];
        $fecha = getdate();
        $activo = true;
        $id_pais            =$_POST['id_pais'];
        $cliente_provincia       =$_POST['cliente_provincia'];
        $cliente_municipio       =$_POST['cliente_municipio'];
        $cliente_barrio          =$_POST['cliente_barrio'];
        $cliente_visita          =$_POST['id_dias']; 
        $cliente_estado          =$_POST['cliente_estado'];
        $cliente_credito         =$_POST['cliente_credito'];

        $Secuencia_Cliente = 1+$SecuenciaCodigo;

        $numerosRegistrados = array($id_cliente);
        $numeroARegistrar = $Secuencia_Cliente;

        if (in_array($numeroARegistrar, $numerosRegistrados)) {
            echo "El número ya está registrado";
        } else {

            if($cliente_tipo == 1){

                try {
                    if ($cliente_nombre =="" || $cliente_apellido == "" || $cliente_estado =="") {
                        echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                        <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>";
                        echo "Digite El Nombre Cliente: " . $cliente_nombre->getMessage();
                        echo "Digite El Apellido Del Cliente: " . $cliente_apellido->getMessage();
                
                    }else {

                            $insertCliente = $conexion->prepare("INSERT into t_clientes (f_id,f_nombre,f_apellido,f_telefono,f_cedula,f_limite_credito,f_email,f_celular,f_direccion,f_rif,f_tipo_cliente,f_estado_cliente,f_d_provincia,f_d_municipio,f_pais,f_edad,f_sexo,f_fecha_nacimiento) 
                                                            values ('$Secuencia_Cliente','$cliente_nombre','$cliente_apellido','$cliente_telefono','$cliente_cedula','$cliente_credito','$cliente_correo','$cliente_celular',
                                                                    '$cliente_direccion','$cliente_NSS','$cliente_tipo','$cliente_estado','$cliente_provincia','$cliente_municipio','$id_pais','$cliente_edad','$cliente_sexo','$cliente_fechanacimiento')");
                            $insertCliente ->execute();

                            $updateClienteSecuencia = "UPDATE t_secuencias SET f_secuencia='$Secuencia_Cliente' WHERE f_tipo_documento='CLI' ";		
                                $resultado = $conexion->prepare($updateClienteSecuencia);
                            $resultado->execute(); 


                            if(!$insertCliente){
                            echo"Error En la linea de sql";
                            }
                            else {
                            /* echo"<script>window.open('usuario.php')</script>";
                                Header("Location: usuario.php");*/
                                echo"Listo: cliente Registrado Es El Numero["; echo $Secuencia_Cliente.']';
                                Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=cliente");
                                echo"<script>Swal.fire({
                                    type:'warning',
                                    title:'Registro Enviado.!',
                                });</script>";
                            }
                        }
                    } catch (PDOException $error) {
                        die('Error: ' . $error->GetMessage());
                        echo ('Error: ' . $error->GetMessage());
                    }

            }elseif ($cliente_tipo == 3) {
                try {
                    if ($cliente_nombre =="" || $cliente_apellido == "" || $cliente_estado =="") {
                        echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                        <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>";
                        echo "Digite El Nombre Cliente: " . $cliente_nombre->getMessage();
                        echo "Digite El Apellido Del Cliente: " . $cliente_apellido->getMessage();
                
                    }else {

                            $insertCliente = $conexion->prepare("INSERT into t_clientes (f_id,f_nombre,f_apellido,f_telefono,f_cedula,f_email,f_celular,f_direccion,f_rif,f_tipo_cliente,f_estado_cliente,f_d_provincia,f_d_municipio,f_pais,f_dia_visita,f_edad,f_sexo,f_fecha_nacimiento) 
                                                            values ('$Secuencia_Cliente','$cliente_nombre','$cliente_apellido','$cliente_telefono','$cliente_cedula','$cliente_correo','$cliente_celular',
                                                                    '$cliente_direccion','$cliente_cedula','$cliente_tipo','$cliente_estado','$cliente_provincia','$cliente_municipio','$id_pais','$cliente_visita','$cliente_edad','$cliente_sexo','$cliente_fechanacimiento')");
                            $insertCliente ->execute();

                            $updateClienteSecuencia = "UPDATE t_secuencias SET f_secuencia='$Secuencia_Cliente' WHERE f_tipo_documento='CLI' ";		
                                $resultado = $conexion->prepare($updateClienteSecuencia);
                            $resultado->execute(); 


                            if(!$insertCliente){
                            echo"Error En la linea de sql";
                            }
                            else {
                            /* echo"<script>window.open('usuario.php')</script>";
                                Header("Location: usuario.php");*/
                                echo"Listo: Promotor Registrado";
                                Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=promotor");
                                echo"<script>Swal.fire({
                                    type:'warning',
                                    title:'Registro Enviado.!',
                                });</script>";
                            }
                        }
                    } catch (PDOException $error) {
                        die('Error: ' . $error->GetMessage());
                        echo ('Error: ' . $error->GetMessage());
                    }
            }
        }
}
        



/*---------------------------------------------------------MODIFICAR------------------*/

if (isset($_POST['modificar-clientes'])) {
    $id_cliente              =$_POST['id_cliente'];
    $cliente_nombre          =$_POST['cliente_nombre'];
    $cliente_apellido        =$_POST['cliente_apellido'];
    $cliente_sexo            =$_POST['cliente_sexo'];
    $cliente_edad            =$_POST['cliente_edad'];
    $cliente_telefono        =$_POST['cliente_telefono'];
    $cliente_celular         =$_POST['cliente_celular'];
    $cliente_cedula          =$_POST['cliente_cedula'];
    $cliente_NSS             =$_POST['cliente_NSS'];
    $cliente_direccion       =$_POST['cliente_direccion'];
    //$cliente_estado_civil    =$_POST['cliente_estado_civil'];
    $cliente_correo          =$_POST['cliente_correo'];
    $cliente_tipo       =$_POST['id_tipo'];
    $cliente_fechanacimiento =$_POST['cliente_fechanacimiento'];
    $fecha = getdate();
    $activo = true;
    $id_pais            =$_POST['id_pais'];
    $cliente_provincia       =$_POST['cliente_provincia'];
    $cliente_municipio       =$_POST['cliente_municipio'];
    $cliente_barrio          =$_POST['cliente_barrio'];
    $cliente_estado          =$_POST['cliente_estado'];
    $cliente_credito         =$_POST['cliente_credito'];

    try {
        $consulta = "UPDATE t_clientes SET f_nombre='$cliente_nombre', f_apellido='$cliente_apellido', f_sexo='$cliente_sexo',f_fecha_nacimiento='$cliente_fechanacimiento', 
                                        f_edad='$cliente_edad', f_telefono='$cliente_telefono', f_direccion='$cliente_direccion', f_email='$cliente_correo',f_rif='$cliente_NSS',
                                        f_cedula='$cliente_cedula',f_pais='$id_pais', f_estado_cliente='$cliente_estado', f_d_provincia='$cliente_provincia', f_d_municipio='$cliente_municipio' WHERE f_id='$id_cliente' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();   
        
        if(!$resultado){
            echo"Error En la linea de sql";
        }
        else {
            //echo"<script>window.open('cliente.php')</script>";
            Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=cliente");
            echo"<script>Swal.fire({
                type:'warning',
                title:'Registro Actualizado.!',
            });</script>";
            }

        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }  
}


/**  /*----------------------------------------------------------------------------------------------------------------------------------
 * ?  ---------------------------------------------------------------------------------------Registros de VENDEDOR------------------      
/*---------------------------------------------------------------------------------------------------------------------------------------*/ 

/** 
    //  -------------------------------------------------------------------------------------------------------------CONSULTA SECUENCIA
    */
    $consulta = $conexion->prepare("SELECT *FROM t_secuencias where f_tipo_documento='VND'");
    $consulta ->execute();
    $datosSecuencia = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach ($datosSecuencia as $Secuencia) {
        $SecuenciaCodigo             = $Secuencia['f_secuencia'];
    } 

    foreach ($datosVendedores as $dato) {
        $id_vendedor          = $dato['f_idvendedor'];
    } 
    /** 
    */
    if(isset($_POST['registrarse-vendedor'])){
        $id_vendedor              =$_POST['id_vendedor'];
        $vendedor_nombre          =$_POST['vendedor_nombre'];
        $vendedor_apellido        =$_POST['vendedor_apellido'];
        $vendedor_telefono        =$_POST['vendedor_telefono'];
        $vendedor_celular         =$_POST['vendedor_celular'];
        $vendedor_cedula          =$_POST['vendedor_cedula'];
        $vendedor_direccion       =$_POST['vendedor_direccion'];
        $vendedor_correo          =$_POST['vendedor_correo'];
        $fecha = getdate();
        $vendedor_comision          =$_POST['vendedor_comision']; 
        $vendedor_estado          =$_POST['vendedor_estado'];

        $Secuencia_vendedor = 1+$SecuenciaCodigo;

        $numerosRegistrados = array($id_vendedor);
        $numeroARegistrar = $Secuencia_vendedor;

        if (in_array($numeroARegistrar, $numerosRegistrados)) {
            echo "El número ya está registrado";
        } else {
        //}

        //if ($id_vendedor == $SecuenciaCodigo) {

        try {
            if ($vendedor_nombre =="" || $vendedor_apellido == "" || $vendedor_estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
                echo "Digite El Nombre Vendedor: " . $vendedor_nombre->getMessage();
                echo "Digite El Apellido Del Vendedor: " . $vendedor_apellido->getMessage();
        
            }else {

                    $insertVendedor = $conexion->prepare("INSERT into t_vendedores (f_idvendedor,f_nombre,f_apellido,f_telefono1,f_telefono2,f_direccion,f_activo,f_email,f_comision_venta,f_cedula) 
                                                    values ('$Secuencia_vendedor','$vendedor_nombre','$vendedor_apellido','$vendedor_telefono','$vendedor_celular','$vendedor_direccion','$vendedor_estado','$vendedor_correo',
                                                            '$vendedor_comision','$vendedor_cedula')");
                    $insertVendedor ->execute();

                    $updateVendedorSecuencia = "UPDATE t_secuencias SET f_secuencia='$Secuencia_vendedor' WHERE f_tipo_documento='VND' ";		
                        $resultado = $conexion->prepare($updateVendedorSecuencia);
                    $resultado->execute(); 


                    if(!$insertVendedor){
                    echo"Error En la linea de sql";
                    }
                    else {
                    /* echo"<script>window.open('usuario.php')</script>";
                        Header("Location: usuario.php");*/
                        echo"Listo: Promotor Registrado Es El Numero["; echo $Secuencia_vendedor.']';
                        Header ("refresh:2; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=promotor");
                        echo"<script>Swal.fire({
                            type:'warning',
                            title:'Registro Enviado.!',
                        });</script>";
                    }
                }
            } catch (PDOException $error) {
                die('Error: ' . $error->GetMessage());
                echo ('Error: ' . $error->GetMessage());
            }
    }
    }



/*---------------------------------------------------------MODIFICAR------------------*/

if (isset($_POST['modificar-vendedor'])) {
    $id_vendedor              =$_POST['id_vendedor'];
    $vendedor_nombre          =$_POST['vendedor_nombre'];
    $vendedor_apellido        =$_POST['vendedor_apellido'];
    $vendedor_telefono        =$_POST['vendedor_telefono'];
    $vendedor_celular         =$_POST['vendedor_celular'];
    $vendedor_cedula          =$_POST['vendedor_cedula'];
    $vendedor_direccion       =$_POST['vendedor_direccion'];
    $vendedor_correo          =$_POST['vendedor_correo'];
    $fecha = getdate();
    $vendedor_comision          =$_POST['vendedor_comision']; 
    $vendedor_estado          =$_POST['vendedor_estado'];

    try {
        $consulta = "UPDATE t_vendedores SET f_nombre='$vendedor_nombre', f_apellido='$vendedor_apellido', f_telefono1='$vendedor_telefono', f_telefono2='$vendedor_celular', f_direccion='$vendedor_direccion', f_email='$vendedor_correo',
                                        f_cedula='$vendedor_cedula',f_comision_venta='$vendedor_comision',f_activo='$vendedor_estado' WHERE f_idvendedor='$id_vendedor' ";		
        $resultadoVendedor = $conexion->prepare($consulta);
        $resultadoVendedor->execute();   
        
        if(!$resultadoVendedor){
            echo"Error En la linea de sql";
        }
        else {
            //echo"<script>window.open('cliente.php')</script>";
            echo"Listo: Promotor Actualizado";
            Header ("refresh:3; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=promotor");
            echo"<script>Swal.fire({
                type:'warning',
                title:'Registro Actualizado.!',
            });</script>";
            }

        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }  
}



/**  /*----------------------------------------------------------------------------------------------------------------------------------
 * ?  ---------------------------------------------------------------------------------------Registros de PRODUCTOS SUCURSAL------------------      
/*---------------------------------------------------------------------------------------------------------------------------------------*/ 

/** 
    //  -------------------------------------------------------------------------------------------------------------CONSULTA SECUENCIA
    */
    $consulta = $conexion->prepare("SELECT *FROM t_secuencias where f_tipo_documento='PROD'");
    $consulta ->execute();
    $datosSecuencia = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach ($datosSecuencia as $Secuencia) {
        $SecuenciaCodigo             = $Secuencia['f_secuencia'];
        
    } 

    if(isset($_POST['registrarse-productos'])){
        $idproducto              =$_POST['idproducto'];
        $producto_descripcion    =$_POST['producto_descripcion'];
        $id_categorias           =$_POST['id_categorias'];
        $producto_costo          =$_POST['producto_costo'];
        $productos_minimo        =$_POST['productos_minimo'];
        $producto_precio1        =$_POST['producto_precio1'];
        $producto_precio2        =$_POST['producto_precio2'];
        $producto_precio3        =$_POST['producto_precio3'];
        $producto_cantidad       =$_POST['producto_cantidad'];
        $producto_fechaentrada   =$_POST['producto_fechaentrada'];
        $producto_fechacreacion  =$_POST['producto_fechacreacion'];
        $id_impuesto             =$_POST['id_impuesto'];
        $fecha = getdate();
        $id_almacen            =$_POST['id_almacen'];
        $controlinventario     =$_POST['controlinventario']; 
        $estado          =$_POST['estado'];

        //aqui realizo el conteo de la secuencia tengo el valor que esta registrado en la basede datos y le sumo un 1
        $Secuencia_Producto = 1+$SecuenciaCodigo;

        //Realizo un conteo para saber los valores registrado para luego comprara si algun datos de esta tabla es igual a la secuencia
        $consulta = $conexion->prepare("SELECT COUNT(*) AS count FROM t_productos_sucursal WHERE f_id_producto =:parametro1");
        $consulta->bindValue(":parametro1",$Secuencia_Producto);
        $consulta->execute();
        $result = $consulta->fetch();

        if ($result['count'] > 0) {
            echo "El número ya está registrado<br>"; echo"ERROR: El Codigo Del Producto Que Intenta Registrar ["; echo $SecuenciaCodigo.']'; echo 'Esta Registrado';
        } else {
        //}

        //utilizo la variable strval para cambiar la variable de int a string
        $referencia = strval($Secuencia_Producto);
        
            try {
                if ($producto_descripcion =="" || $producto_costo == 0 || $producto_precio1 == 0) {
                    echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                    <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                    </div>";
                    echo "Digite La Descripcion Del Producto: " . $producto_descripcion->getMessage();
                    echo "Digite El Costo Del Producto: " . $producto_costo->getMessage();
                    echo "Digite El Precio 1 Del Producto: " . $producto_costo->getMessage();
            
                }else {

                        $insertProducto = $conexion->prepare("INSERT into t_productos_sucursal (f_referencia,f_descripcion,f_controlinventario,f_idcategoria,f_precio2,f_ultimocosto,f_precio,f_limiteminimo,f_existencia,f_fecha,f_id_producto,f_precio3,f_status,f_almacen,f_fecha_inventario) 
                                                        values ('$referencia','$producto_descripcion','$controlinventario','$id_categorias','$producto_precio2','$producto_costo','$producto_precio1','$productos_minimo','$producto_cantidad',
                                                                '$producto_fechacreacion','$Secuencia_Producto','$producto_precio3','$estado','$id_almacen','$producto_fechaentrada')");
                        $insertProducto ->execute();

                        $updateProductoSecuencia = "UPDATE t_secuencias SET f_secuencia='$Secuencia_Producto' WHERE f_tipo_documento='PROD' ";		
                            $resultado = $conexion->prepare($updateProductoSecuencia);
                            $resultado->execute(); 

                        if(!$insertProducto){
                            echo"Error En la linea de sql";
                        }else {
                        
                            echo"Listo: Producto Registrado Es El Numero["; echo $Secuencia_Producto.']';
                            Header ("refresh:3; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=productos");
                            echo"<script>Swal.fire({
                                type:'warning',
                                title:'Registro Enviado.!',
                            });</script>";
                        }
                    }
                } catch (PDOException $error) {
                    die('Error: ' . $error->GetMessage());
                    echo ('Error: ' . $error->GetMessage());
                }
            
        }
        
}
        



/*---------------------------------------------------------MODIFICAR------------------*/

if (isset($_POST['modificar-productos'])) {
    $idproducto              =$_POST['idproducto'];
        $producto_descripcion    =$_POST['producto_descripcion'];
        $id_categorias           =$_POST['id_categorias'];
        $producto_costo          =$_POST['producto_costo'];
        $productos_minimo        =$_POST['productos_minimo'];
        $producto_precio1        =$_POST['producto_precio1'];
        $producto_precio2        =$_POST['producto_precio2'];
        $producto_precio3        =$_POST['producto_precio3'];
        $producto_cantidad       =$_POST['producto_cantidad'];
        $producto_fechaentrada   =$_POST['producto_fechaentrada'];
        $producto_fechacreacion  =$_POST['producto_fechacreacion'];
        $id_impuesto             =$_POST['id_impuesto'];
        $fecha = getdate();
        $id_almacen            =$_POST['id_almacen'];
        $controlinventario     =$_POST['controlinventario']; 
        $estado          =$_POST['estado'];

    try {
        $consulta = "UPDATE t_productos_sucursal SET f_descripcion='$producto_descripcion', f_controlinventario='$controlinventario', f_idcategoria='$id_categorias',f_precio2='$producto_precio2', 
                                        f_limiteminimo='$productos_minimo', f_existencia='$producto_cantidad', f_fecha='$producto_fechacreacion', f_precio3='$producto_precio3',
                                        f_precio='$producto_precio1',f_status='$estado', f_fecha_inventario='$producto_fechaentrada' WHERE f_id_producto='$idproducto' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();   
        
        if(!$resultado){
            echo"Error En la linea de sql";
        }
        else {
            //echo"<script>window.open('cliente.php')</script>";
            Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=productos");
            echo"<script>Swal.fire({
                type:'warning',
                title:'Registro Actualizado.!',
            });</script>";
            }

        } catch (PDOException $error) {
            die('Error: ' . $error->GetMessage());
            echo ('Error: ' . $error->GetMessage());
        }  
}


?>
