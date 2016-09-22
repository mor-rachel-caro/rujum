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
?>
<section id=what data-bg=red data-anchor=<?php the_ID();?>>
    <div class=container-fluid>
        <div class="col-md-10 col-md-offset-1">
            <h3 class="text-center wow fadeInDownBig strip">
            	<?php the_field('page_heading');?>	
        	</h3>
        	<h4 class=text-center><?php the_field('sub_heading');?></h4>

            <p class="text-center wow slideInRight">
	           	<?php the_content();?>
           	</p>
             <div class="socials text-left">
                <a href=mailto:rujumprogram@gmail.com> <i class="fa fa-envelope fa-2x wow slideInUp" aria-hidden=true></i> </a>
                <!-- <a href=""> -->
                <!-- <i class="fa fa-instagram fa-2x wow slideInUp" data-wow-delay=".1s" aria-hidden="true"></i> -->
                <!-- </a> -->
                <a href="https://www.facebook.com/rujumprogram/"> <i class="fa fa-facebook-official fa-2x wow slideInUp" data-wow-delay=.3s aria-hidden=true></i> </a>
                <a href=callto:+972-546738620> <i class="fa fa-phone fa-2x wow slideInUp" data-wow-delay=.4s aria-hidden=true></i> </a>
            </div>
        </div>
    </div>
</section>


