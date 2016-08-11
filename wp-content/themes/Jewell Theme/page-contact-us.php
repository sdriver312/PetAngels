<?php
/*
	Template Name: Contact Us 
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="home-content">
		<div id="ninesixty">
			<div id="photo-two">
				<img class="imagedropshadow" src="<?php echo get_template_directory_uri(); ?>/images/cat-huddle.jpg"></img>	
			</div>	
			<div id="copy">
					<h2><?php the_title(); ?></h2>
				
	<div id="text-area"> <?php echo do_shortcode('[contact-form-7 id="62" title="Contact Us"]'); ?> </div>
			</div> <!-- end copy -->
	
	</div> <!-- end ninesixty -->
						
					
</div><!-- end home-content	 -->		

<?php get_footer(); ?>