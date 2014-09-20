<?php get_header(); ?>
		
		<div id="page">		

	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="page-content">
					
					<h1><?php the_title(); ?></h1>
			
					<?php the_content(); ?>			
		
				</div><!-- /.page-content -->

	      <?php endwhile; else: ?>

	      <?php endif; ?>
	
		</div><!-- /#page -->

<?php get_footer(); ?>