<?php
/*
    Template Name: Empleados -> Beneficios
 */


// Advanced Custom Fields
//$         = get_field('');

get_header();
?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4">Empleados - Beneficios</h1>

    <form>
        <div class="form-row">
            
            <div class="form-group col-md-2">
                <label for="inputType" class="font-weight-bold">Tipo</label>
                <input type="text" class="form-control border-0" id="inputType" placeholder="Empresa">
            </div>
            
            <div class="form-group col-md-3">
                <label for="inputLocation" class="font-weight-bold">Ubicación</label>
                <select id="inputLocation" class="form-control border-0">
                    <option selected>Elija su ubicación</option>
                    <option>Santiago</option>
                    <option>Conchalí</option>
                    <option>Huechuraba</option>
                    <option>Independencia</option>
                    <option>Quilicura</option>
                    <option>Recoleta</option>
                    <option>Renca</option>
                    <option>Las Condes</option>
                    <option>Lo Barnechea</option>
                    <option>Providencia</option>
                    <option>Vitacura</option>
                    <option>La Reina</option>
                    <option>Macul</option>
                    <option>Ñuñoa</option>
                    <option>Peñalolén</option>
                    <option>La Florida</option>
                    <option>La Granja</option>
                    <option>El Bosque</option>
                    <option>La Cisterna</option>
                    <option>La Pintana</option>
                    <option>San Ramón</option>
                    <option>Lo Espejo</option>
                    <option>Pedro Aguirre Cerda</option>
                    <option>San Joaquín</option>
                    <option>San Miguel</option>
                    <option>Cerrillos</option>
                    <option>Estación Central</option>
                    <option>Maipú</option>
                    <option>Cerro Navia</option>
                    <option>Lo Prado</option>
                    <option>Pudahuel</option>
                    <option>Quinta Normal</option>
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="inputDescuento" class="font-weight-bold">Descuento</label>
                <select id="inputDescuento" class="form-control border-0">
                    <option>Mayor descuento</option>
                    <option>Menor descuento</option>
                </select>
            </div>

            <div class="form-group col-md-3 text-center">
                <label for="formControlRange" class="font-weight-bold">Precio</label>
                <span class="float-left">0</span>
                <span class="float-right">1.000.000</span>
                <input type="range" class="custom-range" id="formControlRange">
            </div>

            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-warning btn-block">Buscar</button>
            </div>

        </div>
    <!-- / .form-row -->
    </form>

    <!-- Page Heading -->
    <h3 class="h5 mb-3 pb-3 border-bottom">Beneficios destacados</h3>

    <div class="row">
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

    <!-- Page Heading -->
    <h3 class="h5 mb-4">Categorías</h3>

    <div class="row">

        <div class="col-xl-2 col-md-2 mb-4">
            <div class="card border-0 mb-3">
                <div class="card-body py-3">
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/auto.png" alt="" class="img-responsive mw-100" />
                </div>
            </div>
            <h4 class="h6 font-weight-bold">Auto</h4>
        </div>

        <div class="col-xl-2 col-md-2 mb-4">
            <div class="card border-0 mb-3">
                <div class="card-body py-3">
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/salud.png" alt="" class="img-responsive mw-100" />
                </div>
            </div>
            <h4 class="h6 font-weight-bold">Salud</h4>
        </div>

        <div class="col-xl-2 col-md-2 mb-4">
            <div class="card border-0 mb-3">
                <div class="card-body py-3">
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/entretencion.png" alt="" class="img-responsive mw-100" />
                </div>
            </div>
            <h4 class="h6 font-weight-bold">Entretención</h4>
        </div>

        <div class="col-xl-2 col-md-2 mb-4">
            <div class="card border-0 mb-3">
                <div class="card-body py-3">
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/belleza.png" alt="" class="img-responsive mw-100" />
                </div>
            </div>
            <h4 class="h6 font-weight-bold">Belleza</h4>
        </div>

    </div>

    <!-- Page Heading -->
    <h3 class="h5 mb-4">Todos los beneficios</h3>

    <div class="row">
        <!-- Card -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-md-2">
                    <a href="/wordpress2/?page_id=39">
                        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental-clinic.png" alt="" class="img-responsive mw-100">
                    </a>

                    </div>

                    <div class="col-xl-8 col-md-8">
                        <h3 class="h5 mb-2">Dentimed</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quas, amet adipisci exercitationem sequi magnam itaque cum maiores vero incidunt odit voluptate fugit laboriosam tempora quis ducimus dignissimos eligendi aperiam!</p>
                    </div>

                    <div class="col-xl-2 col-md-2">
                        <div class="badge badge-warning py-3 px-3">$3.000 off</div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-md-2">
                    <a href="bhp-empleados--detalle.html"><img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental-clinic.png" alt="" class="img-responsive mw-100"></a>
                    </div>

                    <div class="col-xl-8 col-md-8">
                        <h3 class="h5 mb-2">Anpalex</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quas, amet adipisci exercitationem sequi magnam itaque cum maiores vero incidunt odit voluptate fugit laboriosam tempora quis ducimus dignissimos eligendi aperiam!</p>
                    </div>

                    <div class="col-xl-2 col-md-2">
                        <div class="badge badge-warning py-3 px-3">$3.000 off</div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-md-2">
                    <a href="bhp-empleados--detalle.html"><img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/dental-clinic.png" alt="" class="img-responsive mw-100"></a>
                    </div>

                    <div class="col-xl-8 col-md-8">
                        <h3 class="h5 mb-2">Emesalud</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quas, amet adipisci exercitationem sequi magnam itaque cum maiores vero incidunt odit voluptate fugit laboriosam tempora quis ducimus dignissimos eligendi aperiam!</p>
                    </div>

                    <div class="col-xl-2 col-md-2">
                        <div class="badge badge-warning py-3 px-3">$3.000 off</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
