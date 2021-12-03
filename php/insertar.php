<?php
  include ("db.inc.php");


  $fecha= $_POST['date'];
  $kilometraje = $_POST['n_kilometros'];
  $mantenimiento = $_POST['frenos'];
  $nombre_taller = $_POST['n_taller'];
  $costos =$_POST['costos'];
  $observacion=$_POST['observacion'];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cv_mantenimiento (Fecha,Kilometraje,mantenimiento,Nombre_taller, Costos_Mantenimiento, Observaciones)
    VALUES ($date, $kilometraje, '$frenos','$nombre_taller',$costos,'$observaciones')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nuevo registro creado correctamente";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;
?>