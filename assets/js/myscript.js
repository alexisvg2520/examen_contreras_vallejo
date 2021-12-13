$(document).ready(function(){
    $("input[name=mantenimiento]").on("change", function() {
        if(this.value == "Preventivo"){
            $("input[type=checkbox]").removeAttr("disabled");
      
        } else if (this.value == "Correctivo") {
           $("input[type=checkbox]").attr("disabled", true);
           $("input[type=checkbox]").attr("checked", false);          
        }
    });

    var d = new Date();  
    $("#date").attr("min",d.getFullYear() + "-01-01").attr("max",d.getFullYear() + "-12-31");
    $("#cargar").click(function(){
        $("#mostrar_tabla tbody").empty();
        $.ajax({
            type:'GET',
            url: 'php/obtener_json.php',
        });
        $.getJSON("php/rg_mantenimiento.json", function(data){
            var registro = '';
            $.each(data, function(key,value){
                registro +='<tr>';
                registro +='<td>'+value.fecha+'</td>';
                registro +='<td>'+value.nombre_taller+'</td>';
                registro +='<td>'+value.kilometraje+'</td>';
                registro +='<td>'+value.costos+'</td>';
                registro +='<td>'+value.mantenimiento+'</td>';
                registro +='<td>'+value.observaciones+'</td>';
                registro +='</tr>';
            });
            $("#mostrar_tabla tbody").append(registro);
        });
    });
});