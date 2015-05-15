<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Imagineer Magic
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
		  
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
        				<?php
        					the_archive_title( '<h1 class="page-title">', '</h1>' );
        					the_archive_description( '<div class="taxonomy-description">', '</div>' );
        				?>
	    		    </header><!-- .page-header -->
					<?php $post_count=0; /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
	
					<div class="row">
						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
								
						?>
					</div>
					<?php $post_count = $post_count + 1; /* We increments the posts */?>
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>
		
				<?php else : ?>
		
					<?php get_template_part( 'content', 'none' ); ?>
		
				<?php endif; ?>
		
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>
