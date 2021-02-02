$(document).on("click","#btnenviar", function(){
    var NrAnalitico = $('#txtnroper').val();

    $.post("controller/servicio.php?op=guardar", { NrAnalitico:NrAnalitico}, function(data){
        data = JSON.parse(data);
        console.log(data);
    });
});


$(document).on("click","#btnenviarfactura", function(){
    $.post("controller/interfaz.php?op=guardar", function(data){
        //data = JSON.parse(data);
        console.log(data);
    });
});

$(document).on("click","#btnenviarfacturaservicio", function(){
    $.post("controller/servicio.php?op=guardar_factura", function(data){
        console.log(data);
    });
});