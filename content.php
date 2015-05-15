<?php
/**
 * @package Imagineer Magic
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-main">
		<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php $img_url= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1000,1000 ), false ); ?>
				<a href="<?php the_permalink(); ?>">
					<div class="entry-thumb" style="background-image: url('<?php echo $img_url[0]; ?>')">
					</div>
				</a>
			<?php endif; ?>
			<div class="horizontal-red"></div>
			<div class="home-post-title">
				<?php the_title( sprintf( '<span class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
			</div>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_excerpt();
			?>
			<span class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></span>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'imagineer-magic' ),
					'after'  => '</div>',
				) );
			?>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<i class="fa fa-clock-o color-red"></i> <span class="content-date"><?php imagineer_magic_posted_on(); ?></span> | 
				<i class="fa fa-user color-red"></i> <?php imagineer_magic_posted_by(); ?>
				<span class="pull-right">
					<i class="fa fa-comment"></i>
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
				</span>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div><!-- .entry-content -->
	</div><!-- .entry-main -->
	<footer>
	</footer>
</article><!-- #post-## -->
