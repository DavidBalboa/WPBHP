function enviaForm(){

    
    var reclamoTitulo       = $('#reclamoTitulo').val();
    var motivoReclamoId     = $('#motivoReclamoId').val();
    var reclamoObservacion  = $('#reclamoObservacion').val();
    var empresaId           = $('#empresaId').val();
    var beneficiarioId      = $('#beneficiarioId').val();

    //divResultado = document.getElementById("contenido");
    //ajax=objetoAjax();
    //ajax.open("POST", "ingresa_llamado.php?reclamoTitulo="+reclamoTitulo+"&motivoReclamo="+motivoReclamo+"&reclamoObservacion="+reclamoObservacion+"&empresaId="+empresaId+"&beneficiarioId="+beneficiarioId);


    var datos = "reclamoTitulo="+reclamoTitulo+"&motivoReclamoId="+motivoReclamoId+"&reclamoObservacion="+reclamoObservacion+"&empresaId="+empresaId+"&beneficiarioId="+beneficiarioId
    $.ajax({
        type: 'POST',//como envia los datos 
        dataType : 'json',
        url: '../wp-content/themes/lhdash/procesaReclamo.php',
        data: datos,// capturta los valores del formulario y los concatena
        async:true,     // Cuando se ejecuten demasiado ajax  se debera  agregar esta instruccion. 
        success: function(datos){ // datos -> es lo q recibimos del controlados 
         //return false;
       // $("#reclamoModal").show();

        //$("#respuesta");

        /*alert(datos);
        var reclamoId = datos.reclamoId;
        alert(reclamoId);*/
    Swal.fire({
      type: 'success',
      title: 'Reclamo creado exitosamente',
      //text: 'Something went wrong!',
      //footer: '<a href>Why do I have this issue?</a>'
  },
            function(isConfirm){
                if (isConfirm) {       
                     window.location = "//localhost/wordpress2/login";
                } 
        }
    );





    }
   
    });  
    limpiar();   
}


function limpiar(){
     $('#reclamoTitulo').val("");
    $('#motivoReclamoId').val(0);
    $('#reclamoObservacion').val("");
}

// var http = new XMLHttpRequest();
// var url = "http://srv001-generarreclamo-losheroesbhp.apps.openshift-desa.losheroes.cl/srv001-generarreclamo";
// var reclamoTitulo = document.getElementById('reclamoTitulo');
// var motivoReclamoId = document.getElementById('motivoReclamoId');
// var reclamoObservacion = document.getElementById('reclamoObservacion');
// var beneficiarioId = document.getElementById('beneficiarioId');
// var empresaId = document.getElementById('empresaId');
// http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
// http.open("POST", url, true);

// http.onreadystatechange = function() {
//     if(http.readyState == 4 && http.status == 200) { 
//        //aqui obtienes la respuesta de tu peticion
//        alert(http.responseText);
//     }
// }
// http.send(JSON.stringify({reclamoTitulo:reclamoTitulo, motivoReclamoId: motivoReclamoId, 
//     reclamoObservacion: reclamoObservacion, beneficiarioId: beneficiarioId, empresaId: empresaId}));