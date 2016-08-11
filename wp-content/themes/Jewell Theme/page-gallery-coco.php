<?php
/*
	Template Name: Gallery Coco
*/
?>


<?php get_header(); ?>


<?php the_post(); ?>

<div id="coco-content">
			
			<div id="ninesixty">
				<div id="gallery-thumbs">
					<h2><?php the_title(); ?></h2>
					<p><?php echo do_shortcode('[nggallery id=4]'); ?></p>
				</div>
				
			</div><!-- end ninesixty -->
			
		</div><!-- end ginger-content -->

<?php get_footer(); ?>