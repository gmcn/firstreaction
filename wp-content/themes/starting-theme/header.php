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
<link type="text/plain" rel="humans" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
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
				<div class="col-md-4 site-branding">
					<h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
				</div><!-- /.col-md-4 .site-branding -->
				<div class="col-md-4 shop">
					<a href="https://facebook.com" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/fb_header.svg" alt="Follow us First Reaction on Facebook">
					</a>
					<a href="https://twitter.com" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/twitter_header.svg" alt="Follow us First Reaction on Twitter">
					</a>

					<nav class="navbar yamm" role="navigation">
				     <ul class="nav navbar-nav navbar-shop">
				       <li class="dropdown">
				         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
								 <ul class="dropdown-menu">
                <li>
                  <!-- Content container to add padding -->
                  <div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-6 list-unstyled">
                        <li>
                          <p><strong>Section Title</strong></p>
                        </li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                      </ul>
                      <ul class="col-sm-6 list-unstyled">
                        <li>
                          <p><strong>Links Title</strong></p>
                        </li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                      </ul>

                    </div>
                  </div>
                </li>
              </ul>
				       </li>
				     </ul>
					</nav>

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

				</div><!-- /.col-md-4 -->
				<div class="col-md-4">
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
				      </nav><!-- #site-navigation -->
				</div><!-- /.col-md-4 -->
			</div>
		</div><!-- /.container-fluid -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
