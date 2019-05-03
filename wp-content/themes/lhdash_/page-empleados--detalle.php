<?php
/*
    Template Name: Empleados -> Detalle
 */


// Advanced Custom Fields
//$         = get_field('');

get_header();
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3">Clínica del Lago</h1>
        <a href="/wordpress2/?page_id=41" class="d-none d-sm-inline-block btn btn-md btn-warning shadow-sm">Solicitar beneficio</a>
    </div>

    <ul class="nav nav-tabs nav-tabs-lh mb-3" id="empleadosTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link text-uppercase active show" id="descripcion-tab" data-toggle="tab" href="#descripcion" role="tab" aria-controls="descripcion" aria-selected="false">Descripcion</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-uppercase" id="requisitos-tab" data-toggle="tab" href="#requisitos" role="tab" aria-controls="requisitos" aria-selected="true">Requisitos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-uppercase" id="pasoapaso-tab" data-toggle="tab" href="#pasoapaso" role="tab" aria-controls="pasoapaso" aria-selected="true">Paso a paso</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-uppercase" id="plazo-tab" data-toggle="tab" href="#plazo" role="tab" aria-controls="plazo" aria-selected="true">Plazo</a>
        </li>
    </ul>

    <div class="tab-content mb-5" id="empleadosTabsContent">
        <div class="tab-pane fade active show" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
            <!-- DataTales Example -->
            <div class="card shadow border-0">
                <div class="card-body pt-4">
                    <div class="row">
                    <div class="col-md-1 text-right">
                        <i class="fas fa-gift text-warning-lh"></i>
                    </div>

                    <div class="col-md-11">
                        <h4 class="h6 font-weight-bold mt-1">Beneficio exclusivo para afiliados Los Héroes:</h4>
                        <p>Evaluación odontológica y de ortodoncia sin costo.</p>
                        <p>15% de descuento en tratamientos de operatoria, tomando en cuenta aranceles Dentimed.</p>
                        <p>Limpieza sin costo para pacientes que inician tratamientos por montos superiores a $300.000.</p>
                        <p>50% de descuento en radiografías dentales relacionadas a tratamientos.</p>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1 text-right">
                        <i class="fas fa-map-marker-alt text-warning-lh"></i>
                        </div>

                        <div class="col-md-11">
                        <h4 class="h6 font-weight-bold mt-1">Dirección</h4>
                        <p>Balmaceda 280, Laja.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1 text-right">
                        <i class="fas fa-phone text-warning-lh"></i>
                        </div>

                        <div class="col-md-11">
                        <h4 class="h6 font-weight-bold mt-1">Teléfonos</h4>
                        <p>Para solicitar hora a Pensionados llame al 600 222 99 99.</p>
                        <p>Para solicitar hora a Trabajadores llame al 600 222 77 77.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="requisitos" role="tabpanel" aria-labelledby="requisitos-tab">
            <!-- DataTales Example -->
            <div class="card shadow border-0">
                <div class="card-body pt-4">
                    <div class="row">
                        <div class="col-md-1 text-right">
                        <i class="fas fa-exclamation-triangle text-warning-lh"></i>
                        </div>

                        <div class="col-md-11">
                        <p>Cumplir con el mínimo de asistencia cada mes (considerando del día 1 al 30), 4 vecesmínimo por trabajador y 8 veces mínimo por cargas familiares, de lo contrario se deshabilitará el acceso al gimnasio por 12 meses.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1 text-right">
                        <i class="fas fa-paperclip text-warning-lh"></i>
                        </div>

                        <div class="col-md-11">
                        <h4 class="h6 font-weight-bold mt-1">Descargar y completar los siguientes formularios</h4>
                        <p><a href="#">Certificado Cesación de Servicios</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pasoapaso" role="tabpanel" aria-labelledby="pasoapaso-tab">
            <!-- DataTales Example -->
            <div class="card shadow border-0">
                <div class="card-body pt-4">
                    <div class="row">
                        <div class="col-md-1 text-right">
                        <i class="fas fa-eye text-warning-lh"></i>
                        </div>

                        <div class="col-md-11">
                        <h4 class="h6 font-weight-bold mt-1">Instrucciones para solicitar beneficio</h4>
                        <p>Pago inicial por persona $15.000, única vez.</p>
                        <ol>
                            <li>Formulario de inscripción.</li>
                            <li>Copia de transferencia electrónica.</li>
                        </ol>

                        <ul>
                            <li>Banco Santander</li>
                            <li>Número de Cuenta Corriente: 63706140</li>
                            <li>Corp. de Cult. Ext. y Des. Los Héroes</li>
                            <li>Rut: 72.286.300-3</li>
                            <li>E-mail: infogimnasiosmel@recreativa.cl</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="plazo" role="tabpanel" aria-labelledby="plazo-tab">
            <!-- DataTales Example -->
            <div class="card shadow border-0">
                <div class="card-body pt-4">
                    <div class="row">
                        <div class="col-md-1 text-right">
                        <i class="fas fa-calendar text-warning-lh"></i>
                        </div>

                        <div class="col-md-11">
                        <h4 class="h6 font-weight-bold mt-1">Plazos para solicitar el beneficio</h4>
                        <p>El show navideño “Mi perro Chocolo” se realizara en una función unica, el 15 de Diciembre en Santiago a las 18:30 horas en el Court Central del Estado Nacional.</p>
                        <p>Av. Grecia 2001, Ñuñoam Región Metropolitana.</p>
                        <p>Página web: <a href="#">www.ticketplus.cl</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <p class="text-gray-500 font-weight-bold">Legales</p>
    <p class="text-gray-500 mb-5">Los Productos o servicios ofrecidos por terceros distintos a CCAF Los Héroes, son de responsabilidad de quienes los ofrecen o prestan. Las tarifas correspondientes a los servicios ofrecidos serán pagadas directamente por el afiliado o el beneficiario al prestador. Promoción no acumulable a otras promociones, convenios o descuentos. Las Cajas de Compensación, entidades de seguridad social, son fiscalizadas por la Superintendencia de Seguridad Social (www.suseso.cl)</p>


    <!-- Page Heading -->
    <h3 class="h5 mb-4 border-bottom pb-4">También te puede interesar</h3>

    <div class="row mb-5">
        <!-- Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-md-2">
                        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental.png" alt="" class="img-responsive" />
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <h6>Clínica del Lago</h6>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <div class="badge badge-warning py-2">$3.000 off</div>
                    </div>
                </div>
                
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental-clinic.png" alt="" class="img-responsive" />

                <p class="mb-0">$3.000 off</p>

                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-md-2">
                        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental.png" alt="" class="img-responsive" />
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <h6>Dentimed</h6>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <div class="badge badge-warning py-2">40% off</div>
                    </div>
                </div>
                
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental-clinic.png" alt="" class="img-responsive" />

                <p class="mb-0">40% off</p>

                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-md-2">
                        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental.png" alt="" class="img-responsive" />
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <h6>Dental Clinic</h6>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <div class="badge badge-warning py-2">$4.500 off</div>
                    </div>
                </div>
                
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental-clinic.png" alt="" class="img-responsive" />

                <p class="mb-0">$4.500 off</p>

                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
