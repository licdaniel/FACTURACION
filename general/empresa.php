
<?php 
require('menu.php') 
?>
            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Empresa: <?php echo $empresa; ?></h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList btnTamaño">
                        <h2>Datos De La Empresa</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes empresa">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Empresa:</h2>
                        <div class="LinTil"></div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Empresa</td>
                            <td class="dat-til">N. Empresa</td>
                            <td class="dat-til">Direccion</td>
                            <td class="dat-til">RNC</td>

                            <td class="dat-til">Telefono</td>
                            <td class="dat-til">Ciudad</td>
                            <td class="dat-til">Correo</td>
                            <td class="dat-til">Impuesto</td>
                            <td class="dat-til">Ley</td>
                            <td class="dat-til"><span class="estado">Editar</span></td>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($datosEmpresa as $row) {
                                    $empresa_nombre      = $row['f_empresa'];
                                    $empresa_nombrecia   = $row['f_nombrecia'];
                                    $empresa_direccion   = $row['f_direccion'];
                                    $empresa_rnc         = $row['f_rnc'];
                                    $empresa_telefono    = $row['f_telefono'];
                                    
                                    $empresa_ciudad      = $row['f_ciudad'];
                                    $empresa_correo      = $row['f_email'];
                                    $empresa_itbis       = $row['f_itbis'];
                                    $empresa_ley       = $row['f_ley'];
                            ?>
                                <tr>
                                    <td><?php echo $empresa_nombre;?></td>
                                    <td><?php echo $empresa_nombrecia;?></td>
                                    <td><?php echo $empresa_direccion;?></td>
                                    <td><?php echo $empresa_rnc;?></td>
                                    <td><?php echo $empresa_telefono;?></td>
                                    <td><?php echo $empresa_ciudad;?></td>
                                    <td><?php echo $empresa_correo;?></td>
                                    <td><?php echo $empresa_itbis;?></td>
                                    <td><?php echo $empresa_ley;?></td>
                                    <td><div>
                                            <a class="estado editar" id="btnEditar"> Editar</a>
                                        </div>
                                    </td>
                                    
                                </tr>
                                    
                                <?php
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
                            <h2>Empresa</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">

                            <!----------------------GRUPO EMPRESA----------->
                            <div class="grupo-formulario" id="grupo_empresa">        
                                <span>Empresa:</span>
                                <input type="text" class="formulario__input" id="empresa_nombre" name="empresa_nombre" placeholder="Empresa">
                            </div>

                            <!----------------------GRUPO NOMBRECIA----------->
                            <div class="grupo-formulario" id="grupo_apellido">        
                                <span>Nombrecia:</span>
                                <input type="text" class="formulario__input" id="nombrecia" name="nombrecia" placeholder="Nombrecias">
                            </div>


                            <!----------------------GRUPO RNC----------->
                            <div class="grupo-formulario" id="grupo_cedula">        
                                <span>RNC:</span>
                                <input type="text" class="formulario__input" id="empresa_rnc" name="empresa_rnc" placeholder="Cedula">
                            </div>
                            
                            <!----------------------GRUPO TELEFONO----------->
                            <div class="grupo-formulario" id="grupo_telefono">        
                                <span>Telefono:</span>
                                <input type="text" class="formulario__input" id="empresa_telefono" name="empresa_telefono" placeholder="809-000-0000">
                            </div>

                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="empresa_direccion" name="empresa_direccion" placeholder="Dirección">
                            </div>

                            <!----------------------GRUPO CIUDAD----------->
                            <div class="grupo-formulario" id="grupo_ciudad">        
                                <span>Ciudad:</span>
                                <input type="text" class="formulario__input" id="empresa_ciudad" name="empresa_ciudad" placeholder="Ciudad">
                            </div>

                            <!----------------------GRUPO CORREO----------->
                            <div class="grupo-formulario" id="grupo_email">        
                                <span>Correo:</span>
                                <input type="email" class="formulario__input" id="empresa_correo" name="empresa_correo" placeholder="ejemplo@ejemplo.com">
                            </div>



                            <!----------------------GRUPO IMPUESTO----------->
                            <div class="grupo-formulario" id="grupo_impuesto">        
                                <span>Impuesto:</span>
                                <input type="number" class="formulario__input" id="empresa_impuesto" name="empresa_impuesto" placeholder="Impuesto">
                            </div>

                            <!----------------------GRUPO LEY----------->
                            <div class="grupo-formulario" id="grupo_ley">        
                                <span>Ley:</span>
                                <input type="number" class="formulario__input" id="empresa_ley" name="empresa_ley" placeholder="Ley">
                            </div>

                        <div class="MensajeBoton">
                            <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-empresa" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-empresa" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            
    </div>
    <script src="registros/modalEmpresa.js"></script>
</body>
</html>
