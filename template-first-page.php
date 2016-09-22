<?php
/**
 * Template Name: תבנית עמוד ראשי
 *
 * @package WordPress
 * @subpackage rujum
 * @since Twenty Fourteen 1.0
 */
;?>
<header data-anchor=home>
    <div class="jumbotron text-center">
        <div class="logo wow fadeIn text-center" data-wow-duration=2s>
            <h1>רוג'ום</h1>
            <h2>ללמוד. להיפגש. לשנות</h2> 
        </div>
    </div>
    <h3 class="text-center wow fadeInDown" data-wow-delay=1s>
    	<?php echo get_field('heading_date');?>
	</h3>
    <p class="text-center wow fadeInUp col-md-12" data-wow-delay=2s>
    	<?php echo get_field('description');?>
    </p>
</header>
