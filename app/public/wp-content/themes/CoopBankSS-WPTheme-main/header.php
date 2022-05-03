<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Co-opBankSS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div id="main_wrapper" class="clearfloat">
	<header>
			<div class="top-bar-green">
							<div class="wrapper">
									<div class="tbl">
											<div class="col left">
													<div class="top-left">
															<ul style="display: block">
																	<li>
																			<a href="tel:211921494670" class="icon icon-phone">
																					<span class="text">+211 921 494 670</span>
																			</a>
																	</li>

																	<li>
																			<a href="mailto:customerservice@co-opbankss.com" class="icon icon-envelope">
																					<span class="text">customerservice@co-opbankss.com </span>
																			</a>
																	</li>

															</ul>
													</div>

											</div>
											<div class="col right">
													<div class="top-menus">
															<ul>
																	<li class="active"><a href="<?php echo home_url('/personal-banking'); ?>">Personal Banking</a></li>
																	<li><a href="<?php echo home_url('/business-banking/'); ?>">Business Banking</a></li>
																	<li><a href="<?php echo home_url('/corporate-and-institutional-banking/'); ?>">Corporate & Institutional Banking</a></li>
																	<li><a href="<?php echo home_url('/bancassurance'); ?>">Bancassurance</a></li>
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
														<a href="#" class="logo"><img src="<?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
												<?php echo $image[0]; ?>" width="413" height="50" alt="co-op-southsudan-logo"> </a>
												</div>
												<div class="col middle right">
														<!-- main_nav -->
														<ul id="main_nav">
																<li><a href="<?php echo home_url('/'); ?>"><span>Home</span></a></li>
																<li><a href="<?php echo home_url('/about-us/'); ?>"><span>About</span></a></li>
																<li><a href="<?php echo home_url('/mobile-banking/'); ?>"><span>Mobile Banking</span></a></li>
																<li><a target="_blank" href="https://internet.co-opbankss.com/netteller-war/"><span>Internet Banking</span></a></li>
																<!-- <li class="has-children">
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
																</li> -->
																<li><a href="<?php echo home_url('/contact-us/'); ?>"><span>Contact Us</span></a></li>
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
									<?php get_search_form(); ?>
									<a href="#" class="btn-search-close icon-close"></a>
							</div>
					</div>
					<!-- search end -->
			</div>
	</header>
  <div class="offset"></div>

