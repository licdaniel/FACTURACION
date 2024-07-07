<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Categorias</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">

                    <div class="CabeList btnTamaño">
                        <h2>Registros de Categorias</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes categoria">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Categorias</h2>
                        <div class="LinTil"></div>
                    </div>

                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Codigo</td>
                            <td class="dat-til">Descripción</td>
                            <td class="dat-til"><span class="estado ">Editar</span></td>
                        </thead>
                        <tbody>
                        <?php 
                                foreach ($datosCategorias as $dato) {
                                ?>
                                    <tr>
                                        <td><?php echo $dato['f_idcategoria']?></td>
                                        <td><?php echo $dato['f_descripcion']?></td>
                                        <td><div>
                                                <a class="estado editar" id="btnEditar"> Editar</a>
                                            </div>
                                        </td>
                                    </tr>                   
                        <?php }?>
                        </tbody>
                    </Table>
                </div>
            </div>

            <!-----FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Registrar categorian</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-2" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO IDcategoriaN----------->
                            <div class="grupo-formulario" id="grupo_Cantidad">        
                                <span>Codigo:</span>
                                <input type="number" min="0" class="formulario__input" readonly id="id_categoria" name="id_categoria" placeholder="Codigo">
                                
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Categoria:</span>
                                <input type="text" class="formulario__input" id="categoria_nombre" name="categoria_nombre" placeholder="Nombre Categoria">
                                <p>Digite el nombre del categoria.</p>
                            </div>

                            
                            
                        <div class="MensajeBoton">
                        <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-categoria" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-categoria" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

    <script src="registros/modalCategoria.js"></script>

</body>
</html>
