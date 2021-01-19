



$(document).on("click","#btnenviar", function(){
    var NrAnalitico = $('#txtnroper').val();

    $.post("controller/servicio.php?op=guardar", { NrAnalitico:NrAnalitico}, function(data){

        data = JSON.parse(data);
        console.log(data.id);
    });
});