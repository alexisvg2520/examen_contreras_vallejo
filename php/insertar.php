<?php
  include ("db.inc.php");
  function evalua($val){
    if ($val==true){
      return "<h2>¡Registro Exitoso!</h2>";
    }
    else{
      return "<h2>¡Registro Cancelado!</h2>";
    }
  }
  
  if(isset($_POST['enviar'])){
    $p_mantenimiento="";
    $date= $_POST['date'];
    $kilometraje = $_POST['n_kilometros'];
    $mantenimiento = $_POST['mantenimiento'];
    $nombre_taller = $_POST['n_taller'];
    $costos =$_POST['costos'];
    $observaciones=$_POST['observaciones'];

    //Formato MySql de Fecha

    if(!empty($_POST['check_lista'])) {
      foreach($_POST['check_lista'] as $p_mantenimiento){
        $p_mantenimiento = $p_mantenimiento;
        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "INSERT INTO avg_mantenimiento (fecha,kilometraje,mantenimiento,p_mantenimiento,nombre_taller,costos,observaciones)
          VALUES ('$date', $kilometraje,'$mantenimiento','$p_mantenimiento','$nombre_taller',$costos,'$observaciones')";
          // use exec() because no results are returned
          $conn->exec($sql);
          $flag=True;
        } catch(PDOException $e) {
          echo $date_sql;
          echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
      }
    }
    else{
        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "INSERT INTO avg_mantenimiento (fecha,kilometraje,mantenimiento,p_mantenimiento,nombre_taller,costos,observaciones)
          VALUES ('$date', $kilometraje,'$mantenimiento','$p_mantenimiento','$nombre_taller',$costos,'$observaciones')";
          // use exec() because no results are returned
          $conn->exec($sql);
          $flag=True;
        } catch(PDOException $e) {
          echo $date_sql;
          echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    } 
  }
  echo evalua($flag);  
?>