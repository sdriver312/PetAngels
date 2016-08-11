<?php
/*
	Template Name: Our Story 
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="us-content">
			
			<div id="ninesixty">
			
				<div id="photos-left">
					<img class="imagedropshadow" src="<?php echo get_template_directory_uri(); ?>/images/us_pic1.jpg"></img>
					<img class="imagedropshadow" src="<?php echo get_template_directory_uri(); ?>/images/us_pic4.jpg"></img>
					<img class="imagedropshadow" src="<?php echo get_template_directory_uri(); ?>/images/us_pic5.jpg"></img>
					<img class="imagedropshadow" src="<?php echo get_template_directory_uri(); ?>/images/us_pic6.jpg"></img>
					<div id="button-us"><a href="our-journey-in-pictures">xxx</a></div>	
				</div>
				
				<div id="cat-copy">
					<h2><?php the_title(); ?></h2>
					
					<p><?php the_content(); ?></p> 

				</div>
				
			</div><!-- end ninesixty -->
			
		</div><!-- end ginger-content -->
		
	</div><!-- end site-wrap -->
	
<?php get_footer(); ?>

</div><!-- end page-wrap -->