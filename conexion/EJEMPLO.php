<?php
    //$conexion = new PDO("pgsql:host=localhost;dbname=db_unidad", "postgres", "993651");
    // Configuración de la conexión a la base de datos
    $host = 'localhost';
    $dbname = 'db_unidad';
    $username = 'postgres';
    $password = '993651';
    
    try {
        // Conexión a la base de datos usando PDO
        $conexion = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
        
        // Consulta SQL para obtener los datos
        //$query = "SELECT * FROM t_usuario";
        $consulta = $conexion->prepare("SELECT * FROM t_usuario WHERE f_activo=true  ");
        $consulta->execute();
        $data = $consulta->fetchAll(PDO::FETCH_ASSOC);
        // Preparar y ejecutar la consulta
       // $statement = $pdo->prepare($query);
       // $statement->execute();
        
        // Obtener y mostrar los resultados
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th></tr>";

        

        foreach ($data as $row) {
            echo "<tr><td>{$row['f_codigo_usuario']}</td><td>{$row['f_nombre']}</td><td>{$row['f_apellido']}</td></tr>";
           // echo "ID: {$row['f_codigo_usuario']}, Nombre: {$row['f_nombre']}, Apellido: {$row['f_apellido']}<br>";
        }
    } catch (PDOException $e) {
        // Manejar errores de conexión
        echo "Error de conexión: " . $e->getMessage();
    }
    
?>