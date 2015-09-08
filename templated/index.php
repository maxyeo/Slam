<?php get_header();?>
<div id="splash" class="top">
	<?php if ( wp_is_mobile() ) { ?>
		<div id="splash-bg" style="background-image: url(<?php the_field('splash_bg'); ?>);"></div>
	<?php } else {?>
		<video id="slam-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" volume="0" poster="<?php the_field('splash_bg'); ?>">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/img/vid/tasa.mp4" type="video/mp4">
			<source src="" type="video/webm">
		</video>
	<?php }?>
	<div id="filter"></div>
	<div id="splash-logo" style="background-image: url(<?php the_field('splash_logo'); ?>);"></div>
	<?php if ( wp_is_mobile() ) { ?>
		<a href="#home-body">Scroll</a>
	<?php } else {?>
		<a class="play-video">Play Video</a>
		<a class="mute-video">Mute Video</a>
	<?php }?>
</div>

<div id="home-body" style="background-image: url('<?php the_field('body_background_image'); ?>');">
	<div class="grid">
		<div class="col-10-16 home-section">
			<div class="home-section-wrap">
				<h2><?php the_field('1_title'); ?></h2>
				<h3><?php the_field('1_subtitle'); ?></h3>
				<div><?php the_field('1_body'); ?></div>
			</div>
		</div>

		<div class="col-10-16 push-6 home-section">
			<div class="home-section-wrap">
				<h2><?php the_field('2_title'); ?></h2>
				<h3><?php the_field('2_subtitle'); ?></h3>
				<div><?php the_field('2_body'); ?></div>
			</div>
		</div>

<!-- 		<div class="col-10-16 push-2 home-section">
			<div class="home-section-wrap">
				<h2><?php the_field('3_title'); ?></h2>
				<h3><?php the_field('3_subtitle'); ?></h3>
				<div><?php the_field('3_body'); ?></div>
			</div>
		</div>

		<div class="col-10-16 push-6 home-section">
			<div class="home-section-wrap">
				<h2><?php the_field('4_title'); ?></h2>
				<h3><?php the_field('4_subtitle'); ?></h3>
				<div><?php the_field('4_body'); ?></div>
			</div>
		</div> -->
	</div>
	<div id="filler">
		<a href="<?php the_field('link'); ?>"><?php the_field('link_name'); ?></a>
	</div>
</div>
<? get_footer(); ?>