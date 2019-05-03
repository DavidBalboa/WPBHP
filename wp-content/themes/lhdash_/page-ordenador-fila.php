<?php
/*
    Template Name: Ordenador de filas
*/

// ---------------------------------------
// Advanced Custom Fields
// ---------------------------------------

// Antecedentes personales
$nombre                     = get_field('nombre');
$rut_personal               = get_field('rut_personal');
$fecha_de_nacimiento        = get_field('fecha_de_nacimiento');
$direccion                  = get_field('direccion');
$telefono                   = get_field('telefono');
$correo                     = get_field('correo');
$segmento                   = get_field('segmento');
$trabaja                    = get_field('trabaja');
$estado                     = get_field('estado');
$nacionalidad               = get_field('nacionalidad');

// Licencias medicas
$numero_licencia_medica     = get_field('numero_licencia_medica');
$tipo_licencia_medica       = get_field('tipo_licencia_medica');
$cant_dias_de_reposo        = get_field('cant_dias_de_reposo');
$estado_licencia            = get_field('estado_licencia');
$fecha_probable_de_pago     = get_field('fecha_probable_de_pago');
$rut_empresa                = get_field('rut_empresa');
$nombre_empresa             = get_field('nombre_empresa');
$fase_licencia_medica       = get_field('fase_licencia_medica');
$condicion_licencia_medica  = get_field('condicion_licencia_medica');
$fecha_recepcion            = get_field('fecha_recepcion');
$sucursal_de_pago           = get_field('sucursal_de_pago');
$fecha_de_pago              = get_field('fecha_de_pago');
$monto_de_pago              = get_field('monto_de_pago');
$forma_de_pago              = get_field('forma_de_pago');


// Creditos vigentes
$operacion                  = get_field('operacion');
$tipo_de_operacion          = get_field('tipo_de_operacion');
$estado_del_credito         = get_field('estado_del_credito');
$numero_total_de_cuotas     = get_field('numero_total_de_cuotas');
$valor_cuota                = get_field('valor_cuota');
$saldo                      = get_field('saldo');
$numero_cuotas_impagas      = get_field('numero_cuotas_impagas');
$numero_cuotas_pagadas      = get_field('numero_cuotas_pagadas');
$numero_cuotas_morosas      = get_field('numero_cuotas_morosas');
$numero_cuotas_castigadas   = get_field('numero_cuotas_castigadas');
$ultima_cuota_pagada        = get_field('ultima_cuota_pagada');
$cartola                    = get_field('cartola');
$operacion_refundida        = get_field('operacion_refundida');
$fecha_refundimiento        = get_field('fecha_refundimiento');
$monto_refundimiento        = get_field('monto_refundimiento');
$monto_compra_cartera       = get_field('monto_compra_cartera');
$faena_compra_cartera       = get_field('faena_compra_cartera');

// Mayor ingreso
$monto_2                    = get_field('monto_2');
$monto_3                    = get_field('monto_3');
$monto_4                    = get_field('monto_4');
$monto_total                = get_field('monto_total');


get_header();
?>

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800 mt-5">Afiliado/a: <?php echo $nombre ?></h1>
    <p class="mb-4 font-weight-bold">RUT: <?php echo $rut_personal ?></p>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item col-xl-4 col-md-6 mb-4 text-center">
            <a class="nav-link shadow py-4 active" id="antecedentes-tab" data-toggle="pill" href="#antecedentes" role="tab" aria-controls="antecedentes" aria-selected="true">
                <i class="fas fa-users fa-3x mb-4"></i>
                <h4>Antedecentes personales</h4>
            </a>
        </li>


        <li class="nav-item col-xl-4 col-md-6 mb-4 text-center">
            <a class="nav-link shadow py-4" id="licencias-tab" data-toggle="pill" href="#licencias" role="tab" aria-controls="licencias" aria-selected="false">
                <i class="fas fa-file-signature fa-3x mb-4"></i>
                <h4>Licencias médicas</h4>
            </a>
        </li>

        <li class="nav-item col-xl-4 col-md-6 mb-4 text-center">
            <a class="nav-link shadow py-4" id="credito-tab" data-toggle="pill" href="#credito" role="tab" aria-controls="credito" aria-selected="false">
                <i class="fas fa-hand-holding-usd fa-3x mb-4"></i>
                <h4>Crédito social</h4>
            </a>
        </li>
    </ul>


    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="antecedentes" role="tabpanel" aria-labelledby="antecedentes-tab">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="col">Nombre</th>
                            <td><?php echo $nombre ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Fecha de nacimiento</th>
                            <td><?php echo $fecha_de_nacimiento ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Dirección</th>
                            <td><?php echo $direccion ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Teléfono</th>
                            <td><?php echo $telefono ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Correo</th>
                            <td><?php echo $correo ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Segmento</th>
                            <td><?php echo $segmento ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Trabaja</th>
                            <td><?php echo $trabaja ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Estado</th>
                            <td><?php echo $estado ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Nacionalidad</th>
                            <td><?php echo $nacionalidad ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- // Tab 1 -->
    
        <div class="tab-pane fade" id="licencias" role="tabpanel" aria-labelledby="licencias-tab">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="col">N° Licencia Médica</th>
                            <td><?php echo $numero_licencia_medica ?></td>
                            <td><?php echo $numero_licencia_medica ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Tipo Licencia Médica</th>
                            <td><?php echo $tipo_licencia_medica ?></td>
                            <td><?php echo $tipo_licencia_medica ?></td>
                        </tr>
                        
                        <tr>
                            <th scope="col">Cant. Días de Reposo</th>
                            <td><?php echo $cant_dias_de_reposo ?></td>
                            <td><?php echo $cant_dias_de_reposo ?></td>
                        </tr>
                        
                        <tr>
                            <th scope="col">Estado Licencia</th>
                            <td><?php echo $estado_licencia ?></td>
                            <td><?php echo $estado_licencia ?></td>
                        </tr>
                        
                        <tr>
                            <th scope="col">Fecha Probable de Pago</th>
                            <td><?php echo $fecha_probable_de_pago ?></td>
                            <td><?php echo $fecha_probable_de_pago ?></td>
                        </tr>
                        
                        <tr>
                            <th scope="col">RUT Empresa</th>
                            <td><?php echo $rut_empresa ?></td>
                            <td><?php echo $rut_empresa ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Nombre Empresa</th>
                            <td><?php echo $nombre_empresa ?></td>
                            <td><?php echo $nombre_empresa ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Fase Licencia Médica</th>
                            <td><?php echo $fase_licencia_medica ?></td>
                            <td><?php echo $fase_licencia_medica ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Condición Licencia Médica</th>
                            <td><?php echo $condicion_licencia_medica ?></td>
                            <td><?php echo $condicion_licencia_medica ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Fecha Recepción</th>
                            <td><?php echo $fecha_recepcion ?></td>
                            <td><?php echo $fecha_recepcion ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Sucursal de Pago</th>
                            <td><?php echo $sucursal_de_pago ?></td>
                            <td><?php echo $sucursal_de_pago ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Fecha de Pago</th>
                            <td><?php echo $fecha_de_pago ?></td>
                            <td><?php echo $fecha_de_pago ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Monto de Pago</th>
                            <td><?php echo $monto_de_pago ?></td>
                            <td><?php echo $monto_de_pago ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Forma de Pago</th>
                            <td><?php echo $forma_de_pago ?></td>
                            <td><?php echo $forma_de_pago ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- // Tab 2 -->
    
        <div class="tab-pane fade" id="credito" role="tabpanel" aria-labelledby="credito-tab">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="vigentes-tab" data-toggle="tab" href="#vigentes" role="tab" aria-controls="vigentes" aria-selected="true">Creditos vigentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mayores-tab" data-toggle="tab" href="#mayores" role="tab" aria-controls="mayores" aria-selected="false">Mayor ingreso</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="vigentes" role="tabpanel" aria-labelledby="vigentes-tab">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th scope="col">Operación</th>
                                    <td><?php echo $operacion ?></td>
                                    <td><?php echo $operacion ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Tipo de operación</th>
                                    <td><?php echo $tipo_de_operacion ?></td>
                                    <td><?php echo $tipo_de_operacion ?></td>
                                </tr>
                                
                                <tr>
                                    <th scope="col">Estado del crédito</th>
                                    <td><?php echo $estado_del_credito ?></td>
                                    <td><?php echo $estado_del_credito ?></td>
                                </tr>
                                
                                <tr>
                                    <th scope="col">Número total de cuotas</th>
                                    <td><?php echo $numero_total_de_cuotas ?></td>
                                    <td><?php echo $numero_total_de_cuotas ?></td>
                                </tr>
                                
                                <tr>
                                    <th scope="col">Valor cuota</th>
                                    <td><?php echo $valor_cuota ?></td>
                                    <td><?php echo $valor_cuota ?></td>
                                </tr>
                                
                                <tr>
                                    <th scope="col">Saldo</th>
                                    <td><?php echo $saldo ?></td>
                                    <td><?php echo $saldo ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Número cuotas impagas</th>
                                    <td><?php echo $numero_cuotas_impagas ?></td>
                                    <td><?php echo $numero_cuotas_impagas ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Número cuotas pagadas</th>
                                    <td><?php echo $numero_cuotas_pagadas ?></td>
                                    <td><?php echo $numero_cuotas_pagadas ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Número cuotas morosas</th>
                                    <td><?php echo $numero_cuotas_morosas ?></td>
                                    <td><?php echo $numero_cuotas_morosas ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Número cuotas castigadas</th>
                                    <td><?php echo $numero_cuotas_castigadas ?></td>
                                    <td><?php echo $numero_cuotas_castigadas ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Última cuota pagada</th>
                                    <td><?php echo $ultima_cuota_pagada ?></td>
                                    <td><?php echo $ultima_cuota_pagada ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Cartola</th>
                                    <td>
                                        <?php if( $cartola ): ?>
                                        <a href="<?php echo $cartola['url']; ?>" target="_blank">
                                            <?php echo $cartola['filename']; ?>
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if( $cartola ): ?>
                                        <a href="<?php echo $cartola['url']; ?>" target="_blank">
                                            <?php echo $cartola['filename']; ?>
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>


                                <!-- Sin valor por que no existe el refundimiento -->
                                <tr>
                                    <th scope="col">Operación refundida</th>
                                    <td><?php echo $operacion_refundida ?></td>
                                    <td><?php echo $operacion_refundida ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Fecha refundimiento</th>
                                    <td><?php echo $fecha_refundimiento ?></td>
                                    <td><?php echo $fecha_refundimiento ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Monto refundimiento</th>
                                    <td><?php echo $monto_refundimiento ?></td>
                                    <td><?php echo $monto_refundimiento ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Monto compra cartera</th>
                                    <td><?php echo $monto_compra_cartera ?></td>
                                    <td><?php echo $monto_compra_cartera ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Faena compra cartera</th>
                                    <td><?php echo $faena_compra_cartera ?></td>
                                    <td><?php echo $faena_compra_cartera ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="mayores" role="tabpanel" aria-labelledby="mayores-tab">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th scope="col">Operación 1</th>
                                    <td><?php echo $monto_2 ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Operación 2</th>
                                    <td><?php echo $monto_3 ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Operación 3</th>
                                    <td><?php echo $monto_4 ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">Monto total</th>
                                    <td class="font-weight-bold"><?php echo $monto_total ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- // Tab 3 -->
    </div>

<?php
get_footer();
