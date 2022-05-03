<?php
/**
 *
 * Template Name: General Template without accordions
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



<div class="web-banner" style="background-image: url(<?php echo the_field('account_header_image'); ?>)">
        <div class="wrapper cptn">
            <div class="col-left">
                <div class="banner_content ">
                    <h1><?php echo the_field('a_c_s'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <section class="inner-pages">
 <!-- Breadcrumbs -->
 <?php get_template_part('template-parts/single-breadcrumb'); ?>
  <!-- End-of-Breadcrumbs -->
        <section class="background accounts-inside">
            <div class="wrapper">
                <div class="editor">
                    <div class="tbl">
                        <div class="col left">
                            <h2 class="section-heading secondary"><?php echo the_title(); ?></h2>
                            <p> <?php echo the_content(); ?></p>
                            
                        </div>
                        <div class="col right">
                            <div class="frm editor">
                                
                                <div class="frmLead">
                                <span class="white">Would you like an account today? Talk to us</span>
                                    <?php echo do_shortcode( '[forminator_form id="45"]' ); ?>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
               
                </div>
            <div class="other-a visted-p">
                <h2 class="section-heading secondary">Previously Viewed</h2>
                <ul>

                <?php 
	    if (get_post_type( $post->ID ) == 'accounts' )
		    update_post_meta( $post->ID, '_last_viewed', current_time('mysql') );
		?>

		<?php
				$args = array(
					'post_type' => array('accounts','borrow','ways_to_bank'),
					'posts_per_page' => 4,
					'meta_key' => '_last_viewed',
					'orderby' => 'meta_value',
					'order' => 'DESC'
				);

				query_posts( $args ); ?>
				<?php if( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>

                        <li>
                            <a href="<?php echo the_permalink(); ?>">
                                <span class="icn <?php echo the_field('account_icon'); ?>"></span>
                                <p><?php echo the_title(); ?></p>
                            </a>
                        </li>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                   
                </ul>

            </div>
        </section>
    </section>


    <?php get_footer(); ?>