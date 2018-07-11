<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo(); ?></title>
	<meta charset="utf-8">
	<meta name="viewport">
	<?php wp_head(); ?>
</head>
<body>

<!-- Navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	  <a class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latam_logo.png"></a>
	  <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white" title="Equipo" href="#">Equipo</a></li>
        <li class="nav-item"><a class="nav-link text-white" title="Blog" href="#">Blog</a></li>
        <li class="nav-item"><a class="nav-link text-white" title="Contacto" href="#">Contacto</a></li>
      </ul>
	</nav>