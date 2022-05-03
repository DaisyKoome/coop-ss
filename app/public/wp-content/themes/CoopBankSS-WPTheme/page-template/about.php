<?php
/**
 *
 * Template Name: About Us
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SS
 */

get_header(); ?>

<section class="inner-pages">
<?php get_template_part('template-parts/single-breadcrumb'); ?>

        <section class="background">
            <div class="wrapper">
                <div class="editor">
                    <div class="tbl">
                        <div class="col left">
                            <img class="about" src="<?php echo the_post_thumbnail_url(); ?>">
                        </div>
                        <div class="col right">
                            <p><span>
                     Bringing about economic empowerment to the people of South Sudan through the establishment and growth of a strong co-operative
                         movement in every sector of the economy. </span></p>
                            <h2 class="section-heading primary">Background</h2>
                            <p><?php echo the_content(); ?></p>
                           
                            <ul class="accordion">

                            <?php
                            
                              if( have_rows('values') ):

                                // Loop through rows.
                                while( have_rows('values') ) : the_row(); ?>

                                <li>
                                    <a href="#" class="title"><?php echo get_sub_field('value_title'); ?></a>
                                    <div class="desc">
                                        <p><?php echo get_sub_field('value_description'); ?></p>
                                    </div>
                                </li>
                             
                                <?php

                                  // End loop.
                                  endwhile;

                                  // No value.
                                  else :
                                  // Do something...
                                  endif;

                                  ?>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>


<?php get_footer(); ?>
