<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Co-opBankSS
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>South Sudan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#003b4c">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#003b4c">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/plugin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
</head>
<body>
<!-- main_wrapper -->
<div id="main_wrapper" class="clearfloat">
    <!-- Header -->
<header>
<div class="top-bar-green">
         <div class="wrapper">
             <div class="tbl">
                 <div class="col left">
                     <div class="top-left">
                         <ul style="display: block">
                             <li>
                                 <a href="#" class="icon icon-phone">
                                     <span class="text">+211 921 494 670</span>
                                 </a>
                             </li>

                             <li>
                                 <a href="#" class="icon icon-envelope">
                                     <span class="text">customerservice@co-opbankss.com </span>
                                 </a>
                             </li>

                         </ul>
                     </div>

                 </div>
                 <div class="col right">
                     <div class="top-menus">
                         <ul>
                             <li class="active"><a href="#">Personal Banking</a></li>
                             <li><a href="#">Business Banking</a></li>
                             <li><a href="#">Corporate & Institutional Banking</a></li>
                             <li><a href="#">Bancassurance</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

</div>
<div class="animate-search">
<div class="green-bar">
    <div class="wrapper">
        <div class="tbl">
            <div class="col left">
                <a href="#" class="logo"><img src="images/south-sudan-logo.svg" width="413" height="50" alt="co-op-southsudan-logo"> </a>
            </div>
            <div class="col middle right">
                <!-- main_nav -->
                <ul id="main_nav">
                    <li class="active"><a href="#"><span>Home</span></a></li>
                    <li><a href="#"><span>Mobile Banking</span></a></li>
                    <li><a href="#"><span>Internet Banking</span></a></li>
                    <li class="has-children">
                        <a href="#"><span>About Us</span></a>
                        <div class="sub-menu">
                            <ul>
                                <a href="#"><span>Fire & special peril</span></a>
                                <li><a href="#"><span>Business interruption</span></a></li>
                                <li><a href="#"><span>Burglary insurance</span></a></li>
                                <li><a href="#"><span>Public Liability</span></a></li>
                                <li><a href="#"><span>Marine Insurance</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#"><span>Contact Us</span></a></li>
                </ul>
                <!-- main_nav end -->
            </div>
            <div class="col right">
                <a href="#" class="btn-search icon-icon-search"></a>
            </div>
        </div>

    </div>
</div>
    <!-- search -->
    <div id="search" class="main-search">
        <div class="tbl">
            <form method="post" action="search.html">
                <input type="search" placeholder="Search...">
            </form>
            <a href="#" class="btn-search-close icon-close"></a>
        </div>
    </div>
    <!-- search end -->
</div>
</header>
<!-- End-of-Header -->
    <div class="offset"></div>

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


		<footer>
        <div class="wrapper">
            <div class="footer-links">
                <div class="col">
                    <h5 class="sub-heading">Resources</h5>
                    <div class="links-wrap ">
                        <ul style="display: block">
                            <li><a href="#">Internet terms and conditions</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Find a Branch</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h5 class="sub-heading">News</h5>
                    <div class="links-wrap">
                        <ul style="display: block">
                            <li><a href="#">Girls Education South Sudan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h5 class="sub-heading">Work with us</h5>
                    <div class="links-wrap">
                        <ul style="display: block">
                            <li><a href="#">Careers </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h5 class="sub-heading">Contact Centre</h5>
                    <div class="links-wrap">
                        <div class="social">
                            <ul style="display: block">
                                <li>
                                  <span class="text bolder">CO-OPERATIVE BANK HOUSE</span>
                                </li>
                                <li>
                                    <span class="text">Plot No. 7 GIV, Juba Town, South Sudan</span>
                                </li>
                                <li>
                                    <span class="text bolder">Call Center Numbers:</span>
                                </li>
                                <li>
                                    <span class="text">+211921494670, +211916725497</span>
                                </li>
                                <li>
                                    <span class="text bolder">Email:</span>
                                </li>
                                <li>
                                    <span class="text">customerservice@co-opbankss.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- End-of-Footer -->
</div>


<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugin.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
