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
	<!-- favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon.png">

	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
	<!-- Bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />

	<!-- fontAwsome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">

	<!-- daterangepicker styles -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>

	<!-- stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- header section start -->
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light px-5 fixed-top">
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img class="travel-logo" src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt=""></a>
				<button class="navbar-toggler bg-light" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
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

							<?php
							$fb = get_field('facebook_link', 'option');
							?>
							<?php if ($fb) : ?>
								<div class="social-media">
									<a class="nav-link" href="<?php echo $fb; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
								</div>
							<?php endif; ?>
							<?php
							$insta = get_field('instagram_link', 'option');
							?>
							<?php if ($insta) : ?>
								<div class="social-media">
									<a class="nav-link" href="<?php echo $insta; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
								</div>
							<?php endif; ?>
							<?php
							$twit = get_field('twitter_link', 'option');
							?>
							<?php if ($twit) : ?>
								<div class="social-media">
									<a class="nav-link" href="<?php echo $twit; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
								</div>
							<?php endif; ?>
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