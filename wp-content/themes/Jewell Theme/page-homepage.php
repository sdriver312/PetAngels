<?php
/*
	Template Name: Homepage 
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="home-content">
			
			<div id="ninesixty">
			
				<div id="copy">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>

  <a href="petadoptionangels.com/our-story"><em>Keep Reading "Our Story"</em></a>
				</div><!-- end copy -->
				
				<div id="photo">
					
						<img src="<?php echo get_template_directory_uri(); ?>/images/us.jpg" alt="us" width="387" height="423">
						
				</div><!-- end photo --><div id="clear"></div>
				<div id="afternote"><p class="medium-italic">This website will in due time become a resource site listing the wonderful shelters we have visited or researched as reputable and deserving and/or needing of sponsors. Many of these shelters could not possibly exist if it wasn't for the generous donations of animal lovers around the world. Some shelters also offer an adoption program for animals needing a forever home. We will be providing comprehensive information on how to do this and flying rules for most international airlines. Until then please enjoy the stories of our pets and please pass our site on to anyone you think would be interested in adopting.</p><p class="separater"></p>
<p class="small-italic">Jacqui and George Steers, January 2013</div>

			</div><!-- end ninesixty -->
			
		</div><!-- end home-content -->
	</div>


<?php get_footer(); ?>