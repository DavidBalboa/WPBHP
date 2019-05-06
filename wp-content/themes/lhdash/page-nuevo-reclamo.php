<?php
/*
    Template Name: Nuevo-reclamo
 */


// Advanced Custom Fields
//$         = get_field('');



get_header();



$wp_users = wp_get_current_user();
?>
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/js/enviaReclamo.js"></script>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="col-md-12">
            	<!--div class="col-md-1">
            		<img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/icon-menu/arrow-left.svg" class="back">
            	</div-->
            	<div class="col-md-12">	
        			<h1 class="h3 mb-0">Nuevo reclamo</h1>
            	</div> 
            </div>	 
    </div>


    <section class="content">
        <div class="col-md-6">
            <form id="form" method="post">
                <div class="form-group">
                    <label>Título reclamo</label>
                    <input type="text" class="form-control" name="reclamoTitulo" id="reclamoTitulo" required/>
                </div>
                <div class="form-group">
                    <label>Motivo de reclamo</label>
                    <select class="form-control select" id="motivoReclamoId" required>
                    <option value="0">Seleccione un motivo de reclamo</option>
                    <option value="00001">Reembolso</option>
                    <option value="00002">Gimnasio</option>
                    <option value="00003">Proceso de Licencias Médicas y Recuperos</option>
                    <option value="00004">Masajes</option>
                    <option value="00005"> Exámenes Clinica</option>
                    <option value="00006"> Sala Cuna</option>
                    <option value="00007">Transfer Allowance / Mudanza</option>
                    <option value="00008">Beca Escolar</option>
                    <option value="00009">Plan Habitacional</option>
                    <option value="00010">Sala Cuna Reserva de Cupos</option>
                    <option value="00011">Social assistance with Crecer: Emergency, Catastrophe, alcohol and drugs</option>
                    <option value="00012">Crecer Cartas de Garantía</option>
                    <option value="00013">Centros Recreacionales</option>
                    <option value="00014">Asistencia Social with Crecer: Emergency, Catastrophe, alcohol and drugs</option>
                    <option value="00015">Dividendos Shareplus</option>
                    <option value="00016">Otros</option>
                    <?php
                        /*global $wpdb;
                        $results = $wpdb->get_results("SELECT * FROM $wpdb->categorias");
                        var_dump($results);
                        foreach ($results as $result) {
                            echo '<option value="'.$result->categoriaId.'">'.$result->Nombre.'</option>';
                        }
						global $wpdb;
                        $results = $wpdb->get_results("SELECT * FROM $wpdb->users");
                        foreach ($results as $result) {
                            echo '<option value="'.$result->ID.'">'.$result->user_nicename.'</option>';
                        }
                        */
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Descripción</label>                
                    <textarea class="form-control" rows="6" name="reclamoObservacion" placeholder="Ingresar descripción ..." id="reclamoObservacion" required></textarea>
                </div>
                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" name="beneficiarioId" id="beneficiarioId" value="<?=$wp_users->wp_user_rut?>"/>
                    <input type="hidden" class="form-control" name="empresaId" id="empresaId" value="<?=$wp_users->wp_empresaId?>"/>
                    <!--button type="button" class="btn btn-send" onclick="enviaReclamo()">Enviar</button-->
                    <button type="button" class="btn btn-send" onclick="enviaForm()">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-md-6" id="respuesta">
            
        </div>
        </section>

					<!-- Modal -->
					<div class="modal fade" id="reclamoModal" tabindex="-1" role="dialog" aria-labelledby="reclamoModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="reclamoModalLabel">Aviso de reserva</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="llamaModal()">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <h2>¡Muchas gracias!</h2>
                  ¡Su solicitud ha sido enviada con éxito! A la brevedad nos pondremos en contacto para responderle, con una <strong>confirmación</strong> u <strong>otras fechas disponibles.</strong> En esa respuesta se le entregará un <strong>código</strong>, que <strong>corrobora que su visita está agendada.</strong>

                  <p>Si esta respuesta no llegara a la bandeja de entrada de su mail, le sugerimos revisar en la bandeja de spam.</p>  
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- Modal -->



<?php
get_footer();
