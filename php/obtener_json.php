<?php
    include ("db.inc.php");
    $conn = new mysqli($servername,$username,$password,$dbname);

    $data = array();
    $sql = "SELECT * FROM avg_mantenimiento";
    $query = $conn->query($sql);
    while($row = $query->fetch_assoc()){
        $data[] = $row;
    }
    
    //convert to json
    $data = json_encode($data);
    
    //create json file
    $filename = 'rg_mantenimiento.json';
    if(file_put_contents($filename, $data)){
        echo '<br> Archivo Json Creado';
    } 
    else{
        echo '<br> Ha ocurrido un error en la creación del archivo Json';
    }
 
?>