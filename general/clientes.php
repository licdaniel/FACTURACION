
<?php 
require('menu.php') 
?>
            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Clientes</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList btnTamaño">
                        <h2>Registros de Clientes</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes cliente">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Clientes</h2>
                        <div class="LinTil"></div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">ID</td>
                            <td class="dat-til">Nombre</td>
                            <td class="dat-til">Apellido</td>
                            <td class="dat-til">Sexo</td>
                            <td class="dat-til">Edad</td>
                            <td class="dat-til">Cedula</td>
                            <td class="dat-til">Telefono</td>
                            <td class="dat-til">Celular</td>
                            <td class="dat-til">Dirección</td>
                            <td class="dat-til">Correo</td>
                            
                            <td class="dat-til">Fec Nacimiento</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($datosClientes as $dato) {
                                    $id_cliente          = $dato['f_id'];
                                    $cliente_nombre      = $dato['f_nombre'];
                                    $cliente_apellido    = $dato['f_apellido'];
                                    $cliente_sexo        = $dato['f_sexo'];
                                    $cliente_edad        = $dato['f_edad'];
                                    $cliente_cedula      = $dato['f_rif'];
                                    $cliente_telefono    = $dato['f_telefono'];
                                    $cliente_celular    = $dato['f_celular'];
                                    $cliente_direccion   = $dato['f_direccion'];
                                    $cliente_correo      = $dato['f_email'];
                                    
                                    $cliente_fechanacimiento= $dato['f_fecha_nacimiento'];
                                    $cliente_estado      = $dato['f_estado_cliente'];
                            ?>
                                <tr>
                                    <td><?php echo $id_cliente;?></td>
                                    <td><?php echo $cliente_nombre;?></td>
                                    <td><?php echo $cliente_apellido;?></td>
                                    <td><?php echo $cliente_sexo;?></td>
                                    <td><?php echo $cliente_edad;?></td>
                                    <td><?php echo $cliente_cedula;?></td>
                                    <td><?php echo $cliente_telefono;?></td>
                                    <td><?php echo $cliente_celular;?></td>
                                    <td><?php echo $cliente_direccion;?></td>
                                    <td><?php echo $cliente_correo;?></td>
                                    
                                    <td><?php echo $cliente_fechanacimiento;?></td>
                                    <td><?php echo $cliente_estado;?></td>
                                    <td><div>
                                            <a class="estado editar" id="btnEditar"> Editar</a>
                                        </div>
                                    </td>
                                    <td><a class="estado borrar" href="cliente/borrarCliente.php?borrarCliente=<?php echo $id_cliente;?>"> Borrar</a></td>
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
                <!--Lista de client's
                <div class="clientesRt">
                    <div class="CabeList">
                        <h2>Clientes Recientes</h2>
                    </div> 

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br><span>Baez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img2.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Pedro <br><span>Baez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img3.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Marco <br><span>Torres</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img4.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Maria <br><span>Baez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img5.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Josefina <br><span>Lopez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img6.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br><span>Martinez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img7.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Rosa <br><span>Lopez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img7.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Karen <br><span>Torrez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img8.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Josefina <br><span>Lopez</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>-->
            </div>

            <!-----FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Crear Clientes</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-3" name="formulario-contenido" id="formulario" method="POST">

                            <!----------------------GRUPO CODIGO----------->
                            <div class="grupo-formulario" id="grupo_codigo">        
                                <span>Codigo:</span>
                                <input type="number" class="formulario__input" id="id_cliente" name="id_cliente" placeholder="Codigo Clientes" readonly>
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Complento:</span>
                                <input type="text" class="formulario__input" id="cliente_nombre" name="cliente_nombre" placeholder="Nombre">
                                <p>Digite el nombre.</p>
                            </div>
                            <!----------------------GRUPO APELLIDO----------->
                            <div class="grupo-formulario" id="grupo_apellido">        
                                <span>Apellido Complento:</span>
                                <input type="text" class="formulario__input" id="cliente_apellido" name="cliente_apellido" placeholder="Apellido">
                                <p>Digite el nombre del apellido.</p>
                            </div>

                            <div class="grupo-formulario" id="grupo_fecha-nacimiento">        
                                <span>Fecha Nacimiento:</span>
                                <input type="date" class="formulario__input" id="cliente_fechanacimiento" name="cliente_fechanacimiento" placeholder="Fecha Del Cliente">
                            </div>

                            <div class="grupo-combobox" id="grupo_sexo">
                                <span>Sexo</span>
                                    <select class="" name="cliente_sexo" id="cliente_sexo">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                            </div>
                            <!----------------------GRUPO EDAD----------->
                            <div class="grupo-formulario" id="grupo_Edad">        
                                <span>Edad:</span>
                                <input type="number" min="18" class="formulario__input" id="cliente_edad" name="cliente_edad" placeholder="Edad">
                                <p>Digite la edad.</p>
                            </div>

                            <!----------------------GRUPO CEDULA----------->
                            <div class="grupo-formulario " id="grupo_cedula">        
                                <span>Cedula & NSS:</span>
                                <div class="column col-2">
                                    <input type="text" class="formulario__input" id="cliente_cedula" name="cliente_cedula" placeholder="Cedula">
                                    <input type="text" class="formulario__input" id="cliente_NSS" name="cliente_NSS" placeholder="NSS">
                                </div>
                                
                                <p>Digite la cedula Y NSS.</p>
                            </div>
                            
                            <!----------------------GRUPO TELEFONO----------->
                            <div class="grupo-formulario" id="grupo_telefono">        
                                <span>Telefono:</span>
                                <input type="text" class="formulario__input" id="cliente_telefono" name="cliente_telefono" placeholder="809-000-0000">
                            </div>

                            <!----------------------GRUPO CELULAR----------->
                            <div class="grupo-formulario" id="grupo_celular">        
                                <span>Celular:</span>
                                <input type="text" class="formulario__input" id="cliente_celular" name="cliente_celular" placeholder="829-000-0000">
                            </div>


                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="cliente_direccion" name="cliente_direccion" placeholder="Dirección">
                                <p>Digite la dirección.</p>
                            </div>
                            <!----------------------GRUPO CORREO----------->
                            <div class="grupo-formulario" id="grupo_email">        
                                <span>Correo:</span>
                                <input type="email" class="formulario__input" id="cliente_correo" name="cliente_correo" placeholder="ejemplo@ejemplo.com">
                                <p>Digite el correo.</p>
                            </div>

                            <div class="grupo-combobox" id="grupo_pais">
                                <span>Pais</span>
                                <select class="" name="id_pais" id="id_pais">
                                    <?php foreach ($datosPais as $pais) {
                                        $c_pais  = $pais['f_id'];
                                        $n_pais  = $pais['f_descripcion'];
                                    ?>
                                        <option value="<?php echo $c_pais;?>"><?php echo $n_pais;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="grupo-combobox" id="grupo_tipo">
                                <span>Tipo CLiente</span>
                                <select class="" name="id_tipo" id="id_tipo">
                                    <?php foreach ($datosTipoCliente as $tipo) {
                                        $c_tipo  = $tipo['f_id'];
                                        $n_tipo  = $tipo['f_descripcion'];
                                    ?>
                                        <option value="<?php echo $c_tipo;?>"><?php echo $n_tipo;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="grupo-formulario" id="grupo_provincia">        
                                <span>Provincia Del Cliente:</span>
                                <input type="text" class="formulario__input" id="cliente_provincia" name="cliente_provincia" placeholder="Provincia Del Cliente">
                                
                            </div>

                            <div class="grupo-formulario" id="grupo_municipio">        
                                <span>Municipio Del Cliente:</span>
                                <input type="text" class="formulario__input" id="cliente_municipio" name="cliente_municipio" placeholder="Municipio Del Cliente">
                                
                            </div>

                            <div class="grupo-formulario" id="grupo_barrio">        
                                <span>Barrio Del Cliente:</span>
                                <input type="text" class="formulario__input" id="cliente_barrio" name="cliente_barrio" placeholder="Barrio Del Cliente">
                                
                            </div>

                            <div class="grupo-formulario" id="grupo_limite">        
                                <span>Limite De Credito Del Cliente:</span>
                                <input type="number" class="formulario__input" id="cliente_credito"  name="cliente_credito" placeholder="Limite De Credito Del Cliente">
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="cliente_estado" id="cliente_estado">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                            </div>

                        <div class="MensajeBoton">
                            <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-clientes" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-clientes" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            
    </div>
    <script src="registros/modalClientesProveedor.js"></script>
</body>
</html>
