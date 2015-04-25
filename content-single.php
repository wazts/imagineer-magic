<?php
/**
 * @package Imagineer Magic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="panel panel-primary"> 
        <div class="panel-heading">
        	<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<?php imagineer_magic_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
        </div>
        <div class="panel-body"> 
        	<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'imagineer-magic' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
    	</div>
    	<div class="panel-footer">
    		<footer class="entry-footer">
				<?php imagineer_magic_entry_footer(); ?>
			</footer><!-- .entry-footer -->
    	</div>
    </div>

</article><!-- #post-## -->
