<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Co-opBankSS
 */

?>

			<footer style="
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
">
					<div class="wrapper">
							<div class="footer-links">
									<div class="col">
											<h5 class="sub-heading">Resources</h5>
											<div class="links-wrap ">
													<ul style="display: block">
															<li><a href="<?php echo home_url('/internet-terms-and-conditions/'); ?>">Internet terms and conditions</a></li>
															<li><a href="<?php echo home_url('/faq/'); ?>">Frequently Asked Questions</a></li>
															<li><a href="<?php echo home_url('/accessibility/'); ?>">Accessibility</a></li>
															<li><a href="<?php echo home_url('/card/'); ?>">Find a Branch</a></li>
													</ul>
											</div>
									</div>
									<div class="col">
											<h5 class="sub-heading">News</h5>
											<div class="links-wrap">
													<ul style="display: block">
															<li><a href="<?php echo home_url('/news/girls-education-south-sudan/'); ?>">Girls Education South Sudan</a></li>
													</ul>
											</div>
									</div>
									<div class="col">
											<h5 class="sub-heading">Quick Links</h5>
											<div class="links-wrap">
													<ul style="display: block">
															<li><a href="<?php echo home_url('/career/'); ?>">Careers </a></li>
														<li><a href="<?php echo home_url('/money-transfer/'); ?>">Money Transfer </a></li>
														<li><a href="<?php echo home_url('/card/'); ?>">Cards </a></li>
														<li><a href="<?php echo home_url('/trade-finance/'); ?>">Trade Finance</a></li>
															<li><a href="<?php echo home_url('/revenue-collection/'); ?>">Revenue Collection</a></li>
													</ul>
											</div>
									</div>
									<div class="col">
											<h5 class="sub-heading">Contact Centre</h5>
											<div class="links-wrap">
													<div class="social">
															<ul style="display: block">
																	<li>
																		<span class="text bolder spacer">CO-OPERATIVE BANK HOUSE</span>
																	</li>
																	<li>
																			<span class="text">Plot No. 7 GIV, Juba Town, South Sudan</span>
																	</li>
																	<li>
																			<span class="text bolder">Call Center Numbers:</span>
																	</li>
																	<li>
																		<a href="tel:211921494670" class="">
																					<span class="text">+211 921 494 670</span>
																			</a>
																			<a href="tel:211916725497" class="">
																					<span class="text">+211916725497</span>
																			</a>
																			
																	</li>
																	<li>
																			<span class="text bolder">Email:</span>
																	</li>
																	<li>
																	<a href="mailto:customerservice@co-opbankss.com" class="">
																					<span class="text">customerservice@co-opbankss.com </span>
																			</a>
																	</li>
															</ul>
													</div>
											</div>
									</div>
							</div>
					</div>
			</footer>
		</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
