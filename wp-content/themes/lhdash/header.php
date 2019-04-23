<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lh-dashboard
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Custom fonts for this template-->
  <link href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lh-dashboard' ); ?></a>

	<body id="page-top">

    <?php // Page Wrapper ?>
    <div id="wrapper">

      <?php if ( is_front_page() || is_page('empleados') || is_page('empleados-beneficios') || is_page('empleados-detalle') || is_page('empleados-solicitar') ) : ?>
      <ul class="navbar-nav sidebar sidebar-light bg-white" id="accordionSidebar">

        <?php // Sidebar - Brand ?>
        <a class="sidebar-brand d-flex mb-4" href="#">
          <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/bhp_logo.png" alt="" class="img-responsive" />
        </a>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-chart-bar"></i>
            <span>Empleados</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/wordpress2/?page_id=37">
            <i class="fas fa-fw fa-gift"></i>
            <span>Beneficios</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-wifi"></i>
            <span>Difusión</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-comments"></i>
            <span>Campañas</span>
          </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Solicitudes</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-bell"></i>
            <span>Notificaciones</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Calendario</span>
          </a>
        </li>

      </ul>
      <?php endif; ?>

      <?php if ( is_page('soporte') ) : ?>
      <ul class="navbar-nav sidebar sidebar-light bg-white" id="accordionSidebar">

        <?php // Sidebar - Brand ?>
        <a class="sidebar-brand d-flex mb-4" href="#">
          <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/bhp_logo.png" alt="" class="img-responsive" />
        </a>

        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Solicitudes</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-headphones-alt"></i>
            <span>Empleado</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-chart-bar"></i>
            <span>Reportes</span>
          </a>
        </li>
      </ul>
      <?php endif; ?>

      <?php if ( is_page('proveedores') ) : ?>
      <ul class="navbar-nav sidebar sidebar-light bg-white" id="accordionSidebar">

        <?php // Sidebar - Brand ?>
        <a class="sidebar-brand d-flex mb-4" href="#">
          <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/bhp_logo.png" alt="" class="img-responsive" />
        </a>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-chart-bar"></i>
            <span>Reportes</span>
          </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Solicitudes</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-gift"></i>
            <span>Beneficios</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-dollar-sign"></i>
            <span>Rendición</span>
          </a>
        </li>


      </ul>
      <?php endif; ?>

      <?php // Content Wrapper ?>
      <div id="content-wrapper" class="d-flex flex-column">

      <?php // Main Content ?>
        <div id="content">

          <?php if ( is_front_page() || is_page('empleados') || is_page('soporte') || is_page('proveedores') || is_page('empleados-beneficios') || is_page('empleados-detalle') || is_page('empleados-solicitar') ) : ?>

          <?php // Topbar ?>
          <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top border-bottom">

            <?php // Sidebar Toggle (Topbar) ?>
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <?php // Topbar Search ?>
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-transparent border-0 small" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <?php // Topbar Navbar ?>
            <ul class="navbar-nav ml-auto">

            <?php // Nav Item - Search Dropdown (Visible Only XS) ?>
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

              <?php // Dropdown - Messages ?>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-transparent border-0 small" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-secondary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <?php // Nav Item - Alerts ?>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <?php // Counter - Alerts ?>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>

              <?php // Dropdown - Alerts ?>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">Hace 14 horas</div>
                    <h6 class="font-weight-bold text-uppercase text-warning">Inscripciones</h6>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                  </div>
                </a>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">Hace 14 horas</div>
                    <h6 class="font-weight-bold text-uppercase text-warning">Inscripciones</h6>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                  </div>
                </a>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">Hace 14 horas</div>
                    <h6 class="font-weight-bold text-uppercase text-warning">Inscripciones</h6>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas las notificaciones</a>
              </div>
            </li>

            <?php // Nav Item - User Information ?>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded mr-1" src="https://source.unsplash.com/QAB-WJcbgJk/100x100">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  Victoria Soto de la Vega
                  <small class="d-lg-block">Empleado afiliado y mas texto</small>
                </span>
              </a>

              <?php // Dropdown - User Information ?>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuración
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Actividad
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>

            </ul>

          </nav>
          <?php // End of Topbar ?>

          <?php endif; ?>

          <?php // Begin Page Content ?>
          <div class="container-fluid">