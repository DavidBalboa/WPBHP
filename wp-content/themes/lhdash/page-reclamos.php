<?php
/*
    Template Name: Reclamos
 */


// Advanced Custom Fields
//$         = get_field('');

get_header();
?>

<script type="text/javascript">
//$.noConflict();
    JSON.parse = JSON.parse || function(str){
        if(str === ""){
            str = '""';
            eval("var p=" + str + ";");
            return p;
        }
    };

    //(function($) {
    jQuery(function($) {
        function getReclamos(){
            $.ajax({
                url: 'http://srv002-listarreclamos-losheroesbhp.apps.openshift-desa.losheroes.cl/srv002-listarreclamos?rut=14634025',
                type: 'get',//como envia los datos 
                success: function(response){
                    $.each(JSON.parse(response), function(i, index){
                        if(index.reclamoId.length){
                            $(".table").append(
                                "<tbody><tr>"+
                                    "<td>" + index.reclamoTitulo + "</td>"+
                                    "<td>" + index.motivoReclamoName + "</td>"+
                                    "<td>" + index.beneficiarioName + "</td>"+
                                    "<td>" + index.createdAt + "</td>"+
                                    "<td>" + index.modifiedAt + "</td>"+
                                    "<td>" + index.estadoReclamoId + "</td>"+
                                    "<td>" + index.reclamoId + "</td>"+
                                    "<td>" + index.reclamoObservacion + "</td>"+
                                "</td></tbody>"
                            );
                        }
                    });
                }
            });         
        }
        getReclamos();
    }); 
//}(jQuery));    
</script>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Reclamos</h1>
        <a href="nuevo-reclamo" class="d-none d-sm-inline-block btn btn-md btn-warning shadow-sm">Nuevo reclamo</a>
    </div>
        
    <!--ul class="nav nav-tabs-lh mb-3" id="empleadosTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link text-uppercase active show" id="lista-tab" data-toggle="tab" href="#lista" role="tab" aria-controls="home" aria-selected="false">Lista</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-uppercase" id="reporte-tab" data-toggle="tab" href="#reporte" role="tab" aria-controls="contact" aria-selected="true">Reporte</a>
        </li>
    </ul-->

    <div class="tab-content" id="empleadosTabsContent">
        <div class="tab-pane fade active show" id="lista" role="tabpanel" aria-labelledby="lista-tab">
            <!-- DataTales Example -->
            <div class="card mt-2 mb-4 border-0">
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Reclamo</th>
                            <th>Motivo</th>
                            <th>Beneficiario</th>
                            <th>Creado</th>
                            <th>Modificado</th>
                            <th>Estado</th>
                            <th>Reclamo ID</th>
                            <th>Observación</th>
                            <!--th>APE.MAT</th>
                            <th>ROL ASOCIADO</th>
                            <th>ESTADO</th-->
                        </tr>
                    </thead>
                    <!--tfoot>
                        <tr>
                            <th>Reclamo</th>
                            <th>Motivo</th>
                            <th>Beneficiario</th>
                            <th>Creado</th>
                            <th>Modificado</th>
                            <th>Estado</th>
                            <th>Reclamo ID</th>
                            <th>Observación</th>
                        </tr>
                    </tfoot-->
                    
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="reporte" role="tabpanel" aria-labelledby="reporte-tab">
            
            <div class="card mt-2 mb-4 border-0">
                <div class="card-body pt-5">
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div>
                                <h5 class="card-title border-bottom pb-3">Cantidad de usuarios</h5>
                                <!-- <a href="#" class="btn btn-link">Ver detalle</a> -->
                            </div>

                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <h5 class="card-title border-bottom pb-3">Segmentos</h5>

                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>

                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Direct
                                </span>
                                <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Social
                                </span>
                                <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Referral
                                </span>
                            </div>
                        </div>

                    </div>
                    <!-- // Content Row -->

                    <!-- Content Row -->
                    <div class="row mt-5">
                        <div class="col-xl-12 col-lg-12">
                        <a href="#" class="btn btn-outline-warning mr-2">Imprimir reporte</a>
                        <a href="#" class="btn btn-warning">Descargar reporte</a>
                        </div>
                    </div>
                    <!-- // Content Row -->
                </div>
            </div>

        </div>
    </div>
<?php
get_footer();
