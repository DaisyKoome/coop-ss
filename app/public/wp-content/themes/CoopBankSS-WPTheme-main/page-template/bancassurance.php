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

get_header(); ?>

<section class="inner-pages">
 <!-- Breadcrumbs -->
 <?php get_template_part('template-parts/single-breadcrumb'); ?>
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
                                    <li><a href="<?php echo home_url('/foreign-exchange/'); ?>" ><span>Bancassurance</span></a></li>
                                </ul>
                            </div>


                        </div>
                        <div class="col right">
                            <p class="intro"> Choose from our wide range of accounts with the convenience and flexibility to meet your needs</p>

                            <ul class="accounts">

                          

                            <?php
                            $categories = get_terms('insurance', array('hide_empty' => true) );
                            foreach($categories as $category) {
                              $category_link = get_term_link( $category );
                              $category_name = $category->name;
                              $image = get_field('tax_pic', $category);
                              
                              ?>

                                <li>
                                    <a href="<?php echo $category_link ?>" class="pic">
                                        <img class="lazyestload" src="<?php echo the_post_thumbnail_url(); ?>"
                                             data-src="<?php echo the_post_thumbnail_url(); ?> " width="299" height="242"
                                             alt="<?php echo the_title(); ?>"/>
                                    </a>
                                    <div class="desc equal-height">
                                        <h4><a href="<?php echo $category_link ?>"><?php echo $category_name ?></a></h4>
                                        <p><?php echo the_field('a_c_s'); ?></p>
                                        <a href="<?php echo $category_link ?>" class="primary-btn">Learn More</a>
                                    </div>
                                </li>

                                <?php
                                  }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
        </section>
    </section>



<?php get_footer(); ?>