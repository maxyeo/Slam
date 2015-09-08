<?php
/*
Template Name: Events Template
*/
?>
<?php get_header();?>
<div id="events-page" class="cf">
	<div id="events-top" class="top2" style="background-image:url(<?php the_field('background_image'); ?>);">
		<div id="filter"></div>
		<h1><?php the_title(); ?></h1>
	</div>
	<div id="events-list" class="grid">
		<h2 class="col-14-16 push-1"><?php the_field('subtitle'); ?></h2>
		<?php 
		$posts = get_field('events');
		if( $posts ): ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<div class="col-14-16 push-1 event" style="background-image: url('<?php the_field('image'); ?>'); background-color: <?php the_field('filter'); ?>;">
					<div class="event-border">
						<h3><?php the_title(); ?></h3>
						<h5><?php the_field('time'); ?><span><?php the_field('date'); ?></span></h5>
						<h6><?php the_field('place'); ?></h6>
						<h4><?php the_content(); ?></h4>
						<p></p>
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>
</div>
<? get_footer(); ?>