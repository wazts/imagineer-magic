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
		    <?php 
		    
			    $categories = get_categories(
		    		array (
		    			'orderby' => 'name',
						'parent' => 0	
		    		)
		    	);
		    	
		    	$col = 0;
		    	
		    ?>
		    <?php foreach ($categories as $category): ?>
		    	<?php if ($col % 3 == 0): ?>
		    		<div class="row">
		    	<?php endif; ?>
				    	<div class="col-md-4 cat-group">
					    	<a href="<?php echo esc_url( get_category_link($category->cat_ID)); ?>"><h2><?php echo $category->name; ?></h2></a>
					    	<ul>
						        <?php wp_list_categories('child_of=' . $category->cat_ID . '&title_li='); ?>
						    </ul>
					    </div>
					    <?php $col = $col + 1; ?>
			    <?php if ($col % 3 == 0): ?>
			    	</div>
			    <?php endif; ?>
			    
		    <?php endforeach; ?>
		 

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>