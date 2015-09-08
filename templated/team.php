<?php
/*
Template Name: Team Template
*/
?>
<?php get_header();?>
<div id="team-page" class="cf">
	<div id="team-top" class="top2" style="background-image:url(<?php the_field('background_image'); ?>);">
		<h1><?php the_title(); ?></h1>
	</div>
	<h2><?php the_field('e-board_title'); ?></h2>
	<?php 
	$posts = get_field('e-board_members');
	if( $posts ): ?>
		<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<div class="mate" style="background-image: url(<?php the_field('name'); ?>);">
				<div>
					<h3><?php the_title(); ?></h3>
					<h4><?php the_field('position'); ?></h4>
				</div>
			</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
	<h2><?php the_field('member_title'); ?></h2>
	<?php 
	$posts = get_field('members');
	if( $posts ): ?>
		<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<div class="mate" style="background-image: url(<?php the_field('name'); ?>);">
				<div>
					<h3><?php the_title(); ?></h3>
					<h4><?php the_field('position'); ?></h4>
				</div>
			</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
</div>
<? get_footer(); ?>