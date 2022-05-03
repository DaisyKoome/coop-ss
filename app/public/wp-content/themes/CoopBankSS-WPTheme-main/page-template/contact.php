<?php
/**
 *
 * Template Name: Contact Us
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
        <section class="background contacts">
            <div class="wrapper">
                <div class="editor">
                    <div class="tbl">
                        <div class="col left">
                            <ul class="accordion">
                                <li>
                                    <a href="#" class="title">Head Office</a>
                                    <div class="desc">
                                        <span>CO-OPERATIVE BANK HOUSE</span>
                                        <p>Plot No. 7 GIV,</p>
                                        <p>Juba Town, South Sudan</p>
                                        <span>Mobile:</span>
                                        <p>+211 921 494 670 or +211 916 725 497</p>
                                        <span>Customer Service:</span>
                                        <p>Customerservice@co-opbankss.com</p>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="title">Juba Branch</a>
                                    <div class="desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum ab quibusdam culpa a illo, fugit soluta asperiores ratione perspiciatis odio! Nihil rem corporis accusantium, atque ab. Ipsum sed sapiente, quam!</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="title">Kololo Branch</a>
                                    <div class="desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum ab quibusdam culpa a illo, fugit soluta asperiores ratione perspiciatis odio! Nihil rem corporis accusantium, atque ab. Ipsum sed sapiente, quam!</p>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                        </ol>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="title">Malakia Branch</a>
                                    <div class="desc">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col right">
                            <div class="frm editor">
                            <span>Leave us a message</span>
                            <?php echo do_shortcode( '[forminator_form id="45"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


<?php get_footer(); ?>
