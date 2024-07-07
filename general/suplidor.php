
<?php 
require('menu.php') 
?>
            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Proveedores/Suplidor</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList btnTamaño">
                        <h2>Registros de Proveedores/Suplidor</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes suplidor">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Proveedores/Suplidor</h2>
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
                            <td class="dat-til">Dirección</td>
                            <td class="dat-til">Correo</td>
                            
                            <td class="dat-til">Fec Nacimiento</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                            <?php 
                                $consulta = $conexion->prepare("SELECT * FROM t_suplidor ORDER BY id_suplidor Desc");
                                $consulta ->execute();
                                $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($datos as $dato) {
                                    $id_suplidor          = $dato['id_suplidor'];
                                    $suplidor_nombre      = $dato['suplidor_nombre'];
                                    $suplidor_apellido    = $dato['suplidor_apellido'];
                                    $suplidor_sexo        = $dato['suplidor_sexo'];
                                    $suplidor_edad        = $dato['suplidor_edad'];
                                    $suplidor_cedula      = $dato['suplidor_cedula'];
                                    $suplidor_telefono    = $dato['suplidor_telefono'];
                                    $suplidor_direccion   = $dato['suplidor_direccion'];
                                    $suplidor_correo      = $dato['suplidor_correo'];
                                    
                                    $suplidor_fechanacimiento= $dato['suplidor_fechanacimiento'];
                                    $suplidor_estado      = $dato['suplidor_estado'];
                            ?>
                                <tr>
                                    <td><?php echo $id_suplidor;?></td>
                                    <td><?php echo $suplidor_nombre;?></td>
                                    <td><?php echo $suplidor_apellido;?></td>
                                    <td><?php echo $suplidor_sexo;?></td>
                                    <td><?php echo $suplidor_edad;?></td>
                                    <td><?php echo $suplidor_cedula;?></td>
                                    <td><?php echo $suplidor_telefono;?></td>
                                    <td><?php echo $suplidor_direccion;?></td>
                                    <td><?php echo $suplidor_correo;?></td>
                                    
                                    <td><?php echo $suplidor_fechanacimiento;?></td>
                                    <td><?php echo $suplidor_estado;?></td>
                                    <td><div>
                                            <a class="estado editar" id="btnEditar"> Editar</a>
                                        </div>
                                    </td>
                                    <td><a class="estado borrar" href="suplidor/borrarSuplidor.php?borrarSuplidor=<?php echo $id_suplidor;?>"> Borrar</a></td>
                                </tr>
                                    
                                <?php
                                                }
                                ?>
                                <?php 
                                    if (isset($_GET['borrarSuplidor'])) {
                                        include('suplidor/borrarSuplidor.php');
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
                            <h2>Crear Suplidor</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="suplidor/addSuplidor.php" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">

                            <!----------------------GRUPO CODIGO----------->
                            <div class="grupo-formulario" id="grupo_codigo">        
                                <span>Codigo Suplidor:</span>
                                <input type="number" class="formulario__input" id="id_suplidor" name="id_suplidor" placeholder="Codigo Suplidor" readonly>
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Suplidor:</span>
                                <input type="text" class="formulario__input" id="suplidor_nombre" name="suplidor_nombre" placeholder="Nombre Suplidor">
                                <p>Digite el nombre del suplidor.</p>
                            </div>
                            <!----------------------GRUPO APELLIDO----------->
                            <div class="grupo-formulario" id="grupo_apellido">        
                                <span>Apellido Suplidor:</span>
                                <input type="text" class="formulario__input" id="suplidor_apellido" name="suplidor_apellido" placeholder="Apellido Suplidor">
                                <p>Digite el nombre del apellido.</p>
                            </div>

                            <div class="grupo-formulario" id="grupo_fecha-nacimiento">        
                                <span>Fecha Nacimiento Suplidor:</span>
                                <input type="date" class="formulario__input" id="suplidor_fechanacimiento" name="suplidor_fechanacimiento" placeholder="Fecha Del Suplidor">
                            </div>

                            <div class="grupo-combobox" id="grupo_sexo">
                                <span>Sexo</span>
                                    <select class="" name="suplidor_sexo" id="suplidor_sexo">
                                        <option value=""></option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                            </div>
                            <!----------------------GRUPO EDAD----------->
                            <div class="grupo-formulario" id="grupo_Edad">        
                                <span>Edad:</span>
                                <input type="number" min="18" class="formulario__input" id="suplidor_edad" name="suplidor_edad" placeholder="Edad">
                                <p>Digite la edad del suplidor.</p>
                            </div>

                            <!----------------------GRUPO CEDULA----------->
                            <div class="grupo-formulario" id="grupo_cedula">        
                                <span>Cedula:</span>
                                <input type="text" class="formulario__input" id="suplidor_cedula" name="suplidor_cedula" placeholder="Cedula">
                                <p>Digite la cedula del suplidor.</p>
                            </div>
                            
                            <!----------------------GRUPO TELEFONO----------->
                            <div class="grupo-formulario" id="grupo_telefono">        
                                <span>Telefono:</span>
                                <input type="text" class="formulario__input" id="suplidor_telefono" name="suplidor_telefono" placeholder="809-000-0000">
                            </div>

                            <!----------------------GRUPO CELULAR----------->
                            <div class="grupo-formulario" id="grupo_celular">        
                                <span>Celular:</span>
                                <input type="text" class="formulario__input" id="suplidor_celular" name="suplidor_celular" placeholder="829-000-0000">
                            </div>

                            <!----------------------GRUPO IDENTIDAD----------->
                            <div class="grupo-formulario" id="grupo_identidad">        
                                <span>Identidad Del Suplidor:</span>
                                <input type="text" class="formulario__input" id="suplidor_identidad" name="suplidor_identidad" placeholder="Identidad Del Suplidor">
                            
                            </div>

                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección Del Suplidor:</span>
                                <input type="text" class="formulario__input" id="suplidor_direccion" name="suplidor_direccion" placeholder="Dirección">
                                <p>Digite la dirección del suplidor.</p>
                            </div>
                            <!----------------------GRUPO CORREO----------->
                            <div class="grupo-formulario" id="grupo_email">        
                                <span>Correo Del Suplidor:</span>
                                <input type="email" class="formulario__input" id="suplidor_correo" name="suplidor_correo" placeholder="ejemplo@ejemplo.com">
                                <p>Digite el correo del suplidor.</p>
                            </div>

                            <div class="grupo-combobox" id="grupo_pais">
                                <span>Pais</span>
                                <select class="" name="id_pais" id="id_pais">
                                    <?php foreach ($datosPais as $pais) {
                                        $c_pais  = $pais['id_pais'];
                                        $n_pais  = $pais['pais_nombre'];
                                    ?>
                                        <option value="<?php echo $c_pais;?>"><?php echo $n_pais;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="grupo-formulario" id="grupo_provincia">        
                                <span>Provincia Del Suplidor:</span>
                                <input type="text" class="formulario__input" id="suplidor_provincia" name="suplidor_provincia" placeholder="Provincia Del Suplidor">
                                
                            </div>

                            <div class="grupo-formulario" id="grupo_municipio">        
                                <span>Municipio Del Suplidor:</span>
                                <input type="text" class="formulario__input" id="suplidor_municipio" name="suplidor_municipio" placeholder="Municipio Del Suplidor">
                                
                            </div>

                            <div class="grupo-formulario" id="grupo_barrio">        
                                <span>Barrio Del Suplidor:</span>
                                <input type="text" class="formulario__input" id="suplidor_barrio" name="suplidor_barrio" placeholder="Barrio Del Suplidor">
                                
                            </div>

                            <div class="grupo-formulario" id="grupo_limite">        
                                <span>Cuenta Suplidor:</span>
                                <input type="number" class="formulario__input" id="suplidor_cuenta" name="suplidor_cuenta" placeholder="Cuenta Suplidor">
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="suplidor_estado" id="suplidor_estado">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
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
    <script src="suplidor/modalSuplidor.js"></script>
</body>
</html>


