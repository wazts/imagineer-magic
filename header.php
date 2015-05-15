<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Imagineer Magic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="page-header">
		<nav class="navbar navbar-imagineer">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="primary-navbar">
					<?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => '',
							'container_class'   => '',
							'container_id'      => '',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>
					<form method="get" id="search-form" class="navbar-form navbar-right" role="search" action="<?php bloginfo('home'); ?>/">
						<div class="form-group">
							<input type="text" class="search-header" placeholder="Search" name="s" id="s" />
							<i class='fa fa-search'></i>
						</div>
					</form>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) : ?>
				<?php if ( is_singular() && has_post_thumbnail( $post->ID ) ) :
					$header_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full')[0];
			endif; ?>
		<?php endif; ?>
		<div id="header-image" style="background-image: url('<?php echo $header_image ?>')"></div>
	</header>
	
	<div id="content" class="site-content">
