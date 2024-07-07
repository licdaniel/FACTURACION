<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Empleados</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList">
                        <h2>Empleados de DARR</h2>
                        <div class="btnTabla">
                            <a href="#" class="btn verdes empleado">Registrar</a>
                        </div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">ID</td>
                            <td class="dat-til">ID Dep</td>
                            <td class="dat-til">Nombre</td>
                            <td class="dat-til">Apellido</td>
                            <td class="dat-til">Sexo</td>
                            <td class="dat-til">Edad</td>
                            <td class="dat-til">Cel</td>
                            <td class="dat-til">Dirección</td>
                            <td class="dat-til">Correo</td>
                            <td class="dat-til">Identidad</td>
                            <td class="dat-til">Fecha Entrada</td>
                            <td class="dat-til">Fecha Salida</td>
                            <td class="dat-til">Salario</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        <tbody>
                        <?php 
                                        $consulta = $conexion->prepare("SELECT * FROM empleado ORDER BY id_empleado Desc");
                                        $consulta ->execute();
                                        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($datos as $dato) {
                                            $id_empleado          = $dato['id_empleado'];
                                            $id_departamento      = $dato['id_departamento'];
                                            $empleado_nombre      = $dato['empleado_nombre'];
                                            $empleado_apellido    = $dato['empleado_apellido'];
                                            $empleado_sexo        = $dato['empleado_sexo'];
                                            $empleado_edad        = $dato['empleado_edad'];
                                            $empleado_telefono    = $dato['empleado_telefono'];
                                            $empleado_direccion   = $dato['empleado_direccion'];
                                            $empleado_correo      = $dato['empleado_correo'];
                                            $empleado_identidad   = $dato['empleado_identidad'];
                                            $empleado_fechaingreso= $dato['empleado_fechaingreso'];
                                            $empleado_fechasalida = $dato['empleado_fechasalida'];
                                            $empleado_salario     = $dato['empleado_salario'];
                                            $empleado_estado      = $dato['empleado_estado'];
                                ?>
                                                <tr>
                                                    <td><?php echo $id_empleado;?></td>
                                                    <td><?php echo $id_departamento;?></td>
                                                    <td><?php echo $empleado_nombre;?></td>
                                                    <td><?php echo $empleado_apellido;?></td>
                                                    <td><?php echo $empleado_sexo;?></td>
                                                    <td><?php echo $empleado_edad;?></td>
                                                    <td><?php echo $empleado_telefono;?></td>
                                                    <td><?php echo $empleado_direccion;?></td>
                                                    <td><?php echo $empleado_correo;?></td>
                                                    <td><?php echo $empleado_identidad;?></td>
                                                    <td><?php echo $empleado_fechaingreso;?></td>
                                                    <td><?php echo $empleado_fechasalida;?></td>
                                                    <td><?php echo $empleado_salario;?></td>
                                                    <td><?php echo $empleado_estado;?></td>
                                                    <td><div>
                                                            <a class="estado editar" id="btnEditar"> Editar</a>
                                                        </div>
                                                    </td>
                                                    <td><a class="estado borrar" href="empleado/borrarEmpleado.php?borrarEmpleado=<?php echo $id_empleado ; ?>"> Borrar</a></td>
                                                </tr>
                                                    
                                <?php
                                                }
                                ?>
                                <?php 
                                    if (isset($_GET['borrarEmpleado'])) {
                                        include('empleado/borrarEmpleado.php');
                                    }
                            ?>
                        </tbody>
                    </Table>
                </div>
            </div>

            <!-----FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Registrar Empleado</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="#" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO ID----------->
                            <div class="grupo-formulario" id="grupo_ID">        
                                <span>Id Departamento:</span>
                                <input type="number" class="formulario__empleado" id="idempleado" name="idempleado" placeholder="Id Empleado">
                                <input type="number" class="formulario__input" id="id" name="id" placeholder="Id Departamento">
                            </div>
                            
                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Empleado:</span>
                                <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Nombre Empleado">
                            </div>
                            <!----------------------GRUPO APELLIDO----------->
                            <div class="grupo-formulario" id="grupo_apellido">        
                                <span>Apellido Empleado:</span>
                                <input type="text" class="formulario__input" id="apellido" name="apellido" placeholder="Apellido Empleado">
                            </div>
                            <div class="grupo-combobox" id="grupo_sexo">
                                <span>Sexo</span>
                                    <select class="" name="sexo" id="sexo">
                                        <option value=""></option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                            </div>
                            <!----------------------GRUPO EDAD----------->
                            <div class="grupo-formulario" id="grupo_Edad">        
                                <span>Edad:</span>
                                <input type="number" class="formulario__input" id="edad" name="edad" placeholder="Edad">
                            </div>
                            
                            <!----------------------GRUPO TELEFONO----------->
                            <div class="grupo-formulario" id="grupo_telefono">        
                                <span>Telefono:</span>
                                <input type="text" class="formulario__input" id="telefono" name="telefono" placeholder="809-000-0000">
                            </div>

                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="direccion" name="direccion" placeholder="Dirección">
                            </div>
                            <!----------------------GRUPO CORREO----------->
                            <div class="grupo-formulario" id="grupo_email">        
                                <span>Correo:</span>
                                <input type="email" class="formulario__input" id="email" name="email" placeholder="Correo">
                            </div>
                            <!----------------------GRUPO IDENTIDAD----------->
                            <div class="grupo-formulario" id="grupo_identidad">        
                                <span>Identidad Empleado:</span>
                                <input type="text" class="formulario__input" id="identidad" name="identidad" placeholder="Identidad Empleado">
                            </div>
                            <!----------------------GRUPO SALARIO----------->
                            <div class="grupo-formulario" id="grupo_salario">        
                                <span>Salario Del Empleado:</span>
                                <input type="number" class="formulario__input" id="salario" name="salario" placeholder="Salario Del Empleado">
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="estado" id="estado">
                                        <option value=""></option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                            </div>

                        <div class="MensajeBoton">
                        </div>
                        <div class="MensajeBoton">
                            <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse" >Enviar</button>
                            </div>
                            <!----------------------BOTON MODIFICAR----------->
                            <div class="grupo-formulario boton">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar" >Modificar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <script src="empleado/modalEmpleado.js"></script>
</body>
</html>

<?php     
    if(isset($_POST['registrarse'])){
        $id       =$_POST['id'];
        $nombre   =$_POST['nombre'];
        $apellido =$_POST['apellido'];
        $sexo     =$_POST['sexo'];
        $edad     =$_POST['edad'];
        $telefono =$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $email    =$_POST['email'];
        $identidad=$_POST['identidad'];
        $salario  =$_POST['salario'];
        $estado   =$_POST['estado'];

        try {
            if ($id == "" || $nombre =="" || $apellido == "" || $sexo == "" || $edad =="" || $telefono =="" || $direccion == "" || $email =="" || $identidad == "" || $salario =="" || $estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";

                    $insertmunicipio = $conexion->prepare("SP_AñadirEmpleado '$id','$nombre','$apellido','$sexo','$edad','$telefono','$direccion','$email','$identidad','$salario','$estado'");
                    $insertmunicipio ->execute();

                    if(!$insertmunicipio){
                    echo"Error En la linea de sql";
                    }
                    else {
                        echo"<script>window.open('empleados.php')</script>";
                        Header("Location: empleados.php");
                    }
                }
        } catch (PDOException $e) {
            echo "Error".$e;
        }
    }
?>

<!--------------------------------------------------------MODIFICAR------------------>
<?php 
        if (isset($_POST['modificar'])) {
            $id_empleado                =$_POST['idempleado'];
            $empleado_nombre            =$_POST['nombre'];
            $empleado_apellido          =$_POST['apellido'];
            $empleado_sexo              =$_POST['sexo'];
            $empleado_edad              =$_POST['edad'];
            $empleado_telefono          =$_POST['telefono'];
            $empleado_direccion         =$_POST['direccion'];
            $empleado_correo            =$_POST['email'];
            $empleado_identidad         =$_POST['identidad'];
            $empleado_salario           =$_POST['salario'];
            $empleado_estado            =$_POST['estado'];

            $consulta = "UPDATE empleado SET empleado_nombre='$empleado_nombre', empleado_apellido='$empleado_apellido', empleado_sexo='$empleado_sexo', 
                                            empleado_edad='$empleado_edad', empleado_telefono='$empleado_telefono', empleado_direccion='$empleado_direccion', empleado_correo='$empleado_correo',
                                            empleado_identidad='$empleado_identidad', empleado_salario='$empleado_salario',empleado_estado='$empleado_estado' WHERE id_empleado='$id_empleado' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();     
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                //echo"<script>window.refresh('empleado.php')</script>";
                Header("Location: empleado.php");
                Header ("refresh:2; url=http://localhost/pagina/telefono/empleado.php");
                echo"<script>Swal.fire({
                    type:'warning',
                    title:'Registro Actualizado.!',
                });</script>";
        }
    }
?>