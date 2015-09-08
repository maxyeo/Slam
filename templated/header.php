<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">

		<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="Max Yeo">

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">

		<meta property="og:title" content="SLAM Hip Hop Dance Group"/>
		<meta property="og:url" content="http://slam.jhu.edu/"/>
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.jpg"/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:description" content=""/>
		<?php wp_head(); ?>
	</head>

	<body>

		<header class="<?php if (is_front_page()) { ?>home<?php } ?>">
			<nav class="navup">
				<!-- <li><a href="team.html">Team</a></li>
				<li><a href="events.html">Events</a></li> -->
				<?php 
					$args = array(
					'theme_location' => 'leftnav',
					'container' => '',
					'items_wrap' => '%3$s'
				);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
			<a href="/" id="logo" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo-mini.png);"></a>
			<nav class="navdo">
				<!-- <li><a href="media.html">Media</a></li>
				<li><a href="contact.html">Contact</a></li> -->
				<?php 
					$args = array(
					'theme_location' => 'rightnav',
					'container' => '',
					'items_wrap' => '%3$s'
				);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
			<i id="nav-bar" class="fa fa-bars"></i>
			<i id="nav-out" class="fa fa-times"></i>
		</header>