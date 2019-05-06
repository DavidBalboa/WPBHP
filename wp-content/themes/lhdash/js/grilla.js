$(function () {
    /*$('#listadoReclamos').DataTable()
    $('#listadoSolicitudes').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })*/
    tabla=$('#listadoReclamos').dataTable(
      {
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor          
        "bDestroy": true,
        //"iDisplayLength": 5,//Paginación
          "order": [[ 0, "asc" ]]//Ordenar (columna,orden)
      }).DataTable();
      tabla=$('#listadoSolicitudes').dataTable(
        {
          "aProcessing": true,//Activamos el procesamiento del datatables
          "aServerSide": true,//Paginación y filtrado realizados por el servidor          
          "bDestroy": true,
          //"iDisplayLength": 5,//Paginación
            "order": [[ 0, "asc" ]]//Ordenar (columna,orden)
        }).DataTable();
    })