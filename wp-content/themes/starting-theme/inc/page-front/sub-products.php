<?php

/*
*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
*/

$products_list = get_field('products_list');
$sup_range_link = get_field('sup_range_link');

if( $products_list ): ?>
  <div class="container-fluid sub-products">
    <div class="container">
        <div class="row">
        <?php $i = 1; foreach( $products_list as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="col-xs-6 col-md-3 sub-product <?php if ($i % 2): ?>wow fadeInUp <?php else : ?>wow fadeInDown<?php endif; ?>">
              <h2>
                <a class="product" href="<?php the_permalink(); ?>">#<?php the_title(); ?></a>
              </h2>
              <?php echo the_post_thumbnail('medium'); ?>
              <div class="add-to-cart">
                <?php echo sprintf( '<a href="%s" data-quantity="1" class="%s" %s>+ %s</a>',
                esc_url( $product->add_to_cart_url() ),
                esc_attr( implode( ' ', array_filter( array(
                    'button', 'product_type_' . $product->get_type(),
                    $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                    $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
                ) ) ) ),
                wc_implode_html_attributes( array(
                    'data-product_id'  => $product->get_id(),
                    'data-product_sku' => $product->get_sku(),
                    'aria-label'       => $product->add_to_cart_description(),
                    'rel'              => 'nofollow',
                ) ),
                esc_html( $product->add_to_cart_text() )
            ); ?>
            </div>
          </div>
        <?php $i++; endforeach; ?>
      </div>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <a class="more" href="<?php echo $sup_range_link; ?>">Shop the stock</a>
    </div>
  </div>
<?php endif; ?>
