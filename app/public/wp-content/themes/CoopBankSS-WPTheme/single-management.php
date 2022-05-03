<?php

get_header(); ?>
<!-- End-of-Header -->
<section class="inner-pages">
 <!-- Breadcrumbs -->
        <section id="breadcrumbs">
            <div class="wrapper">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/management/'); ?>">Management</a></li>
                    <li><a href="#" class="active"><?php echo the_title(); ?></a></li>
                </ul>
            </div>
        </section>
  <!-- End-of-Breadcrumbs -->
        <!-- Leadership -->
        <div class="wrapper leader">
            <section class="table">
                <div class="col lefty">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" class="profile"> </div>
                <div class="col righty">
                    <h1><?php echo the_title(); ?></h1>
                    <span class="post"><?php echo the_field('position'); ?></span>
                    <span class="d-cap"><?php echo the_content(); ?></span>

                </div>
            </section>
            <h1 class="mgmnt">Board of Directors </h1>
            <ul class="directors owl-carousel owl-theme">
            <?php
            $post_terms = wp_get_object_terms($post->ID, array('fields'=>'ids'));
    
            $args = array(
            'post_type' => 'management',
            'post__not_in' => array($post->ID),

            // 'posts_per_page' => -1,
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
    </section>
<!-- Footer -->
<?php get_footer(); ?>