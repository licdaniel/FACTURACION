<?php 
require('menu.php'); 

if (isset($_SESSION['usuario_registros']) && $_SESSION['s_cargo'] == "ADMIN"){

    if(isset($_POST['usuario_almacen'])){
        $NN=$_POST['usuario_almacen'];
        echo $NN;
    }

?>

<script type="text/javascript">
        // Cada vez que cambie el select
$("#seleccionarCliente").change(function(){
    // a la variable x le asigno el value del select con id="seleccionarCliente"
    var x = $('#seleccionarCliente').val();
    // le asigno el valor de x al input con id="cdCliente"
    $('#cdCliente').val(x);
  });
    </script>
    <div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <div class="grupo-formulario">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>
                    <option  value="">Seleccionar cliente</option>
                    <!--Ejemplos para mostrar el resultado, los puedes eliminar-->
                    <option value="1">Cliente 1</option>
                    <option value="2">Cliente 2</option>
                    <?php
                        $item = null;
                        $valor = null;
                        $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);
                        foreach ($categorias as $key => $value) :?>
                            <option value="<?= $value['id']; ?>"><?= $value['nombre']; ?></option>
                        <?php endforeach;
                    ?>
                </select>
                <!-- cambiar type text por hidden -->
                <input type="text" id="cdCliente" name="cdCliente" >
            </div>


            <!----------------------GRUPO Codigo----------->
            <div class="grupo-formulario" id="grupo_Codigo">        
                    <span>Codigo:</span>
                    <input type="text" id="cdCliente" name="cdCliente" >
                
                </div>
                <div class="grupo-combobox" id="grupo_cargo">
            <span>Almacen</span>
                <select class="" name="usuario_almacen" id="usuario_almacen"required>
                    <?php 
                    
                    foreach($datosAlmacen as $almacenDatos) { 
                        $c_almacen = $almacenDatos['id_almacen'];
                        $n_almacen = $almacenDatos['almacen_nombre'];
                    ?>
                        <option value="<?php echo $c_almacen;?>" name='almacen'><?php echo $n_almacen;?></option>
                    <?php } ?> 

                    
                    <input type="text" id="id_almacen" name="id_almacen" >
                </select>
        </div>
    </div>       
</body>
</html>
