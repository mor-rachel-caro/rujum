<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rujum
 */

get_header(); ?>

    <!-- PAGE LOOP -->
		<?php $args = array(
			'post_type' => 'page', 
			'order' => 'ASC',
			'orderby'	=> 'menu_order'
		);?>
		<?php $pageloops = new WP_Query($args);?>
		
		<?php 
				global $i;
				global $howmuchpages;
				$howmuchpages = $pageloops->post_count; 
				$i = 1;
		?>

		<?php if ( $pageloops->have_posts() ) : while ( $pageloops->have_posts() ) : $pageloops->the_post(); ?>
		<!-- post -->
			
			<?php 	$slug = get_page_template_slug();
					$slugwithoutphp = substr($slug, 0, strpos($slug, '.php'));

					if ($slug == '') {
						get_template_part('page');
					} else {
						get_template_part($slugwithoutphp);
					}

			?>

			 <?php $i = $i +1;?>





		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

  
		<?php 
		
get_footer();
?>