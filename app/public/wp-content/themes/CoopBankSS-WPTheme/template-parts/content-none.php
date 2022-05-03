<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Co-opBankSS
 */

?>

<div class="offset"></div>
<!-- End-of-Header -->
    <section class="inner-pages">
 <!-- Breadcrumbs -->
        <section id="breadcrumbs">
            <div class="wrapper">
                <ul>
                    <li><a href="#">Home</a></li>
                    <!-- <li><a href="#">About Us</a></li> -->
                    <li><a href="#" class="active">Lost ?</a></li>
                </ul>
            </div>
        </section>
  <!-- End-of-Breadcrumbs -->
        <section class="error">
                <div class="wrapper text-center">
                    <h1 class="large"><span>Error</span>404</h1>
                    <p>Uh oh! The page you’re looking for doesn’t exist.
                        <span class="small">Just look again, maybe you mistyped the URL.</span></p>
                    <div class="error-pic">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/error-pic.png" width="242" height="167" alt="Error">
                    </div>
                    <a href="<?php echo home_url('/'); ?>" class="primary-btn">Return To Home Page</a>
                </div>
        </section>
    </section>

		<?php
get_footer();
 ?>