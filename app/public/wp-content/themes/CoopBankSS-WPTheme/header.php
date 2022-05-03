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
		<!-- mobile_nav_wrapper -->
		<div id="mobile_nav_wrapper">
            <div class="mobile-nav-content">
                <div class="header">
                    <a href="#" class="menu-close">&times;</a>
                </div>
								
                <ul class="mobile-nav">
                    <li>
                        <a href="<?php echo home_url('/'); ?>" class="active">Home</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo home_url('/about-us/'); ?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/mobile-banking/'); ?>">Mobile Banking</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://internet.co-opbankss.com/netteller-war/">Internet Banking</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/personal-banking/'); ?>">Personal Banking</a>
                    </li>
										<li>
                        <a href="<?php echo home_url('/business-banking/'); ?>">Business Banking</a>
                    </li>
										<li>
                        <a href="<?php echo home_url('/corporate-and-institutional-banking/'); ?>">Corporate Banking</a>
                    </li>
										<li>
                        <a href="<?php echo home_url('/bancassurance/'); ?>">Bancassurance</a>
                    </li>
										<li>
                        <a target="_blank" href="<?php echo home_url('/contact-us/'); ?>">Contact Us</a>
                    </li>
                    
                    
                   
                </ul>
            </div>
        </div>
<!-- mobile_nav_wrapper end -->
	<header>
			<div class="top-bar-green">
							<div class="wrapper">
									<div class="tbl">
											<div class="col left">
													<div class="top-left">
															<ul style="display: block;">
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
																<?php
																		wp_nav_menu(
																				array(
																						'container_id'    => '',
																						'container_class' => '',
																						'menu_class'      => '',
																						'container'         => 'div',
																						'depth'            => 2, 
																						'menu_id'      => 'main_nav',
																						'theme_location'  => 'black-primary',
																						'li_class'        => '',
																						'fallback_cb'     => false,
																				)
																		);
																			?>
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
																<?php
																		wp_nav_menu(
																				array(
																						'container_id'    => '',
																						'container_class' => '',
																						'menu_class'      => '',
																						'container'         => 'div',
																						'depth'            => 2, 
																						'menu_id'      => 'main_nav',
																						'theme_location'  => 'green-primary',
																						'li_class'        => '',
																						'fallback_cb'     => false,
																				)
																		);
																			?>
														<!-- main_nav -->
													
														<!-- main_nav end -->
												</div>
												<div class="col right">
														<a href="#" class="btn-search icon-icon-search"></a>
														<div class="menu-icon"><span class="icon-main-menu"></span></div>
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