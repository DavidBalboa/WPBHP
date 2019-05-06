<?php
/*
    Template Name: Login
 */


get_header("front");
?>
<script type="text/javascript">
/*function validaLogin()	{

	var log = 
	var pwd =

	alert(id); return false;
}*/
</script>
<div class="container">	
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-xs-12" id="form-principal">
				<div class="form-box">
					<div class="form-login" id="form-login">
							<span class="form-title">
								<h3>Ingreso a portal</h3>
							</span>
							<span class="form-text">
								<p>Para ingresar al portal, a continuación debe
							completar la siguiente información.</p>
							</span>
						<!--form action="#" method="post">
							<span class="form-title">
								<h3>Ingreso a portal</h3>
							</span>
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
				                <button type="button" class="btn btn-login-submit" data-toggle="modal" data-target="#errorModal">Ingresar</button>
				                <button type="button" class="btn btn-login-submit">Ingresar</button>
				            	<div class="form-text-rc" id="btn-recupera-clave">Recuperar contraseña</div>
				            </div>
			        	</form-->

<?php
			        	//echo do_shortcode ("[do_widget id=loginwithajaxwidget-2]"); 
login_with_ajax();
?>
			        </div>	
				</div>
			</div>
		</div>
	</div>
</div>

</div>

</body>
</html>
<?php



get_footer("front");
?>


