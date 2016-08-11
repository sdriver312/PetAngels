<?php
/*
	Template Name: Gallery Cem
*/
?>


<?php get_header(); ?>


<?php the_post(); ?>

<div id="cem-content">
			
			<div id="ninesixty">
				<div id="gallery-thumbs">
					<h2><?php the_title(); ?></h2>
					<p><?php echo do_shortcode('[nggallery id=3]'); ?></p>
				</div>
				
			</div><!-- end ninesixty -->
			
		</div><!-- end cem-content -->

<?php get_footer(); ?>