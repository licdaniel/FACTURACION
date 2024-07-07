<?php   
    require_once('../../conexion/conexion.php');
        
    if(isset($_POST['registrarse'])){
        $id_suplidor          =$_POST['id_suplidor'];
        $id_pais                  =$_POST['id_pais'];
        $suplidor_nombre          =$_POST['suplidor_nombre'];
        $suplidor_apellido        =$_POST['suplidor_apellido'];
        $suplidor_sexo            =$_POST['suplidor_sexo'];
        $suplidor_edad            =$_POST['suplidor_edad'];
        $suplidor_telefono        =$_POST['suplidor_telefono'];
        $suplidor_celular         =$_POST['suplidor_celular'];
        $suplidor_cedula          =$_POST['suplidor_cedula'];
        $suplidor_direccion       =$_POST['suplidor_direccion'];
        //$suplidor_estado_civil    =$_POST['suplidor_estado_civil'];
        $suplidor_correo          =$_POST['suplidor_correo'];
        $suplidor_identidad       =$_POST['suplidor_identidad'];
        $suplidor_fechanacimiento =$_POST['suplidor_fechanacimiento'];
        $fecha = getdate();
        $suplidor_provincia       =$_POST['suplidor_provincia'];
        $suplidor_municipio       =$_POST['suplidor_municipio'];
        $suplidor_barrio          =$_POST['suplidor_barrio'];
        $suplidor_estado          =$_POST['suplidor_estado'];
        $suplidor_cuenta         =$_POST['suplidor_cuenta'];

        
        try {
            if ($suplidor_nombre =="" || $suplidor_apellido == "" || $suplidor_sexo == "" ||  $suplidor_telefono =="" || $suplidor_direccion == "" || $suplidor_cedula == "" || $suplidor_estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                
                    $insertsuplidor = $conexion->prepare("INSERT into t_suplidor values ('$id_pais','$suplidor_nombre','$suplidor_apellido','$suplidor_sexo',
                                                        '$suplidor_edad','$suplidor_telefono','$suplidor_celular','$suplidor_cedula','$suplidor_direccion','','$suplidor_correo','$suplidor_identidad',
                                                        '$suplidor_fechanacimiento',GETDATE(),'$suplidor_provincia','$suplidor_municipio','','$suplidor_barrio','$suplidor_estado','$suplidor_cuenta')");
                    $insertsuplidor ->execute();


                    if(!$insertsuplidor){
                    echo"Error En la linea de sql";
                    }
                    else {
                       /* echo"<script>window.open('usuario.php')</script>";
                        Header("Location: usuario.php");*/
                        echo"Listo";
                        Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=suplidor");
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
        $id_suplidor          =$_POST['id_suplidor'];
        $suplidor_nombre          =$_POST['suplidor_nombre'];
        $suplidor_apellido        =$_POST['suplidor_apellido'];
        $suplidor_sexo            =$_POST['suplidor_sexo'];
        $suplidor_edad            =$_POST['suplidor_edad'];
        $suplidor_telefono        =$_POST['suplidor_telefono'];
        $suplidor_celular         =$_POST['suplidor_celular'];
        $suplidor_cedula          =$_POST['suplidor_cedula'];
        $suplidor_direccion       =$_POST['suplidor_direccion'];
        //$suplidor_estado_civil    =$_POST['suplidor_estado_civil'];
        $suplidor_correo          =$_POST['suplidor_correo'];
        $suplidor_identidad       =$_POST['suplidor_identidad'];
        $suplidor_fechanacimiento =$_POST['suplidor_fechanacimiento'];
        $fecha = getdate();
        $id_pais                  =$_POST['id_pais'];
        $suplidor_provincia       =$_POST['suplidor_provincia'];
        $suplidor_municipio       =$_POST['suplidor_municipio'];
        $suplidor_barrio          =$_POST['suplidor_barrio'];
        $suplidor_estado          =$_POST['suplidor_estado'];
        $suplidor_cuenta         =$_POST['suplidor_cuenta'];

        try {
            $consulta = "UPDATE t_suplidor SET suplidor_nombre='$suplidor_nombre', suplidor_apellido='$suplidor_apellido', suplidor_sexo='$suplidor_sexo',suplidor_fechanacimiento='$suplidor_fechanacimiento', 
                                            suplidor_edad='$suplidor_edad', suplidor_telefono='$suplidor_telefono', suplidor_direccion='$suplidor_direccion', suplidor_correo='$suplidor_correo',
                                            suplidor_cedula='$suplidor_cedula',id_pais='$id_pais', suplidor_estado='$suplidor_estado' WHERE id_suplidor='$id_suplidor' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();   
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                //echo"<script>window.open('suplidor.php')</script>";
                Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=suplidor");
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