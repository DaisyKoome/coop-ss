<?php
/**
 *
 * Template Name: Bancassurance
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SS
 */

get_header();
$term = get_queried_object();

?>

<section class="inner-pages">
 <!-- Breadcrumbs -->
        <section id="breadcrumbs">
            <div class="wrapper">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/bancassurance'); ?>">Bancassurance</a></li>
                    <li><a href="#" class="active"><?php echo $term->name ?></a></li>
                </ul>
            </div>
        </section>
  <!-- End-of-Breadcrumbs -->
        <section class="account">
            <div class="wrapper">
                    <div class="tbl">
                        <div class="col left">
                            <div class="caption-menu">
                                <ul>
                                    <li class="active"><a href="<?php echo home_url('/corporate-and-institutional-banking/'); ?>"><span>Accounts</span></a></li>
                                    <li><a href="<?php echo home_url('/corporate-and-institutional-banking/borrow/'); ?>" ><span>Borrow</span></a></li>
                                    <li><a href="<?php echo home_url('/card/'); ?>" ><span>Cards</span></a></li>
                                    <li><a href="<?php echo home_url('/money-transfer/'); ?>" ><span>Money Transfer</span></a></li>
                                    <li><a href="<?php echo home_url('/trade-finance/'); ?>" ><span>Trade Finance</span></a></li>
                                    <li><a href="<?php echo home_url('/foreign-exchange/'); ?>" ><span>Foreign Exchange</span></a></li>
                                    <li><a href="<?php echo home_url('/bancassurance/'); ?>" ><span>Bancassurance</span></a></li>
                                </ul>
                            </div>


                        </div>
                        <div class="col right">
                            <p class="intro"> Choose from our wide range of insurance with the convenience and flexibility to meet your needs</p>

                            <ul class="accounts">

                        <?php
                              $args = array(
                                'post_type' => 'bancassurance',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                  array(
                                    'taxonomy' => 'insurance',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                  ),
                                ),
                              );

                              $loop = new WP_Query( $args ); 
                            ?>
                            
                            <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <li>
                                    <a href="<?php echo the_permalink(); ?>" class="pic">
                                        <img class="lazyestload" src="<?php echo the_post_thumbnail_url(); ?>"
                                             data-src="<?php echo the_post_thumbnail_url(); ?> " width="299" height="242"
                                             alt="<?php echo the_title(); ?>"/>
                                    </a>
                                    <div class="desc equal-height">
                                        <h4><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                                        <p><?php echo the_field('a_c_s'); ?></p>
                                        <a href="<?php echo the_permalink(); ?>" class="primary-btn">Learn More</a>
                                    </div>
                                </li>

                                <?php endwhile; ?>

                            </ul>
                        </div>
                    </div>
                </div>
        </section>
    </section>



<?php
wp_reset_postdata(); 

get_footer(); ?>