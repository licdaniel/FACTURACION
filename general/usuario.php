
<?php 
require('menu.php'); 

if (isset($_SESSION['usuario_registros']) && $_SESSION['s_cargo'] == "ADMIN"){

    if(isset($_POST['usuario_almacen'])){
        $NN=$_POST['usuario_almacen'];
        echo $NN;
    }

?>
            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Registros De Usuarios</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos ">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="lista-componente">
                        <h2>Consulta De Usuario</h2>
                        
                        <div class="search">
                            <label for="">
                                <input type="text" placeholder="Buscar">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </div>

                            <div class="div-btn">
                                <div class="btnTabla">
                                    <a href="#" class="btn verdes usuario">Registrar</a>
                                </div>
                                <div class="btnTabla">
                                    <a href="#" class="btn azul">Activar</a>
                                </div>
                            </div>

                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Codigo</td>
                            <td class="dat-til">Nombre</td>
                            <td class="dat-til">Apellido</td>
                            <td class="dat-til">Direccion</td>
                            <td class="dat-til">Usuario</td>
                            <td class="dat-til">Cargo</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                            <?php 
                                $consulta = $conexion->prepare("SELECT * FROM t_usuario  ORDER BY id_usuario");
                                $consulta ->execute();
                                $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($datos as $dato) {
                                    $id_usuario          = $dato['id_usuario'];
                                    $usuario_nombre      = $dato['usuario_nombre'];
                                    $usuario_apellido    = $dato['usuario_apellido'];
                                    $usuario_direccion   = $dato['usuario_direccion'];
                                    $usuario             = $dato['usuario'];
                                    $usuario_cargo       = $dato['usuario_cargo'];
                                    $usuario_estado      = $dato['usuario_estado'];
                            ?>
                                <tr>
                                    <td><?php echo $id_usuario;?></td>
                                    <td><?php echo $usuario_nombre;?></td>
                                    <td><?php echo $usuario_apellido;?></td>
                                    <td><?php echo $usuario_direccion;?></td>
                                    <td><?php echo $usuario;?></td>
                                    <td><?php echo $usuario_cargo;?></td>
                                    <td><?php echo $usuario_estado;?></td>
                                    <td><div>
                                            <a class="estado editar modificar" id="btnEditar"> Editar</a>
                                        </div>
                                    </td>
                                    <td><a class="estado borrar" href="usuario/borrarUsuario.php?borrarUsuario=<?php echo $id_usuario;?>"> Borrar</a></td>
                                </tr>
                                    
                                <?php
                                                }
                                ?>
                                <?php 
                                    if (isset($_GET['borrarUsuario'])) {
                                        include('usuario/borrarUsuario.php');
                                    }
                            ?>
                        </tbody>
                    </Table>
                </div>
                
                <div class="clientesRt">
                    <div class="CabeList">
                        <h2>Usuarios Recientes</h2>
                    </div> 

                    <table> <!--SICLOS DE NUEVO  USUARIOS--->
                    <?php 
                    foreach ($datos as $dato) {
                        $usuario_nombre      = $dato['usuario_nombre'];
                        $usuario             = $dato['usuario'];
                        ?>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/img1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Nombre: 
                                    <?php echo $usuario_nombre;?>
                                    <br><span><?php echo $usuario;?></span>
                                </h4>
                            </td>
                        </tr>
                        <?php } ?>
                        
                    </table>
                </div>
            </div>

            <!-----FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Crear Usuario</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="usuario/addUsuario.php" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">
                            
                            <!----------------------GRUPO Codigo----------->
                            <div class="grupo-formulario" id="grupo_Codigo">        
                                <span>Codigo:</span>
                                <input type="number" class="formulario__input" id="codigo" name="codigo" placeholder="Codigo" readonly>
                            
                            </div>
                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Usuario:</span>
                                <input type="text" class="formulario__input" id="usuario_nombre" name="usuario_nombre" placeholder="Nombre Usuario">
                                <p>Digite el nombre del cliente.</p>
                            </div>
                            <!----------------------GRUPO APELLIDO----------->
                            <div class="grupo-formulario" id="grupo_apellido">        
                                <span>Apellido Usuario:</span>
                                <input type="text" class="formulario__input" id="usuario_apellido" name="usuario_apellido" placeholder="Apellido Usuario">
                                <p>Digite el nombre del apellido.</p>
                            </div>
                            <div class="grupo-formulario" id="grupo_nombre">
                                <span>Usuario:</span>
                                <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuarios">
                                <p  class="formulario__input-error"> El nombre no debe tener numeros ni digitos. </p>
                            </div>

                            <div class="grupo-formulario" id="grupo_contraseña">
                                <span>Contraseña:</span>
                                <input type="password" class="formulario__input" name="password1" id="password1" placeholder="Contraseña1">
                                <p  > La constraseña tiene que ser de 4 a 12 dígitos. </p>
                            </div>

                            <div class="grupo-formulario" id="grupo_contraseña">
                                <span>Contraseña:</span>
                                <input type="password" class="formulario__input" name="password2" id="password2" placeholder="Contraseña2">
                                <p  > La constraseña tiene que concedir con la primera. </p>
                            </div>
                            
                            <!----------------------GRUPO TELEFONO----------->
                            <div class="grupo-formulario" id="grupo_telefono">        
                                <span>Telefono:</span>
                                <input type="text" class="formulario__input" id="usuario_telefono" name="usuario_telefono" placeholder="809-000-0000">
                            </div>

                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="usuario_direccion" name="usuario_direccion" placeholder="Dirección">
                                <p>Digite la dirección.</p>
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Cargo</span>
                                    <select class="" name="usuario_cargo" id="usuario_cargo">
                                        <option value="CAJERO">CAJERO</option>
                                        <option value="ALMACEN">ALMACEN</option>
                                        <option value="CONTABLE">CONTABLE</option>
                                        <option value="EJECUTIVO">EJECUTIVO</option>
                                        <option value="ADMIN">ADMIN</option>
                                    </select>
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Almacen</span>
                                    <select class="" name="id_almacen" id="id_almacen" >
                                        <?php foreach($datosAlmacen as $almacenDatos) { 
                                            $c_almacen = $almacenDatos['id_almacen'];
                                            $n_almacen = $almacenDatos['almacen_nombre'];
                                        ?>
                                            <option value="<?php echo $c_almacen;?>" name='almacen'><?php echo $n_almacen;?></option>
                                        <?php } ?> 
                                    </select>
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="usuario_estado" id="usuario_estado">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                            </div>
                            <!----------------------GRUPO ID Almacen----------->
                            <div class="grupo-formulario" id="grupo_almacen">        
                                
                            </div>

                        <div class="MensajeBoton">
                            <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div> 
            
    </div>
    
    <script src="usuario/modalUsuario.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
</body>
</html>

<?php  
}
?>
