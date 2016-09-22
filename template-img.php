<?php
/**
 * Template Name: תבנית תמונות
 *
 * @package WordPress
 * @subpackage rujum
 * @since Twenty Fourteen 1.0
 */
?>
<section id=photos data-anchor=looks data-text=blue>
    <div class=container-fluid>
        <!-- big screens -->
        <div class="col-md-10 col-md-offset-1 hidden-xs">
            <div class="col-md-4 wow fadeInDown">
                <div class=image> <img src=<?php the_field('img_1');?>>
                    <h5><?php the_field('heading_img_1');?></h5> </div>
            </div>
            <div class="col-md-4 wow fadeInDown" data-wow-delay=.2s>
                <div class=image> <img src=<?php the_field('img_2');?>>
                    <h5><?php the_field('heading_img_2');?></h5> </div>
            </div>
            <div class="col-md-4 wow fadeInDown" data-wow-delay=.3s>
                <div class=image> <img src=<?php the_field('img_3');?>>
                    <h5><?php the_field('heading_img_3');?></h5> </div>
            </div>
            <div class=col-md-4>
                <div class=row>
                    <div class="col-md-12 wow fadeInRight" data-wow-delay=.4s>
                        <div class=image> <img src=<?php the_field('img_4');?>>
                            <h5><?php the_field('heading_img_4');?></h5> </div>
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay=.5s>
                        <div class=image> <img src=<?php the_field('img_5');?>>
                            <h5><?php the_field('heading_img_5');?></h5> </div>
                    </div>
                </div>
            </div>
            <div class=col-md-8>
                <div class="embed-responsive-4by3 image x2">
                    <iframe src='<?php the_field('movie');?>' frameborder=0 allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="embed-responsive-4by3 visible-xs">
            <iframe src='<?php the_field('movie');?>' frameborder=0 allowfullscreen></iframe>
        </div>
        <!-- phones - image gallery -->
        <div id=mobilephotos class="carousel slide visible-xs" data-ride=carousel interval=500>
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target=#mobilephotos data-slide-to=0 class=active></li>
                <li data-target=#mobilephotos data-slide-to=1></li>
                <li data-target=#mobilephotos data-slide-to=2></li>
                <li data-target=#mobilephotos data-slide-to=3></li>
                <li data-target=#mobilephotos data-slide-to=4></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class=carousel-inner role=listbox>
                <div class="item active"> <img src=<?php the_field('img_1');?>>
                    <div class=carousel-caption>
                        <h5><?php the_field('heading_img_1');?></h5> </div>
                </div>
                <div class=item> <img src=<?php the_field('img_2');?>>
                    <div class=carousel-caption>
                        <h5><?php the_field('heading_img_2');?></h5> </div>
                </div>
                <div class=item> <img src=<?php the_field('img_3');?>>
                    <div class=carousel-caption>
                        <h5><?php the_field('heading_img_3');?></h5> </div>
                </div>
                <div class=item> <img src=<?php the_field('img_4');?>>
                    <div class=carousel-caption>
                        <h5><?php the_field('heading_img_4');?></h5> </div>
                </div>
                <div class=item> <img src=<?php the_field('img_5');?>>
                    <div class=carousel-caption>
                        <h5><?php the_field('heading_img_5');?></h5> </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href=#mobilephotos role=button data-slide=prev> <span class="glyphicon glyphicon-chevron-left" aria-hidden=true></span> <span class=sr-only>Previous</span> </a>
            <a class="right carousel-control" href=#mobilephotos role=button data-slide=next> <span class="glyphicon glyphicon-chevron-right" aria-hidden=true></span> <span class=sr-only>Next</span> </a>
        </div>
    </div>
</section>