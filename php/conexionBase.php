<?php
    include ("db.inc.php");

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
       
      $sql = "CREATE TABLE avg_mantenimiento (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fecha DATE ,
        kilometraje   DECIMAL(8,0) NOT NULL,
        mantenimiento VARCHAR(50) NOT NULL,
        p_mantenimiento VARCHAR(50),
        nombre_taller VARCHAR(50) NOT NULL,                             
        costos DECIMAL(6,2) NOT NULL,
        observaciones VARCHAR(80)
        )";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Instalación <b>Exitosa</b><br>Nueva tabla creada.<br><br>";
      } catch(PDOException $e) {
        echo "Instalación <b>¡EXISTENTE!</b><br>No se necesita crear una tabla de registro";
      }
    
      $conn = null;

      
?>