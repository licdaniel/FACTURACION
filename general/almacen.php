<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Almacen</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">

                    <div class="CabeList btnTamaño">
                        <h2>Registros de Almacen</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes almacen">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Almacen</h2>
                        <div class="LinTil"></div>
                    </div>

                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Codigo</td>
                            <td class="dat-til">Descripción</td>
                            <td class="dat-til">Visible</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado  modificar">Editar</span></td>
                        </thead>
                        <tbody>
                        <?php 
                                foreach ($datosAlmacen as $dato) {
                                ?>
                                    <tr>
                                        <td><?php echo $dato['f_iddepto']?></td>
                                        <td><?php echo $dato['f_descripcion']?></td>
                                        <td><?php echo $dato['f_visible']?></td>
                                        <td><?php echo $dato['f_disponible_venta']?></td>
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
                            <h2>Registrar Almacen</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-2" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO IDALMACEN----------->
                            <div class="grupo-formulario" id="grupo_Cantidad">        
                                <span>Codigo:</span>
                                <input type="number" min="0" class="formulario__input" readonly id="id_almacen" name="id_almacen" placeholder="Codigo">
                                
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Almacen:</span>
                                <input type="text" class="formulario__input" id="almacen_nombre" name="almacen_nombre" placeholder="Nombre Almacen">
                                <p>Digite el nombre del almacen.</p>
                            </div>
                            
                            <div class="grupo-combobox" id="grupo_visible">
                                <span>Visible</span>
                                    <select class="" name="almacen_visible" id="almacen_visible">
                                        <option value="TRUE">Activo</option>
                                        <option value="FALSE">Inactivo</option>
                                </select>
                            </div>
                            

                            <div class="grupo-combobox" id="grupo_estado">
                                <span>Estado</span>
                                    <select class="" name="almacen_estado" id="almacen_estado">
                                        <option value="TRUE">Activo</option>
                                        <option value="FALSE">Inactivo</option>
                                    </select>
                            </div>

                        
                        <div class="MensajeBoton">
                        <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario col-2">
                                    <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-almacen" >Enviar</button>
                            </div>
                            <div class="grupo-formulario col-2">
                                    <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-almacen" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

    <script src="registros/modalAlmacen.js"></script>

</body>
</html>
