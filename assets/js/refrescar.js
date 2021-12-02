function agregar(id,fecha, kilometraje,mantenimiento,nombre_taller,costos,observacion) {
    // Crear un objeto
    mantenimientos= {
                id: id,  fecha, kilometraje,mantenimiento,nombre_taller,costos,observacion
    };
    // Agregar producto a lista
    matenimientos.push(mantenimientos);
    // Crear la tabla

    let  html='<table class=" shwadow table">'
    html += "<thead>"

    html +=' <tr>     <th scope="col">Producto</th>   <th scope="col">Precio</th>   </tr> <br><br>'              
    for (var i = 0; i < mantenimientos.length; i++) {

       
        html+="<tr>"       
        html += "<tr>"
        html += "<td>" + mantenimientos[i].id + "</td>"
        html += "<td>" + mantenimientos[i].fecha + "</td>"
        html += "<td>" + mantenimientos[i].kilometraje + "</td>"
        html += "<td>" + mantenimientos[i].mantenimiento+ "</td>"
        html += "<td>" + mantenimientos[i].nombre_taller+ "</td>"
        html += "<td>" + mantenimientos[i].costos + "</td>"
        html += "<td>" + mantenimientos[i].observacion + "</td>"
            
        html+=" </tr>"
        html+="</thead"
        html += "</tr><br>"
    }
    html += "</thead";
    html += "</table";

    // Mostrar la tabla en html
    var mi_contenedor = document.getElementById("datos");
    mi_contenedor.innerHTML = html;
}



    
