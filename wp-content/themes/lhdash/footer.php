<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lh-dashboard
 */

?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
	  
	  <?php
		// wp_nav_menu( array(
		// 	'theme_location'    => 'primary',
		// 	'container'         => 'div',
		// 	'menu_class'        => ''
		// ) );
		?>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Listo para irte?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "Salir" debajo si estás listo para terminar tu actual sesión.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login">Salir</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Send Modal-->
  <div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/send-ok.png" alt="" class="w-25 mt-4 mx-auto d-block" />

        <div class="modal-body text-center">
          <img src="" alt="" />
          <p class="h5 font-weight-bold">Tu solicitud se ha enviado correctamente</p>
          <p class="h5 font-weight-bold mb-4">Te contactaremos a la brevedad</p>
          <p class="mb-4">Número de ID: 2131244123</p>
          <a href="/wordpress2/" class="btn btn-warning">Volver a beneficios</a>
        </div>

      </div>
    </div>
  </div>

<!-- Bootstrap core JavaScript-->
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/demo/datatables-demo.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/demo/chart-area-demo.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/demo/chart-pie-demo.js"></script>



<?php wp_footer(); ?>

</body>
</html>
