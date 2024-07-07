
<?php 
require('menu.php') 
?>
            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Promotor</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList btnTamaño">
                        <h2>Registros de Promotor</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes promotor">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Promotor</h2>
                        <div class="LinTil"></div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">ID</td>
                            <td class="dat-til">Nombre</td>
                            <td class="dat-til">Apellido</td>
                            <td class="dat-til">Cedula</td>
                            <td class="dat-til">Telefono</td>
                            <td class="dat-til">Celular</td>
                            <td class="dat-til">Dirección</td>
                            <td class="dat-til">Correo</td>
                            <td class="dat-til">Comision</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($datosVendedores as $dato) {
                                    $id_vendedor          = $dato['f_idvendedor'];
                                    $vendedor_nombre      = $dato['f_nombre'];
                                    $vendedor_apellido    = $dato['f_apellido'];
                                    $vendedor_cedula      = $dato['f_cedula'];
                                    $vendedor_telefono    = $dato['f_telefono1'];
                                    $vendedor_celular    = $dato['f_telefono2'];
                                    $vendedor_direccion   = $dato['f_direccion'];
                                    $vendedor_correo      = $dato['f_email'];
                                    $vendedor_comision      = $dato['f_comision_venta'];
                                    $vendedor_estado      = $dato['f_activo'];
                            ?>
                                <tr>
                                    <td><?php echo $id_vendedor;?></td>
                                    <td><?php echo $vendedor_nombre;?></td>
                                    <td><?php echo $vendedor_apellido;?></td>
                                    <td><?php echo $vendedor_cedula;?></td>
                                    <td><?php echo $vendedor_telefono;?></td>
                                    <td><?php echo $vendedor_celular;?></td>
                                    <td><?php echo $vendedor_direccion;?></td>
                                    <td><?php echo $vendedor_correo;?></td>
                                    
                                    <td><?php echo $vendedor_comision;?></td>
                                    <td><?php echo $vendedor_estado;?></td>
                                    <td><div>
                                            <a class="estado editar" id="btnEditar"> Editar</a>
                                        </div>
                                    </td>
                                    <td><a class="estado borrar" href="registros/borrarCliente.php?borrarCliente=<?php echo $id_vendedor;?>"> Borrar</a></td>
                                </tr>
                                    
                                <?php
                                                }
                                ?>
                                <?php 
                                    if (isset($_GET['borrarCliente'])) {
                                        include('cliente/borrarCliente.php');
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
                            <h2>Crear Promotor</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-3" name="formulario-contenido" id="formulario" method="POST">

                            <!----------------------GRUPO CODIGO----------->
                            <div class="grupo-formulario" id="grupo_codigo">        
                                <span>Codigo:</span>
                                <input type="number" class="formulario__input" id="id_vendedor" name="id_vendedor" placeholder="Codigo vendedor" readonly>
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Complento:</span>
                                <input type="text" class="formulario__input" id="vendedor_nombre" name="vendedor_nombre" placeholder="Nombre">
                                <p>Digite el nombre.</p>
                            </div>
                            <!----------------------GRUPO APELLIDO----------->
                            <div class="grupo-formulario" id="grupo_apellido">        
                                <span>Apellido Complento:</span>
                                <input type="text" class="formulario__input" id="vendedor_apellido" name="vendedor_apellido" placeholder="Apellido">
                                <p>Digite el nombre del apellido.</p>
                            </div>

                            <!----------------------GRUPO CEDULA----------->
                            <div class="grupo-formulario" id="grupo_cedula">        
                                <span>Cedula:</span>
                                <input type="text" class="formulario__input" id="vendedor_cedula" name="vendedor_cedula" placeholder="Cedula">
                                <p>Digite la cedula.</p>
                            </div>

                            <!----------------------GRUPO PRECIO 1----------->
                            <div class="grupo-formulario " id="grupo_precio">        
                            <span>Telefono:</span>
                                <div class="column col-2">
                                    <input type="text" class="formulario__input" id="vendedor_telefono" name="vendedor_telefono" placeholder="809-000-0000">
                                    <input type="text" class="formulario__input" id="vendedor_celular" name="vendedor_celular" placeholder="829-000-0000">
                                </div>
                                
                                <p>Digite al menos un numero telefonico.</p>
                            </div>
                            

                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="vendedor_direccion" name="vendedor_direccion" placeholder="Dirección">
                                <p>Digite la dirección.</p>
                            </div>
                            <!----------------------GRUPO CORREO----------->
                            <div class="grupo-formulario" id="grupo_email">        
                                <span>Correo:</span>
                                <input type="email" class="formulario__input" id="vendedor_correo" name="vendedor_correo" placeholder="ejemplo@ejemplo.com">
                                <p>Digite el correo.</p>
                            </div>

                            <!----------------------GRUPO COMISION----------->
                            <div class="grupo-formulario" id="grupo_codigo">        
                                <span>Comision:</span>
                                <input type="number" class="formulario__input" id="vendedor_comision" name="vendedor_comision" value="0" >
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="vendedor_estado" id="vendedor_estado">
                                        <option value="TRUE">Activo</option>
                                        <option value="FALSE">Inactivo</option>
                                    </select>
                            </div>

                        <div class="MensajeBoton">
                            <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-vendedor" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-vendedor" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            
    </div>
    <script src="registros/modalVendedor.js"></script>
</body>
</html>
