<?php
/*
	Template Name: Ginger 
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="ginger-content">
			
			<div id="ninesixty">
				<div id="button-ginger"><a href="ginger-gallery"></a></div>
				<div id="cat-copy">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
				
			</div><!-- end ninesixty -->
			
		</div><!-- end ginger-content -->

<?php get_footer(); ?>