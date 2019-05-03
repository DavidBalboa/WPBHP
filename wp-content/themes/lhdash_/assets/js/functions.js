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