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
                                        <span>Co-operative Bank House</span>
                                        <p>Plot No. 7 GIV,</p>
                                        <p>Juba Town, South Sudan</p>
                                        <span>Mobile:</span>
                                        <p>+211 921 494 670 or +211 916 725 497</p>
                                        <span>Customer Service:</span>
										<a href="mailto:customerservice@co-opbankss.com" class="">
											<span class="text"> customerservice@co-opbankss.com </span>
										</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="title">Juba Branch</a>
                                    <div class="desc">
                                        <span>Co-operative Bank House</span>
                                        <p>Plot No. 7 GIV,</p>
                                        <p>Juba Town, South Sudan</p>
                                        <span>Mobile:</span>
                                        <p>+211 921 494 670 or +211 916 725 497</p>
                                        <span>Customer Service:</span>
										<a href="mailto:customerservice@co-opbankss.com" class="">
											<span class="text"> customerservice@co-opbankss.com </span>
										</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="title">Kololo Branch</a>
                                    <div class="desc">
                                        <span>Along Ministries, Airport Road</span>
                                        <p>Juba Central Equatoria,</p>
                                        <p>South Sudan</p>
                                        <span>Mobile:</span>
                                        <p>+211 924 494 670 or +211 925 814 955</p>
                                        <span>Customer Service:</span>
										<a href="mailto:kololobr@co-opbankss.com" class="">
											<span class="text">kololobr@co-opbankss.com </span>
										</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="title">Malakia Branch</a>
                                    <div class="desc">
                                        <span>Hai Malakal, Opposite Medan Zahra</span>
                                        <p>Juba Central Equatoria</p>
                                        <p>South Sudan</p>
                                        <span>Mobile:</span>
                                        <p>+211 924 494 670 or +211 926 138 838</p>
                                        <span>Customer Service:</span>
										<a href="mailto:malakiabr@co-opbankss.com" class="">
											<span class="text">malakiabr@co-opbankss.com </span>
										</a>
                                    </div>
                                </li>
								<li>
                                    <a href="#" class="title">Nimule Branch</a>
                                    <div class="desc">
                                        <span>Customs, Juba Nimule Road</span>
                                        <p>Nimule Town Eastern Equatoria</p>
                                        <p>South Sudan</p>
                                        <span>Mobile:</span>
                                        <p>+211 924 494 670 or +211 920 068 674</p>
                                        <span>Customer Service:</span>
										<a href="mailto:nimulebr@co-opbankss.com" class="">
											<span class="text">nimulebr@co-opbankss.com</span>
										</a>
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
