<?php
/*
    Template Name: Empleados -> Solicitar
 */


// Advanced Custom Fields
//$         = get_field('');

get_header();
?>

    <!-- Page Heading -->
    <h1 class="h3 mb-5">Clínica del Lago</h1>
    
    <!-- Page Heading -->
    <h3 class="h5 mb-4 border-bottom pb-4">Solicitud de beneficio</h3>
    <p class="mb-5">Para solicitar este beneficio, a continuación debe completar la siguiente información:</p>

    <div class="row mb-5">
        <!-- Card -->
        <div class="col-xl-12 col-md-12">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>EMPLEADO</th>
                                <th>FAMILIARES</th>
                                <th>RUT</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                            <td>Jennifer Martinez</td>
                            <td>Inactivo</td>
                            <td>243345-1</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form class="mb-5 pb-5">
        <div class="form-group col-md-5 mb-4">
        <label for="inputAdress" class="font-weight-bold">Domicilio</label>
        <input type="text" class="form-control border-0" id="inputAdress" />
        </div>

        <div class="form-group col-md-5 mb-4">
        <label for="inputPhone" class="font-weight-bold">Teléfono</label>
        <input type="number" class="form-control border-0" id="inputPhone" />
        </div>

        <div class="form-group col-md-5 mb-4">
        <label for="inputComments" class="font-weight-bold">Comentarios</label>
        <!-- <input type="text" class="form-control border-0" id="inputComments" /> -->
        <textarea name="" id="inputComments" cols="30" rows="10" class="form-control border-0"></textarea>
        </div>

        <div class="form-group col-md-2">
            <a class="btn btn-warning btn-block" href="#" data-toggle="modal" data-target="#sendModal">Enviar</a>
        </div>
    <!-- / .form-row -->
    </form>

    <p class="text-gray-500 mt-5">Legales</p>
    <p class="text-gray-500 mb-5">Los Productos o servicios ofrecidos por terceros distintos a CCAF Los Héroes, son de responsabilidad de quienes los ofrecen o prestan. Las tarifas correspondientes a los servicios ofrecidos serán pagadas directamente por el afiliado o el beneficiario al prestador. Promoción no acumulable a otras promociones, convenios o descuentos. Las Cajas de Compensación, entidades de seguridad social, son fiscalizadas por la Superintendencia de Seguridad Social (www.suseso.cl)</p>
<?php
get_footer();
