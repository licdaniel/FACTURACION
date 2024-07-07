<?php require('../menu/menu.php'); ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Sectores</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <!--------TABLA--->
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList">
                        <h2>Sectores de ventas</h2>
                        <div class="btnTabla">
                            <a href="#" class="btn verdes sector">Registrar</a>
                        </div>
                    </div>
                    <Table id="tablaPersonas"><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">ID Sector</td>
                            <td class="dat-til">ID Municipio</td>
                            <td class="dat-til">Nombre Sector</td>
                            <td class="dat-til">Dirección</td>
                            <td class="dat-til">Telefono</td>
                            <td class="dat-til">Director</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                                <?php 
                                        $consulta = $conexion->prepare("SELECT * FROM sector ORDER BY id_sector DESC");
                                        $consulta ->execute();
                                        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($datos as $dato) {
                                            $id_sector        = $dato['id_sector'];
                                            $id_municipio     = $dato['id_municipio'];
                                            $sector_nombre    = $dato['sector_nombre'];
                                            $sector_direccion = $dato['sector_direccion'];
                                            $sector_telefono  = $dato['sector_telefono'];
                                            $sector_director  = $dato['sector_director'];
                                            $sector_estado    = $dato['sector_estado'];
                                ?>
                                                <tr>
                                                    <td><?php echo $id_sector;?></td>
                                                    <td><?php echo $id_municipio;?></td>
                                                    <td><?php echo $sector_nombre;?></td>
                                                    <td><?php echo $sector_direccion;?></td>
                                                    <td><?php echo $sector_telefono;?></td>
                                                    <td><?php echo $sector_director;?></td>
                                                    <td><?php echo $sector_estado;?></td>
                                                    <td><div>
                                                            <a class="estado editar modificar" id="btnEditar"> Editar</a>
                                                            
                                                        </div>
                                                    </td>
                                                    <td><a class="estado borrar" href="sector/borrarSector.php?borrarSector=<?php echo $id_sector ; ?>"> Borrar</a></td>
                                                </tr>
                                            
                                <?php
                                                }
                                ?>
                            <?php 
                                    if (isset($_GET['borrarSector'])) {
                                        include('sector/borrarSector.php');
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
                            <h2>Registrar Sector</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="#" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO ID----------->
                            <div class="grupo-formulario" id="grupo_ID">        
                                <span>ID Municipio:</span>
                                <input type="number" class="formulario__input" id="id" name="id" placeholder="ID Municipio">
                                <p>Digite ID Municipio.</p>
                            </div>
                            
                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Sector:</span>
                                <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Sector">
                                <p>Digite el nombre del sector del municipio.</p>
                            </div>
                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="direccion" name="direccion" placeholder="Dirección Del Sector">
                                <p>Digite la dirección del sector del municipio.</p>
                            </div>
                            
                            <!----------------------GRUPO TELEFONO----------->
                            <div class="grupo-formulario" id="grupo_telefono">        
                                <span>Telefono:</span>
                                <input type="text" class="formulario__input" id="telefono" name="telefono" placeholder="Telefono Del Sector">
                                <p>Digite el telefono.</p>
                            </div>

                            <!----------------------GRUPO DIRECTOR----------->
                            <div class="grupo-formulario" id="grupo_director">        
                                <span>Director:</span>
                                <input type="text" class="formulario__input" id="director" name="director" placeholder="Director">
                                <p>Digite el nombre del director del sector.</p>
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
                            

                            <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse" >Enviar</button>
                                <p class = "formulario__mensaje-exito" id= "formulario__mensaje-exito"> Formulario enviado exitosamente! </p>
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

    <script src="sector/modalSector.js"></script>
    <script src="plugins/jquery-3.3.1.min.js"></script>
</body>
</html>

<?php 
        if (isset($_POST['modificar'])) {
            $id_municipio =$_POST['id'];
            $sector_nombre =$_POST['nombre'];
            $sector_direccion =$_POST['direccion'];
            $sector_telefono =$_POST['telefono'];
            $sector_director =$_POST['director'];
            $sector_estado =$_POST['estado'];

            $consulta = "UPDATE sector SET  sector_nombre='$sector_nombre', sector_direccion='$sector_direccion', sector_telefono='$sector_telefono', sector_director='$sector_director', sector_estado='$sector_estado' WHERE id_municipio='$id_municipio' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();     
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                echo"<script>alert('Datos actualizados')</script>";
                echo"<script>window.open('sector.php')</script>";
                Header("Location: sector.php");
            }

        }
?>

<?php     
    if(isset($_POST['registrarse'])){
        $id =$_POST['id'];
        $nombre =$_POST['nombre'];
        $direccion =$_POST['direccion'];
        $telefono =$_POST['telefono'];
        $director =$_POST['director'];
        $estado =$_POST['estado'];

        try {
            if ($id == "" || $nombre =="" || $direccion == "" || $telefono =="" || $director == "" || $estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {

                    $insertmunicipio = $conexion->prepare("INSERT INTO sector VALUES('$id','$nombre','$direccion','$telefono','$director','$estado')");
                    $insertmunicipio ->execute();

                    if(!$insertmunicipio){
                    echo"Error En la linea de sql";
                    }
                    else {
                        echo"<script>window.open('sector.php')</script>";
                        Header("Location: sector.php");
                    }
                }
        } catch (PDOException $e) {
            echo "Error".$e;
        }
    }
?>


