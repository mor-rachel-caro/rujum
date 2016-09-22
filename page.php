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
<section id=<?php the_field('section_id');?> data-bg=red data-anchor=<?php the_ID();?>>
    <div class=container-fluid>
        <div class="col-md-10 col-md-offset-1">
            <h3 class="text-center wow fadeInDownBig strip">
            	<?php the_field('page_heading');?>	
        	</h3>
        	<h4 class=text-center><?php the_field('sub_heading');?></h4>

            <p class="text-center wow slideInRight">
	           	<?php the_content();?>
           	</p>
             
        </div>
    </div>


             <?php   global $i; global $howmuchpages;
              if ($i== $howmuchpages) {?>
                <footer>
        <div class="col-md-2 col-xs-6 text-right">
            <a href="http://www.drorisrael.org.il/"><img src=images/92798d6b.drorisraellogo.png alt="דרור ישראל"></a>
        </div>
        <div class="col-md-2 col-xs-6 text-right">
            <a href=""><img src=images/2dc97494.moishe.png alt="מושיה האוס"></a>
        </div>
        <div class="col-md-2 col-xs-6 pull-left">
            <div class=row>
                <div class="col-md-5 col-xs-6">
                    <a href=""><img src=images/e38ae585.havuralogo.jpg alt="החבורה עיצוב גראפי"></a>
                </div>
                <div class="col-md-5 col-xs-6">
                    <a href=""><img src=images/28870b1a.divalogo.png alt="דיווה עיצוב ובניית אתרים"></a>
                </div>
            </div>
        </div>
</footer>
<?php } ?>

</section>


