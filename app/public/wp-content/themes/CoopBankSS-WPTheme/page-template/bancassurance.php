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

                                <?php
                            $categories = get_terms('insurance', array('hide_empty' => true) );
                            foreach($categories as $category) {
                              $category_link = get_term_link( $category );
                              $category_name = $category->name;
                              $image = get_field('tax_pic', $category);
							  $insurance_desc = get_field('insurance_desc', $category);	
                              
                              ?>
                                    
                                    <li><a href="<?php echo $category_link ?>" ><span><?php echo $category_name ?></span></a></li>
                                    

                                <?php
                                  }
                                ?>

                                </ul>
                            </div>


                        </div>
                        <div class="col right">
                            <p class="intro">Co-operative Bank has partnered with various insurance companies to provide insurance services to all customers across the country. We therefore provide a one-stop shop for both banking and insurance services.</p>

                            <ul class="accounts">

                          

                            <?php
                            $categories = get_terms('insurance', array('hide_empty' => true) );
                            foreach($categories as $category) {
                              $category_link = get_term_link( $category );
                              $category_name = $category->name;
                              $image = get_field('tax_pic', $category);
							  $insurance_desc = get_field('insurance_desc', $category);	
                              
                              ?>

                                <li>
                                    <a href="<?php echo $category_link ?>" class="pic">
                                        <img class="lazyestload" src="<?php echo $image ?>"
                                             data-src="<?php echo $image ?>" width="299" height="242"
                                             alt="<?php echo $category_name ?>"/>
										
                                    </a>
									
                                    <div class="desc equal-height">
                                        <h4><a href="<?php echo $category_link ?>"><?php echo $category_name ?></a></h4>
										<p><?php echo $insurance_desc; ?></p>
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