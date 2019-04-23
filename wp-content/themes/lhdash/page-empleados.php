<?php
/*
    Template Name: Empleados
 */


// Advanced Custom Fields
//$         = get_field('');

get_header();
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Empleados</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-md btn-warning shadow-sm">Agregar empleado</a>
    </div>
        
    <ul class="nav nav-tabs-lh mb-3" id="empleadosTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link text-uppercase active show" id="lista-tab" data-toggle="tab" href="#lista" role="tab" aria-controls="home" aria-selected="false">Lista</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-uppercase" id="reporte-tab" data-toggle="tab" href="#reporte" role="tab" aria-controls="contact" aria-selected="true">Reporte</a>
        </li>
    </ul>

    <div class="tab-content" id="empleadosTabsContent">
        <div class="tab-pane fade active show" id="lista" role="tabpanel" aria-labelledby="lista-tab">
            <!-- DataTales Example -->
            <div class="card mt-2 mb-4 border-0">
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>RUT</th>
                            <th>DV</th>
                            <th>NOMBRE</th>
                            <th>APE.MAT</th>
                            <th>ROL ASOCIADO</th>
                            <th>ESTADO</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>RUT</th>
                            <th>DV</th>
                            <th>NOMBRE</th>
                            <th>APE.MAT</th>
                            <th>ROL ASOCIADO</th>
                            <th>ESTADO</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jennifer Martinez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Jose Freire</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Guillermina Lopez</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Cley Membrilla</td>
                            <td>Vera</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Activo</a></td>
                        </tr>

                        <tr>
                            <td>243345-1</td>
                            <td>9</td>
                            <td>Lucas Prato</td>
                            <td>Miguel</td>
                            <td>Afiliado Trabajador</td>
                            <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">Inactivo</a></td>
                        </tr>
                    </tbody>
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
