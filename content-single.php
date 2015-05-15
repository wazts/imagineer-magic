<?php
/**
 * @package Imagineer Magic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<header class="entry-header single-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-meta">
				<i class="fa fa-clock-o color-red"></i> <span class="content-date"><?php imagineer_magic_posted_on(); ?></span> | 
				<i class="fa fa-user color-red"></i> <?php imagineer_magic_posted_by(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
    	<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'imagineer-magic' ),
					'after'  => '</div>',
				) );
			?>
			<footer class="entry-footer">
				<?php imagineer_magic_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div><!-- .entry-content -->


</article><!-- #post-## -->
