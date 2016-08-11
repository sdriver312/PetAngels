<?php get_header(); ?>
	
	<div id="blog-content">
		<div id="ninesixty">
			<div id="blog-area">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						
						<h2><?php the_title(); ?></h2>
						<div><h6><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></h6></div>

						<div class="entry">
							
							<p><?php the_content(); ?></p>

							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
							
							<?php the_tags( 'Tags: ', ', ', ''); ?>

						</div>
						
						<?php edit_post_link('Edit this entry','','.'); ?>
						
					</div>

				

				<?php endwhile; endif; ?>
				<?php comments_template(); ?>
				
				</div>

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
	
	</div> <!-- end ninesixty -->
		
</div><!-- end blog-content	 -->	

<?php get_footer(); ?>