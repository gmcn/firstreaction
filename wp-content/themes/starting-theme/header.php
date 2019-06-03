<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="humans" href="/humans.txt" />
<link type="text/plain" rel="robots" href="/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>
	<?php

	$description = get_bloginfo( 'description', 'display' );

	 ?>
	<header>
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="col-xs-2 col-md-4 col-lg-2 site-branding">
					<h1>
						<a href="/">
							<img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/images/logo-mark.svg" alt="<?php bloginfo( 'name' ); ?>">
							<img class="hidden-xs" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>">
						</a>
					</h1>
				</div><!-- /.col-md-4 .site-branding -->
				<div class="col-xs-8 col-md-4 col-lg-3 shop">
					<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
						$count = WC()->cart->cart_contents_count; ?>
							<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
								<?php if ( $count > 0 ) : ?>
					        <span class="cart-contents-count">
										<?php echo esc_html( $count ); ?>
									</span>
								<?php endif; ?>
							</a>
						<?php endif; ?>
					<nav class="yamm" role="navigation">
				     <ul class="navbar-shop">
				       <li class="dropdown">
				         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="Shop Mega Menu"> </a>
								 <ul class="dropdown-menu">
                <li>
                  <!-- Content container to add padding -->
									<div class="container">
                  <div class="yamm-content">
                    <div class="row">
											<div class="col-xs-6 main">
												<div class="wrapper matchheight">
													<p>Main Products</p>
													<div class="row main_products">
														<div class="col-xs-2 col-lg-2 hidden-xs">
															<img src="<?php echo get_template_directory_uri(); ?>/images/surface_mm.png" alt="Surface | Perfect for any wall space">
														</div>
														<div class="col-xs-10 col-lg-10 main_products__product">
															<div class="left">
																<h2>#1 Home</h2>
																<p>Perfect for any wall space</p>
															</div>
															<div class="right">
																<a href="/product/surface/">+ Shop Product</a>
																<a href="/product-category/single-elements/home/">+ Shop Refill Elements</a>
															</div>
														</div>
													</div>
													<!-- <div class="row main_products">
														<div class="col-xs-2 col-lg-2 hidden-xs">
															<img src="<?php echo get_template_directory_uri(); ?>/images/drawer_mm.jpg" alt="Drawer | Easy to integrate in any drawer">
														</div>
														<div class="col-xs-10 col-lg-10 main_products__product">
															<div class="left">
																<h2>#2 Drawer</h2>
																<p>Easy to integrate in any drawer</p>
															</div>
															<div class="right">
																<a href="/product/drawer/">+ Shop Product</a>
																<a href="#">+ Shop Refill Elements</a>
															</div>
														</div>
													</div> -->
													<div class="row main_products">
														<div class="col-xs-2 col-lg-2 hidden-xs">
															<img src="<?php echo get_template_directory_uri(); ?>/images/cupboard_mm.png" alt="Cupboard | Excellent for cupboards">
														</div>
														<div class="col-xs-10 col-lg-10 main_products__product">
															<div class="left">
																<h2>#2 Cupboard</h2>
																<p>Excellent for cupboards</p>
															</div>
															<div class="right">
																<a href="/product/cupboard/">+ Shop Product</a>
																<a href="/product-category/single-elements/cupboard/">+ Shop Refill Elements</a>
															</div>
														</div>
													</div>
													<!-- <div class="row main_products">
														<div class="col-xs-2 col-lg-2 hidden-xs">
															<img src="<?php echo get_template_directory_uri(); ?>/images/verticaldrawer_mm.jpg" alt="Verticaldrawer | A slick way to be safe.">
														</div>
														<div class="col-xs-10 col-lg-10 main_products__product">
															<div class="left">
																<h2>#4 Verticaldrawer</h2>
																<p>A slick way to be safe.</p>
															</div>
															<div class="right">
																<a href="/product/vertical-drawer/">+ Shop Product</a>
																<a href="#">+ Shop Refill Elements</a>
															</div>
														</div>
													</div> -->
												</div>
											</div>
											<div class="col-xs-6 sub">
												<div class="wrapper matchheight">
												<p>Single Elements</p>
													<div class="row">
														<div class="col-md-4 fire-safety">
															<img src="<?php echo get_template_directory_uri(); ?>/images/fire-safety.svg" alt="Fire Safety">
															<h3>Fire Safety</h3>
															<?php wp_nav_menu( array(
																'theme_location' => 'fire-safety',
															 ) );
																?>
														</div>
														<div class="col-md-4 health-safety">
															<img src="<?php echo get_template_directory_uri(); ?>/images/health-safety.svg" alt="Health Safety">
															<h3>Health & Safety</h3>
															<?php wp_nav_menu( array(
																'theme_location' => 'health-safety',
															 ) );
																?>
														</div>
														<div class="col-md-4 general-safety">
															<img src="<?php echo get_template_directory_uri(); ?>/images/general-safety.svg" alt="General Safety">
															<h3>General Safety</h3>
															<?php wp_nav_menu( array(
																'theme_location' => 'general-safety',
															 ) );
																?>
														</div>
													</div>
												</div>
											</div>
                    </div>
										<div class="row">
											<div class="col-md-12 tagline">
												<h1>PROTECT YOUR FAMILY & HOME</h1>
											</div>
										</div>
                  </div>
								</div>
                </li>
              </ul>
				       </li>
				     </ul>
					</nav><!-- /.yamm -->


					<a href="https://twitter.com/FirstReactionUK" target="_blank">
						<img class="social" src="<?php echo get_template_directory_uri(); ?>/images/twitter_header.svg" alt="Follow us First Reaction on Twitter">
					</a>
					<a href="https://www.facebook.com/firstreactionltd/" target="_blank">
						<img class="social" src="<?php echo get_template_directory_uri(); ?>/images/fb_header.svg" alt="Follow us First Reaction on Facebook">
					</a>
					<a href="https://www.linkedin.com/company/12976966/"  target="_blank">
						<img class="social" src="<?php echo get_template_directory_uri(); ?>/images/linkedin_header.svg" alt="Follow us First Reaction on Linkedin">
					</a>
					<a href="https://instagram.com/FirstReactionUK"  target="_blank">
						<img class="social" src="<?php echo get_template_directory_uri(); ?>/images/instagram_header.svg" alt="Follow us First Reaction on Instagram">
					</a>
				</div><!-- /.col-md-4 -->
				<div class="col-md-4 col-lg-7">
					<!-- Static navbar -->
				      <nav class="navbar navbar-default">
				        <div class="container-fluid">
				          <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				              <span class="sr-only">Toggle navigation</span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				            </button>
				          </div>
				            <?php wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id' => 'navbar',
											'container_id' => 'navbar',
											'container_class' => 'navbar-collapse collapse',
											'menu_class' => 'navbar-collapse',
											'items_wrap' => '<ul id="" class="nav navbar-nav navbar-right">%3$s</ul>' ) );
											?>
				        </div><!--/.container-fluid -->
				      </nav><!-- /nav -->
				</div><!-- /.col-md-4 -->
			</div>
		</div><!-- /.container-fluid -->

	</header><!-- /header -->

	<div id="content" class="site-content">
