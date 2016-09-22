<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rujum
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

    <div class=nextsection>
        <a href=#> <i class="fa fa-angle-down fa-4x wow animated bounce infinite" data-wow-duration=2s data-wow-delay=5s aria-hidden=true></i> </a>
    </div>


	<nav class="navbar navbar-default navbar-fixed-top"> 
		<div class="container-fluid"> <!-- Brand and toggle get grouped for better mobile display --> 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
					<span class="sr-only">הצגת ניווט</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button> 
				<!-- get the pages with page template and echo its title -->
				<?php $template_args = array(
				    'post_type' => 'page',
				    'fields' => 'ids',
				    // 'nopaging' => true,
				    'meta_key' => '_wp_page_template',
				    'meta_value' => 'template-first-page.php'
				);
				$array_of_firstpage_template = get_posts( $template_args );
				foreach ( $array_of_firstpage_template as $page_id ){?>
					
					<a class="navbar-brand" href="#home"><?php echo get_the_title($page_id);?></a> 
				<?php }?>

			</div> <!-- Collect the nav links, forms, and other content for toggling --> 
			<div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1"> 
				<ul class="nav navbar-nav">
					<?php $args = array(
						'post_type' => 'page', 
						'order' => 'ASC',
						'orderby'	=> 'menu_order',
						'meta_query' => array(
							array(
								'key'	=> '_wp_page_template',
								'value'	=> 'template-first-page.php',
								'compare'	=> '!='
							) 
						)
					);?>
					<?php $pageloops = new WP_Query($args);?>
					<?php if ( $pageloops->have_posts() ) : while ( $pageloops->have_posts() ) : $pageloops->the_post(); ?>

						<!-- only not first page -->
							<li>
								<a href="#<?php the_ID();?>"><?php the_title();?>
									<span class="sr-only"></span>
								</a>
							</li>
						
						
						     

					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

				</ul> 
			</div><!-- /.navbar-collapse --> 
		</div><!-- /.container-fluid --> 
	</nav>

<div id=fullpage>
            