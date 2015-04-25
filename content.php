<?php
/**
 * @package Imagineer Magic
 */
?>

<div class="col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumb">
					
					<?php $default_attr = array(
							'class' => "img-responsive entry-thumb-img"
						);
				the_post_thumbnail('large', $default_attr); ?>
				</div>
				<?php endif; ?>
				<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php imagineer_magic_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		
			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'imagineer-magic' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>
		
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'imagineer-magic' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>