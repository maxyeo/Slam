<?php
/*
Template Name: Media Template
*/
?>
<?php get_header();?>
<div id="media-page" class="cf">
	<div id="media-top" class="top2" style="background-image:url(<?php the_field('background-image'); ?>);">
		<div id="filter"></div>
		<h1><?php the_title(); ?></h1>
	</div>
	<h2><?php the_field('video_title'); ?></h2>
	<div class="grid">
		<?php 
		$posts = get_field('videos');
		if( $posts ): ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<div class="col-10-16 push-3 video">
					<div><?php the_field('embed_code'); ?></div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>
	<h2><?php the_field('photo_title'); ?></h2>
	<div class="grid">
		<?php 
		$posts = get_field('albums');
		if( $posts ): ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<a href="<?php the_field('link'); ?>" target="_blank" class="col-1-2 photo">
					<div class="photo-wrap">
						<div style="background-image: url('<?php the_field('thumbnail'); ?>');"></div>
					</div>
					<h3><?php the_title(); ?></h3>
				</a>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>
</div>
<? get_footer(); ?>