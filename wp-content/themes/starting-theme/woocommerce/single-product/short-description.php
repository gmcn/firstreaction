<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

// if ( ! $short_description ) {
// 	return;
// }

?>
<div class="woocommerce-product-details__short-description">
	<?php

	/*
	*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
	*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
	*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
	*/

	$post_objects = get_field('included_products');


	if( $post_objects ): ?>
			<ul class="included_products">
				Contents
			<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>

						<li>
							<a class="product" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>

					<?php endforeach; ?>
					<img class="seperator" src="<?php echo get_template_directory_uri() ?>/images/product_bottom.svg" alt="<?php the_title(); ?>">
			</ul>

			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

	<?php echo $short_description; // WPCS: XSS ok. ?>


</div>
