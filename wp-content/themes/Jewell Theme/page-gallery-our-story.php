<?php
/*
	Template Name: Gallery Our Story
*/
?>


<?php get_header(); ?>


<?php the_post(); ?>

<div id="home-content">
			
			<div id="ninesixty">
					<h2 class="margin"><?php the_title(); ?></h2>
					<p><?php echo do_shortcode('[nggallery id=7]'); ?></p>				
			</div><!-- end ninesixty -->
			
		</div><!-- end ginger-content -->

<?php get_footer(); ?>