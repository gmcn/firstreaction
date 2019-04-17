<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

			</div><!-- #content -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

			<footer>
				<div class="container-fluid footer">
					<div class="row about">
						<hr />
						<div class="col-sm-5 footermatch">
							<h5><?php echo the_field('footer_text_heading', 'option') ?></h5>
							<p class="footer__description">
								<?php echo the_field('footer_text', 'option') ?>
							</p>
						</div><!-- /.col-md-4 -->
						<div class="col-sm-3 col-sm-offset-4 col-lg-1 col-lg-offset-6 branding hidden-xs footermatch">
							<div class="vert-align">
								<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/favicon.png" alt="<?php echo get_bloginfo();?>"></a>
							</div>
						</div><!-- /.col-md-2 col-md-offset-6 -->
						<hr />
					</div><!-- /.row -->

					<div class="row">
						<div class="col-md-7">
							<!-- <div class="row"> -->
								<div class="footer__nav">
									<h6><a href="/shop">Shop</a></h6>
									<?php wp_nav_menu( array(
										'theme_location' => 'footer-1' ) );
										?>
								</div>
								<div class="footer__nav">
									<h6><a href="/product-information">Product</a></h6>
								</div>
								<div class="footer__nav">
									<h6><a href="/news">News</a></h6>
								</div>
								<div class="footer__nav">
									<h6><a href="/about">About</a></h6>
								</div>
								<div class="footer__nav">
									<h6><a href="/get-a-quote">Get a quote</a></h6>
								</div>
								<div class="footer__nav">
									<h6><a href="/contact">Contact</a></h6>
								</div>
								<div class="footer__nav">
									<h6>Social</h6>
									<a href="https://facebook.com"  target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/images/fb_footer.svg" alt="Follow us First Reaction on Facebook">
									</a>
									<a href="https://twitter.com"  target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/images/twitter_footer.svg" alt="Follow us First Reaction on Twitter">
									</a>
								</div>
							<!-- </div> -->
						</div><!-- /.col-md-7 -->
						<div class="col-md-1 col-md-offset-4 footer__basket">
							<h6>Basket</h6>
							<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

							    $count = WC()->cart->cart_contents_count;
							    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
							    if ( $count > 0 ) {
							        ?>
							        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
							        <?php
							    }
							        ?></a>

							<?php } ?>
						</div><!-- /.col-md-2 col-md-offset-6 -->
					</div><!-- /.row -->

				</div><!-- /.container-fluid -->
				<div class="container-fluid signature">
					<div class="row">
						<div class="col-md-3 byline">
							Website by <a href="https://cornellstudios.com" target="_blank">Cornell</a>
						</div><!-- /.col-md-3 -->
						<div class="col-md-6 copyright">
							Copyright <?php echo date('Y'); ?> © FIRST REACTION
						</div><!-- /.col-md-6 -->
						<div class="col-md-3 policy">
							<ul>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Cookies</a></li>
							</ul>
						</div><!-- /.col-md-3 -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</footer><!-- /footer -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
