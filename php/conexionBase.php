<?php
    include "..\php\db.inc.php";

             
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
       
      $sql = "CREATE TABLE cv_mantenimiento (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Fecha DATE ,
        Kilometraje   DECIMAL(8,0) NOT NULL,
        mantenimiento VARCHAR(50) NOT NULL,
        Nombre_taller VARCHAR(50) NOT NULL,                             
        Costos_Matenimiento DECIMAL(6,2),
        Oberservacion VARCHAR(80)
        )";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table MyGuests created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    
      $conn = null;
?>