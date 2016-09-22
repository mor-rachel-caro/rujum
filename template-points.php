<?php
/**
 * Template Name: תבנית השתתפות
 *
 * @package WordPress
 * @subpackage rujum
 * @since Twenty Fourteen 1.0
 */
?>
<section id=why data-text=blue data-anchor=why-should-you>
    <div class=container-fluid>
        <div class=row>
            <div class="col-md-10 col-md-offset-1">
                <h3 class="text-center wow fadeInDown strip"><?php the_field('page_heading');?></h3>
            </div>
        </div>
        <div class=row>
            <div class="col-md-10 col-md-offset-1">
                <div class=row>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=1s>
                        <h4><?php the_field('heading_1');?></h4>
                        <p> <?php the_field('content_1');?> </p>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=1.2s>
                        <h4><?php the_field('heading_2');?></h4>
                        <p><?php the_field('content_2');?></p>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=1.3s>
                        <h4><?php the_field('heading_3');?></h4>
                        <p><?php the_field('content_3');?></p>
                    </div>
                </div>
                <div class=row>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay=1.4s>
                        <h4><?php the_field('heading_4');?></h4>
                        <p> <?php the_field('content_4');?></p>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay=1.5s>
                        <h4><?php the_field('heading_5');?></h4>
                        <p><?php the_field('content_5');?> </p>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay=1.6s>
                        <h4><?php the_field('heading_6');?></h4>
                        <p><?php the_field('content_6');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
