<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Productos</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="lista-titulos">
                        <h2>Registros De Productos</h2>
                    </div>
                    <div class="div-btn">
                        <div  class="btnTabla">
                            <a href="#" class="btn verdes almacen">Registrar</a>
                        </div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">ID</td>
                            <td class="dat-til">Descripcion</td>
                            <td class="dat-til">Categoria</td>
                            <td class="dat-til">Precio</td>
                            <td class="dat-til">Precio 2</td>
                            <td class="dat-til">Precio 3</td>
                            <td class="dat-til">Costo</td>
                            <td class="dat-til">Limite Minimo</td>
                            
                            <td class="dat-til">Cantidad</td>
                            <td class="dat-til">Control inventario</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                        <?php 

                                foreach ($datosProductos as $dato) {
                                ?>
                                    <tr>
                                        <td><?php echo $dato['f_referencia']?></td>
                                        <td><?php echo $dato['f_descripcion']?></td>
                                        <td><?php echo $dato['f_idcategoria']?></td>
                                        <td><?php echo $dato['f_precio']?></td>
                                        <td><?php echo $dato['f_precio2']?></td>
                                        <td><?php echo $dato['f_precio3']?></td>
                                        <td><?php echo $dato['f_ultimocosto']?></td>
                                        <td><?php echo $dato['f_limiteminimo']?></td>
                                        <td><?php echo $dato['f_existencia']?></td>
                                        <td><?php echo $dato['f_controlinventario']?></td>
                                        <td><?php echo $dato['f_status']?></td>
                                        <td><div>
                                                <a class="estado editar" id="btnEditar"> Editar</a>
                                            </div>
                                        </td>
                                        <td><a class="estado borrar" href="almacen/borrarAlmacen.php?borrarAlmacen=<?php echo $dato['f_referencia'] ?>"> Borrar</a></td>
                                    </tr>
                                                    
                                <?php
                                                }
                                ?>
                                <?php 
                                    if (isset($_GET['borrarAlmacen'])) {
                                        include('almacen/borrarAlmacen.php');
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
                            <h2>Registrar Productos</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-3" name="formulario-contenido" id="formulario" method="POST">
                            
                            
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Codigo producto:</span>
                                <input type="number" class="formulario__producto" id="idproducto" name="idproducto" placeholder="Id producto" readonly>
                            </div>

                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Descripcion Producto:</span>
                                <input type="text" class="formulario__input" id="producto_descripcion" name="producto_descripcion" placeholder="Descripcion producto">
                                <p>Digite la descripcion del producto.</p>
                            </div>
                            <!----------------------GRUPO Categoria----------->
                            <div class="grupo-formulario" id="grupo_categoria">        
                                <span>Categoria:</span>
                                <input type="number" class="formulario__input" id="categoria" name="categoria" placeholder="Categoria">
                                <p>No es opcional</p>
                            </div>

                            <div class="grupo-combobox" id="grupo_categorias">
                                <span>Categorias</span>
                                <select class="" name="id_categorias" id="id_categorias">
                                    <?php foreach ($datosCategorias as $tipo) {
                                        $c_tipo  = $tipo['f_idcategoria'];
                                        $n_tipo  = $tipo['f_descripcion'];
                                    ?>
                                        <option value="<?php echo $c_tipo;?>"><?php echo $n_tipo;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <!----------------------GRUPO PRECIO 1----------->
                            <div class="grupo-formulario " id="grupo_precio">        
                                <span>Costo, Limite Minimo:</span>
                                <div class="column col-2">
                                    <input type="number" class="formulario__input" id="producto_costo" name="producto_costo" placeholder="Costo">
                                    <input type="number" class="formulario__input" id="productos_minimo" name="productos_minimo" placeholder="Limite Minimo">
                                </div>
                                
                                <p>Digite el limite minimo del precio del producto.</p>
                            </div>
                            
                            <!----------------------GRUPO PRECIO 1----------->
                            
                            <div class="grupo-formulario" id="grupo_precio"> 
                                <span>Precio 1, 2, 3:</span>     
                                <div class="column col-3">
                                    <input type="number" class="formulario__input" id="producto_precio1" name="producto_precio1" placeholder="0.00">
                                    <input type="number" class="formulario__input" id="producto_precio2" name="producto_precio2" placeholder="0.00">
                                    <input type="number" class="formulario__input" id="producto_precio3" name="producto_precio3" placeholder="0.00">
                                </div>
                                <p>Digite el limite minimo del precio del producto.</p>
                            </div>

                            <!----------------------GRUPO CANTIDAD----------->
                            <div class="grupo-formulario" id="grupo_Cantidad">        
                                <span>Cantidad:</span>
                                <input type="number" min="0" class="formulario__input" id="producto_cantidad" name="producto_cantidad" placeholder="Cantidad">
                                <p>Digite la cantidad del producto.</p>
                            </div>

                            <div class="grupo-formulario" id="grupo_fecha-entrada">        
                                <span>Fecha De Entrada:</span>
                                <div class="column col-2">
                                    <input type="date" class="formulario__input" id="producto_fechaentrada" name="producto_fechaentrada" placeholder="Fecha De Entrada">
                                    <input type="date" class="formulario__input" id="producto_fechacreacion" name="producto_fechacreacion" placeholder="Fecha De Creacion">
                                </div>
                            </div>

                            <div class="grupo-combobox" id="grupo_impuesto">
                                <span>Impuesto</span>
                                <select class="" name="id_impuesto" id="id_impuesto">
                                    <?php foreach ($datosImpuesto as $tipo) {
                                        $c_tipo  = $tipo['f_id'];
                                        $n_tipo  = $tipo['f_descripcion'];
                                    ?>
                                        <option value="<?php echo $c_tipo;?>"><?php echo $n_tipo;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="grupo-combobox" id="grupo_almacen">
                                <span>Almacen</span>
                                <select class="" name="id_almacen" id="id_almacen">
                                    <?php foreach ($datosAlmacen as $tipo) {
                                        $c_tipo  = $tipo['f_iddepto'];
                                        $n_tipo  = $tipo['f_descripcion'];
                                    ?>
                                        <option value="<?php echo $c_tipo;?>"><?php echo $n_tipo;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="estado" id="estado">
                                        <option value="TRUE">Activo</option>
                                        <option value="FALSE">Inactivo</option>
                                </select>
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Control Inventario</span>
                                    <select class="" name="controlinventario" id="controlinventario">
                                        <option value="TRUE">Si</option>
                                        <option value="FALSE">No</option>
                                    </select>
                            </div>

                        
                        <div class="MensajeBoton">
                        <!----------------------BOTON ENVIAR----------->
                        <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-productos" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-productos" >Modificar</button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

    <script src="registros/modalProductosSucursal.js"></script>
    <script src="../../plugins/jquery-3.3.1.min.js"></script>

</body>
</html>
