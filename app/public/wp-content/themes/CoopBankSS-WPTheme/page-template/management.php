<?php
/**
 *
 * Template Name: Management
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

        <div class="wrapper leader">
            <div id="bod" class="leadership-tab-container active">
                <ul class="leadership-list">

                    <?php
    
                        $args = array(
                        'post_type' => 'management',

                        'posts_per_page' => -1,
                        // 'banking'=> 'corporate-institutional-banking',
                        
                        );
                        
                        $query = new WP_Query( $args ); ?>

                        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

                      <li class="cd-item">
                          <a href="<?php echo the_permalink(); ?>" class="cd-trigger">
                            <span class="pic-wrapper">
                              <div style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)" width="355" height="407" alt="<?php echo the_title(); ?>" class="l-image"></div>
                                  <span class="caption">
                                      <span class="caption">
                                          <span class="title"><?php echo the_title(); ?></span>
                                          <span class="designation matchHeight"><?php echo the_field('position'); ?></span>
                                        </span>
                                    </span>
                                </span>
                          </a>
                      </li>
                    
                    <?php endwhile; ?>


                </ul>
            </div>
            <!-- End-of-Leadership -->
        </div>
</section>

<?php get_footer(); ?>