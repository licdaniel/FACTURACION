<?php 
    require_once('../../conexion/conexion.php');
        
    if(isset($_POST['registrarse'])){
        $id_usuario =$_POST['codigo'];
        $id_almacen =$_POST['id_almacen'];
        $usuario_nombre =$_POST['usuario_nombre'];
        $usuario_apellido =$_POST['usuario_apellido'];
        $usuario_direccion =$_POST['usuario_direccion'];
        $telefono =$_POST['usuario_telefono'];
        $password =$_POST['password1'];
        $usuario =$_POST['usuario'];
        $usuario_cargo =$_POST['usuario_cargo'];
        $usuario_estado =$_POST['usuario_estado'];

        try {
            if ($usuario_nombre =="" || $usuario_apellido == "" || $usuario_direccion == "" ||  $usuario == "" || $usuario_estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                /*echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Enviado. </p>
                </div>";*/

                    $insertusuario = $conexion->prepare("INSERT INTO t_usuario values ('$id_almacen','$usuario_nombre','$usuario_apellido','$usuario_direccion','$telefono','$usuario','$password','$usuario_cargo','$usuario_estado')");
                    $insertusuario ->execute();

                    if(!$insertusuario){
                    echo"Error En la linea de sql";
                    }
                    else {
                       /* echo"<script>window.open('usuario.php')</script>";
                        Header("Location: usuario.php");*/
                        Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/usuario.php");
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
            $id_usuario =$_POST['codigo'];
            $usuario_nombre =$_POST['usuario_nombre'];
            $usuario_apellido =$_POST['usuario_apellido'];
            $usuario_direccion =$_POST['usuario_direccion'];
            $telefono =$_POST['usuario_telefono'];
            $password =$_POST['password1'];
            $usuario =$_POST['usuario'];
            $usuario_cargo =$_POST['usuario_cargo'];
            $usuario_estado =$_POST['usuario_estado'];


        try {
            $consulta = "UPDATE t_usuario set  usuario_nombre='$usuario_nombre', usuario_apellido='$usuario_apellido', usuario_direccion='$usuario_direccion', 
                                            usuario_telefono='$telefono', usuario_contraseña='$password', usuario_cargo='$usuario_cargo', usuario_estado='$usuario_estado' 
                                            WHERE id_usuario='$id_usuario' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();     
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                //echo"<script>window.open('cliente.php')</script>";
                Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/usuario.php");
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