<?php
/*
	Template Name: Nugget 
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="nugget-content">
			
			<div id="ninesixty">
				<div id="button-nugget"><a href="nugget-gallery">hello</a></div>
				<div id="cat-copy">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?> </p> 
				</div>
				
			</div><!-- end ninesixty -->
			
		</div><!-- end ginger-content -->
		
	</div><!-- end site-wrap -->

</div><!-- end page-wrap -->


<?php get_footer(); ?>

