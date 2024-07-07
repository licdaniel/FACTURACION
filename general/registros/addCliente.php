// 

<?php   
    require_once('../../conexion/conexion.php');
        
    if(isset($_POST['registrarse'])){
        $id_cliente          =$_POST['id_cliente'];
        $cliente_nombre          =$_POST['cliente_nombre'];
        $cliente_apellido        =$_POST['cliente_apellido'];
        $cliente_sexo            =$_POST['cliente_sexo'];
        $cliente_edad            =$_POST['cliente_edad'];
        $cliente_telefono        =$_POST['cliente_telefono'];
        $cliente_celular         =$_POST['cliente_celular'];
        $cliente_cedula          =$_POST['cliente_cedula'];
        $cliente_direccion       =$_POST['cliente_direccion'];
        //$cliente_estado_civil    =$_POST['cliente_estado_civil'];
        $cliente_correo          =$_POST['cliente_correo'];
        $cliente_identidad       =$_POST['cliente_identidad'];
        $cliente_fechanacimiento =$_POST['cliente_fechanacimiento'];
        $fecha = getdate();
        $id_pais            =$_POST['id_pais'];
        $cliente_provincia       =$_POST['cliente_provincia'];
        $cliente_municipio       =$_POST['cliente_municipio'];
        $cliente_barrio          =$_POST['cliente_barrio'];
        $cliente_estado          =$_POST['cliente_estado'];
        $cliente_credito         =$_POST['cliente_credito'];
        try {
            if ($cliente_nombre =="" || $cliente_apellido == "" || $cliente_sexo == "" ||  $cliente_telefono =="" || $cliente_direccion == "" || $cliente_cedula == "" || $cliente_estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                
                    $insertCliente = $conexion->prepare("INSERT into t_cliente values ('$id_pais','$cliente_nombre','$cliente_apellido','$cliente_sexo',
                                                        '$cliente_edad','$cliente_telefono','$cliente_celular','$cliente_cedula','$cliente_direccion','','$cliente_correo','$cliente_identidad',
                                                        '$cliente_fechanacimiento',GETDATE(),'$cliente_provincia','$cliente_municipio','','$cliente_barrio','$cliente_estado','$cliente_credito')");
                    $insertCliente ->execute();


                    if(!$insertCliente){
                    echo"Error En la linea de sql";
                    }
                    else {
                       /* echo"<script>window.open('usuario.php')</script>";
                        Header("Location: usuario.php");*/
                        echo"Listo";
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
    }


/*---------------------------------------------------------MODIFICAR------------------*/

    if (isset($_POST['modificar'])) {
        $id_cliente          =$_POST['id_cliente'];
        $cliente_nombre          =$_POST['cliente_nombre'];
        $cliente_apellido        =$_POST['cliente_apellido'];
        $cliente_sexo            =$_POST['cliente_sexo'];
        $cliente_edad            =$_POST['cliente_edad'];
        $cliente_telefono        =$_POST['cliente_telefono'];
        $cliente_celular         =$_POST['cliente_celular'];
        $cliente_cedula          =$_POST['cliente_cedula'];
        $cliente_direccion       =$_POST['cliente_direccion'];
        //$cliente_estado_civil    =$_POST['cliente_estado_civil'];
        $cliente_correo          =$_POST['cliente_correo'];
        $cliente_identidad       =$_POST['cliente_identidad'];
        $cliente_fechanacimiento =$_POST['cliente_fechanacimiento'];
        $fecha = getdate();
        $id_pais            =$_POST['id_pais'];
        $cliente_provincia       =$_POST['cliente_provincia'];
        $cliente_municipio       =$_POST['cliente_municipio'];
        $cliente_barrio          =$_POST['cliente_barrio'];
        $cliente_estado          =$_POST['cliente_estado'];
        $cliente_credito         =$_POST['cliente_credito'];

        try {
            $consulta = "UPDATE t_cliente SET cliente_nombre='$cliente_nombre', cliente_apellido='$cliente_apellido', cliente_sexo='$cliente_sexo',cliente_fechanacimiento='$cliente_fechanacimiento', 
                                            cliente_edad='$cliente_edad', cliente_telefono='$cliente_telefono', cliente_direccion='$cliente_direccion', cliente_correo='$cliente_correo',
                                            cliente_cedula='$cliente_cedula',id_pais='$id_pais', cliente_estado='$cliente_estado' WHERE id_cliente='$id_cliente' ";		
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

?>