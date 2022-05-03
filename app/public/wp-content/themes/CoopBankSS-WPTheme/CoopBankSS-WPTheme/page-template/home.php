<?php
/**
 *
 * Template Name: Home
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

<div id="banner" class="home" style="background-image:url(<?php echo the_field('masthead_image'); ?>);">
        <div class="wrapper inside-banner">
            <div class="col centre">
                <div class="home-banner-content">
                    <h1>Welcome to Co-operative Bank South Sudan
                        <span class="centre">Bringing about economic empowerment to the people of South Sudan through the establishment
                            and growth of a strong co-operative movement in every sector of the economy. </span>
                    </h1>

                    <h2>Let’s get you started</h2>
                    <ul class="cards">
                        <li>
                            <a href="#">
                                <div class="block equal-height">
                            <span class="icn centre">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/foreign.svg" width="" height="">
                            </span>
                                    <h3>Foreign Exchange</h3>
                                    <div class="cta-btn">
                                        <span class="primary-btn">Get Started</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="block equal-height">
                            <span class="icn centre">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/ngo.svg" width="" height="">
                            </span>
                                    <h3>NGO Banking</h3>
                                    <div class="cta-btn">
                                        <span class="primary-btn">Get Started</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="block equal-height">
                            <span class="icn centre">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/cash.svg" width="" height="">
                            </span>
                                    <h3>Cash Transfer Services</h3>
                                    <div class="cta-btn">
                                        <span class="primary-btn">Get Started</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="block equal-height">
                            <span class="icn centre">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/payment.svg" width="" height="">
                            </span>
                                    <h3>Payment Services</h3>
                                    <div class="cta-btn">
                                        <span class="primary-btn">Get Started</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
