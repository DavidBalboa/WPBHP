<?php
/*
    Template Name: Reclamos
 */
//header('Access-Control-Allow-Origin: http://localhost');
// Advanced Custom Fields
//$         = get_field('');

/*if (isset($_SERVER['HTTP_ORIGIN'])) {  
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    header('Access-Control-Allow-Credentials: true');  
    header('Access-Control-Max-Age: 86400');   
}  
  
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))  
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))  
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");  
} */

get_header();
//$user=wp_get_current_user();
?>
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
            <div class="card mt-2 mb-4 border-0">
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Reclamo</th>
                            <th>Motivo</th>
                            <th>Creado</th>
                            <th>Modificado</th>
                            <th>Estado</th>
                        </tr>
                    </thead>     
                            <tbody> 
                    <?php
                        $user=wp_get_current_user();
                        $data = json_decode(file_get_contents("http://srv002-listarreclamos-losheroesbhp.apps.openshift-desa.losheroes.cl/srv002-listarreclamos?rut=$user->wp_user_rut"),true);
                        for($i=0;$i<count($data);$i++){
                        $datecreado = new DateTime($data[$i]["createdAt"]);
                        $creado = $datecreado->format('d-m-Y');    
                        $datemodificado = new DateTime($data[$i]["modifiedAt"]);
                        $modificado = $datemodificado->format('d-m-Y');    
                            echo "
                                <tr>
                                    <td>".$data[$i]["reclamoId"]."</td>
                                    <td>".$data[$i]["reclamoTitulo"]."</td>
                                    <td>".$data[$i]["motivoReclamoDescripcion"]."</td>
                                    <td>".$creado."</td>
                                    <td>".$modificado."</td>
                                    <td>".$data[$i]["estadoReclamoNombre"]."</td>
                                </tr>";
                        }
                    ?>
                            </tbody>
                    </table>  
                </div>
                </div>
        </div>
    </div>
    </div>
<?php





get_footer();
