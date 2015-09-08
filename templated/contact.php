<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header();?>
<div id="contact-page" class="cf">
	<div id="contact-top" class="top2" style="background-image:url(<?php the_field('background_image'); ?>);">
        <div id="filter"></div>
		<h1><?php the_title(); ?></h1>
	</div>
	<div id="contact-body">
        <div class="grid cf">
    		<h2><?php the_field('subtitle'); ?></h2>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
	</div>
</div>
<? get_footer(); ?>