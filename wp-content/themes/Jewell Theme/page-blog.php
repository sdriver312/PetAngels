<?php
/*
	Template Name: Blog 
*/
?>		
<?php get_header(); ?>
		
		<div id="blog-content">
			
			<div id="ninesixty">
			
				<div id="blog-area">
				
				<?php query_posts('posts_per_page=5'); ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<h2><?php the_title(); ?></h2>
					<h3 class="blog"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></h3>
					<p><?php the_content(); ?></p>
<p><a href="<?php the_permalink(); ?>">Leave A Comment</p></a>
<p class="dots-blog"></p>
				
				<?php endwhile; ?>

				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

				<?php else : ?>

					<h2>Not Found</h2>

				<?php endif; ?>

				
				</div><!-- end blog-area -->
				
				<div id="sidebar">
					
						<div id="side-container">
				
							<div class="latest-posts"></div>
							<?php query_posts('posts_per_page=5'); ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<!-- <div <?php post_class() ?> id="post-<?php the_ID(); ?>"> -->

								<p class="post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
								
								<!-- </div> -->

						<?php endwhile; ?>

						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

						<?php else : ?>

							<h2>Not Found</h2>

						<?php endif; ?>
							
							<div class="archive"></div>
							
								<a class="post" href="<?php get_archives(); ?>"><?php wp_get_archives('format=custom&before=<p class="post">&after=</p>&type=monthly'); ?></a>
						
						
						</div><!-- end side-container-->
							
					</div><!-- end sidebar-->	
	
				<div id="clear"></div>
				
									
			</div><!-- end ninesixty -->
			
		</div><!-- end blog-content -->
		
<?php get_footer(); ?>