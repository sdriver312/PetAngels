<?php get_header(); ?>

	<?php the_post(); ?>

<div id="home-content">
			
			<div id="ninesixty">
			
				<div id="copy">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>

  <a href="our_story.html"><em>Keep Reading "Our Story"</em></a>
				</div><!-- end copy -->
				
				<div id="photo">
					
						<img src="<?php echo get_template_directory_uri(); ?>/images/us.jpg" alt="us" width="387" height="353">
						
				</div><!-- end photo -->
									
			</div><!-- end ninesixty -->
			
		</div><!-- end home-content -->
	</div>


<?php get_footer(); ?>

<?php get_footer(); ?>