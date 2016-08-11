<?php
/*
	Template Name: Felix 
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="felix-content">
			
			<div id="ninesixty">
				<div id="button-felix"><a href="felix-gallery">hello</a></div>
				<div id="cat-copy">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?> </p> 
				</div>
				
			</div><!-- end ninesixty -->
			
		</div><!-- end ginger-content -->
		
	</div><!-- end site-wrap -->

</div><!-- end page-wrap -->


<?php get_footer(); ?>