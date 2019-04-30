<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>.:: <?=bloginfo('name')?> ::.</title>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/style-frontend.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/vendor/fontawesome-free/css/all.min.css">
	<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/popper.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/functions.js"></script>
</head>

<body>	     
<?php
/*
wp_nav_menu( array(
'theme_location' => 'top',
'menu_id' => 'front-menu',
) );
*/
?>
<div class="wrapper">
<nav class="navbar navbar-default front">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
          <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/img/logo/bhp_logo.svg">
        </a>
    </div>
    <div class="menu">
		<ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link active" href="#">NOSOTROS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">BENEFICIOS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">CRÉDITOS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">SEGUROS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">AYUDA</a>
			</li>
		</ul>
	</div>
	<div class="search">
		<div class="search-icon">
			<i class="fas fa-fw fa-search"></i>
		</div>
		<div class="search-btn">
			<button class="btn btn-block btn-in">Ingresar aquí</button>
		</div>
	</div>
  </div>
</nav>




