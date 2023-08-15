
<?php
/*
Template Name: Single Educação
*/
get_header(); ?>
  
<main class="wrap">

			<?php 
			/* Start the Loop */
			while ( have_posts() ) :
		
				the_post();
				the_post_thumbnail(); 
				?>
				<div class="container">
					<div class="row">
						<div class="col-12 py-5">
							<?php the_title( '<h1 class="entry-title">', '</h1>' );  ?>
						</div>
					</div>
				</div>
				<?php
				
				the_content(); 

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main --> 
<?php get_footer();  ?>
</body>
</html>
