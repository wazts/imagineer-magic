<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Imagineer Magic
 * 
 * Template Name: Site Archive
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php get_search_form(); ?>
		    <h2>Archives by Month:</h2>
		    <ul>
		        <?php wp_get_archives('type=monthly'); ?>
		    </ul>   
		    <h2>Archives by Subject:</h2>
		    <ul>
		        <?php wp_list_categories(); ?>
		    </ul>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>