<?php
/*
    Template Name: Nuevo-reclamo
 */


// Advanced Custom Fields
//$         = get_field('');

get_header();
?>
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
                        <form id="form">
                            <div class="form-group">
                                <label>Título reclamo</label>
                                <input type="text" class="form-control" id="reclamoTitulo" required/>
                            </div>
                            <div class="form-group">
                                <label>Motivo de reclamo</label>
                                <select class="form-control select" id="motivoReclamo" required>
                                <option value="0">Seleccione un motivo de reclamo</option>
                                <option value="00001">Salud</option>
                                <option value="00002">Entretención</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>                
                                <textarea class="form-control" rows="6" placeholder="Ingresar descripción ..." id="reclamoObservacion" required></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="hidden" class="form-control" id="beneficiarioId" value="14634025"/>
                                <input type="hidden" class="form-control" id="empresaId" value="1"/>
                                <button type="button" class="btn btn-send" onclick="enviaReclamo()">Enviar</button>
                            </div>
                        </form>
                    </div>
                    </section>
       


<?php
get_footer();
