// function cambiaCapa(id){ 

// 	if(id==1){
// 		$("#form-login").hide();
// 		$("#form-recupera-clave").fadeIn(3000);
// 	}

// }
// $(document).ready(function(){
// 	$("#btn-recupera-clave").click(function(){ 
// 		$("#form-login").hide();
// 		$("#form-recupera-clave").show();
// 	});
// });


window.onload = function(){
$('#dataTable').dataTable().fnDestroy();
	grillaReclamos();       
}

function grillaReclamos(){ 
 $( "#dataTable" ).DataTable({
            "oLanguage": {
            "sProcessing":     "Procesando...",
            "sLengthMenu": 'Mostrar <select>'+
                '<option value="10">10</option>'+
                '<option value="20">20</option>'+
                '<option value="30">30</option>'+
                '<option value="40">40</option>'+
                '<option value="50">50</option>'+
                '<option value="-1">Todos</option>'+
                '</select> registros',    
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Filtrar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
        });
} 





// function dataReclamos(rut){
//  $('#dataTable').dataTable().fnDestroy();
// }

function listaReclamos(rut){ //alert("RwL="+rut);
$.ajax({
    type: 'GET',
	url: 'http://srv002-listarreclamos-losheroesbhp.apps.openshift-desa.losheroes.cl/srv002-listarreclamos?rut='+rut,
    mimeType: 'json',
    success: function(data) {
        $.each(data, function(i, data) {
            var body = "<tr>";
            body    += "<td>" + data.reclamoId + "</td>";
            body    += "<td>" + data.reclamoTitulo + "</td>";
            body    += "<td>" + data.motivoReclamoDescripcion + "</td>";
            body    += "</tr>";
            $( "#dataTable tbody" ).append(body);
        });
        /*DataTables instantiation.*/
        $( "#dataTable" ).DataTable({
        	"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
		}
        });
    },
    error: function() {
        alert('Error al cargar datos!');
    }
});
}



////////////////////////////////////

function enviaReclamo(){ 
		//var id = id;	
		//variable="id="+id;  //alert("variable"+variable); return false;
		//location.href="agregarCliente.php?rut="+rut; 


var reclamoTitulo = $('#reclamoTitulo').val();
var motivoReclamo = $('#motivoReclamo').val();
var reclamoObservacion = $('#reclamoObservacion').val();
var empresaId = $('#empresaId').val();
var beneficiarioId = $('#beneficiarioId').val();


var data = "reclamoTitulo="+reclamoTitulo+"&motivoReclamo="+motivoReclamo+"&reclamoObservacion="+reclamoObservacion+
	"&empresaId="+empresaId+"&beneficiarioId="+beneficiarioId;
       $.ajax({
		type: 'POST',//como envia los datos 
		dataType : 'json',
		url: 'http://srv001-generarreclamo-losheroesbhp.apps.openshift-desa.losheroes.cl/srv001-generarreclamo',
		data: data,// capturta los valores del formulario y los concatena
		async:true,     // Cuando se ejecuten demasiado ajax  se debera  agregar esta instruccion. 
		success: function(data){ // datos -> es lo q recibimos del controlados 
		alert("D="+data); //return false;

		
		}
	}); 	
	return false;
}