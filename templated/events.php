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
		<div id="event-showcase" class="col-14-16 push-1">
			<div id="header" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/showcase15/cover.png);"></div>
			<h3>The 8th Annual Hip Hop Showcase & Benefit</h3>
			<p>
				Friday, November 13th, 2015<br>
				7:30PM in Shriver Hall, Johns Hopkins University<br>
				Doors open at 7:15PM
			</p>
			<p>Checkout the <a href="https://www.facebook.com/events/1663440483871237/" target="_blank">Facebook Event!</a></p>
			<span class="sexy-line"></span>
			<p>Our Annual Hip Hop Showcase is a benefit for a local Baltimore non-profit, Baltimore Dance Crews Project. A local start-up, this organization's main goal is to offer free dance lessons to the children of Baltimore, and to encourage the performance art of hip hop dance.</p>
			<p>Proceeds will benefit the Baltimore Dance Crews Project. If you are unable to attend, please consider donating online by going to this <a href="http://www.baltimoredcp.org/slam-benefit-concert.html" target="_blank">website</a> and clicking on "Make A Contribution".</p>
			<p>Come watch SLAM and some of the HOTTEST COLLEGE AND PROFESSIONAL hip hop dance teams in the DMV area perform for a great cause.</p>
			<p>SLAM is featuring the following dance groups:<br>
				JHU Breakers<br>
				JHU Eclectics<br>
				Funk Justice<br>
				Phunktions<br>
				BDCP Collective<br>
				Major Def<br>
				Kickrocks Crew<br>
				DyNaMic<br>
				The Dance Institute of Washington<br>
				Coverboy<br>
				Crewcial<br>
				The Set<br>
				Culture Shock DC<br>
				BDCP Juniors
			</p>
			<span class="sexy-line"></span>
			<h4>Pre-sale Tickets</h4>
			<p class="tix">
				We are selling a limited number of discounted tickets ($4) at the Breezeway on T11/3, W11/4, F11/6, M11/9, & TH11/12 from 11 AM - 2 PM.<br>
				J-Cash accepted!<br>
				Or find a SLAM Member!
			</p>
			<h4>Tickets (<a href="http://jhutickets.universitytickets.com/user_pages/event.asp?id=392&cid=71" target="_blank">online</a>):</h4>
			<p class="tix">$7 for Everyone</p>
			<h4>Tickets (at the door):</h4>
			<p class="tix">
				$7 for Everyone<br>
				J-Cash will be accepted!
			</p>
		</div>
		<!--
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
		-->
	</div>
</div>
<? get_footer(); ?>