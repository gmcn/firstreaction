<div class="container-fluid product-single">
  <div class="row">

    <div class="col-md-2 product-single__nav matchproduct-single">
      <div class="product-single__nav__wrapper">
        <h3>Main Products</h3>
        <ul>
          <p>First Reaction</p>
          <?php

          $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => -1,'product_cat' => 'first-reaction', 'orderby' =>'date','order' => 'ASC' );
            $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
          global $product;
          ?>
          <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
          <?php endwhile; wp_reset_query(); ?>
        </ul>
        <h3>Single Elements</h3>
        <ul class="single-elements">
        <?php
        $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => -1,'product_cat' => 'single-elements', 'orderby' =>'date','order' => 'ASC' );
          $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
      </div>
    </div>

    <div class="col-md-10 matchproduct-single">
    <?php
    /**
     * Hook: woocommerce_before_single_product.
     *
     * @hooked wc_print_notices - 10
     */
    do_action( 'woocommerce_before_single_product' );

    if ( post_password_required() ) {
    	echo get_the_password_form(); // WPCS: XSS ok.
    	return;
    }
    ?>
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

    	<?php
    		/**
    		 * Hook: woocommerce_before_single_product_summary.
    		 *
    		 * @hooked woocommerce_show_product_sale_flash - 10
    		 * @hooked woocommerce_show_product_images - 20
    		 */
    		do_action( 'woocommerce_before_single_product_summary' );
    	?>

    	<div class="summary entry-summary">
    		<?php
    			/**
    			 * Hook: woocommerce_single_product_summary.
    			 *
    			 * @hooked woocommerce_template_single_title - 5
    			 * @hooked woocommerce_template_single_rating - 10
    			 * @hooked woocommerce_template_single_price - 20
    			 * @hooked woocommerce_template_single_excerpt - 10
    			 * @hooked woocommerce_template_single_add_to_cart - 30
    			 * @hooked woocommerce_template_single_meta - 40
    			 * @hooked woocommerce_template_single_sharing - 50
    			 * @hooked WC_Structured_Data::generate_product_data() - 60
    			 */
    			do_action( 'woocommerce_single_product_summary' );
    		?>
    	</div>

    	<?php
    		/**
    		 * Hook: woocommerce_after_single_product_summary.
    		 *
    		 * @hooked woocommerce_output_product_data_tabs - 10
    		 * @hooked woocommerce_upsell_display - 15
    		 * @hooked woocommerce_output_related_products - 20
    		 */
    		do_action( 'woocommerce_after_single_product_summary' );
    	?>
    </div>

    <?php do_action( 'woocommerce_after_single_product' ); ?>
    </div>
  </div>
</div>
