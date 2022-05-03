<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="Search...">
</form>



<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Co-opBankSS
 */

get_header();
?>

	 <section class="inner-pages">
 <!-- Breadcrumbs -->
        <section id="breadcrumbs">
            <div class="wrapper">
                <ul>
                    <li><a href="#">Home</a></li>
                    <!-- <li><a href="#">About Us</a></li> -->
                    <li><a href="#" class="active">Search</a></li>
                </ul>
            </div>
        </section>
  <!-- End-of-Breadcrumbs -->
        <section class="search-results">
            <div class="wrapper">
                <form method="post" action="#">
                    <!-- events-filter -->
                    <ul class="events-filter">
                        <li class="full">
                            <div class="input-wrapper has-icon">
                                <input type="search" name="s" id="s" value="<?php echo get_search_query(); ?>" maxlength="50" placeholder="Search" />
                                <button type="submit" class="icon-icon-search"></button>
                            </div>
                        </li>
                    </ul>
                    <!-- events-filter end -->
                </form>
                <h1 class="search-title">Search results: <span><?php echo $total_results ?></span></h1>

                <!-- search-results -->
                <ul class="search-results">


								<?php if ( have_posts() ) : 
						global $wp_query;
						$total_results = $wp_query->found_posts;

				 ?>


                    <li>
                        <div class="block">
                            <h2><?php echo the_title(); ?></h2>
                            <p><?php echo the_excerpt(); ?></p>
                            <a href="<?php echo the_permalink(); ?>">View More</a>
                        </div>
                    </li>


										<?php		
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
                   
                </ul>
                <!-- search-results end -->

                <div class="text-center load-more">
                    <a href="index.html" class="primary-btn">Load more</a>
                </div>
            </div>
        </section>
    </section>

<?php
get_footer();
