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
				<!-- problemmmmmmmm -->
				<a class="navbar-brand" href="#20"></a><?php echo get_the_title(20);?></a> 
			</div> <!-- Collect the nav links, forms, and other content for toggling --> 
			<div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1"> 
				<ul class="nav navbar-nav">
					<?php $args = array ('post_type' => 'page');?>
					<?php $pageloops = new WP_Query($args);?>
					<?php if ( $pageloops->have_posts() ) : while ( $pageloops->have_posts() ) : $pageloops->the_post(); ?>
					<!-- post -->
						     
						<li>
							<a href="#<?php the_ID();?>"><?php the_title();?>
								<span class="sr-only"></span>
							</a>
						</li>

						</div> 
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
		
					
				</ul> 
			</div><!-- /.navbar-collapse --> 
		</div><!-- /.container-fluid --> 
	</nav>

<div id=fullpage>
            