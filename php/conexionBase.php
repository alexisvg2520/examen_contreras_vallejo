<?php
    include "..\php\db.inc.php";

    // Conexión
    $conn = new mysqli($servername, $username, $password);

    // Comprobar conexión
    if ($conn->connect_error) {
        die("Conexión Fallida: " . $conn->connect_error);
    }
    
    echo "Conexión Exitosa";

    $sql = "CREATE DATABASE cv_prueba";
    if ($conn->query($sql) === TRUE) {
        echo "Base de datos creada con éxito";
    } else {
        die("Error al crear la base de datos: " . $conn->error);
    }

    $conn->close();
?>