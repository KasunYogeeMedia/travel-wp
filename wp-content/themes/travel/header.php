<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />

	<!-- fontAwsome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	
	
	<!-- stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css">
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- header section start -->
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light px-5 fixed-top">
				<a class="navbar-brand" href="#">Logo Here</a>
				<button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="main-menu">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
					?>

					<div class="social-media-icon">
						<ul class="navbar-nav sm-icons social-icons pt-md-22 px-md-2 d-inline">

							<div class="social-media">
								<a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
							</div>

							<div class="social-media">
								<a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<div class="social-media">
								<a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
							</div>
						</ul>
					</div>
				</div>
			</nav>
			<!-- <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light px-5 fixed-top">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'travel'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'level' => 2,
					)
				);
				?>
			</nav> -->
		</div>
	</header>
	<!-- header section end -->