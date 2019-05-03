<?php
/*
    Template Name: Solicitudes
 */


get_header();
?>

    <!-- Page Heading -->
	<h4>Nueva solicitud</h4>

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-xs-12" id="form-principals">
				<div class="form-box">
					<div class="form-login" id="form-login">
						<form action="#" method="post">
							<span class="form-text">
								<p>Para ingresar al portal, a continuación debe
							completar la siguiente información.</p>
							</span>
							<div class="form-group"><p>RUT</p>
								<input type="text" name="rut" class="form-control login">
							</div>
							<div class="form-group"><p>Clave</p>
								<input type="password" name="password" class="form-control login">
							</div>
				            <div class="col-md-12 col-xs-12 btn-submit">
				                <button type="button" class="btn btn-login-submit">Enviar</button>
				            </div>
			        	</form>
			        </div>	
				</div>
			</div>
		</div>
	</div>

<?php



get_footer();