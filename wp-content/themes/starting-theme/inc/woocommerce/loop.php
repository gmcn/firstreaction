<?php if (have_posts()) : ?>

<?php include(locate_template("inc/page/title.php")); ?>

<div class="container-fluid product-loop">
  <div class="row">

    <?php while (have_posts()) : the_post(); ?>

      <div class="col-sm-6 col-md-4 col-lg-3 product-single">
        <div class="wrapper matchheight">
          <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo the_title(); ?>">

            <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID, 'large') ?>" alt="">


          	<?php
          		// woocommerce_show_product_sale_flash( $post, $product );
            		// if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
            		// else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="'.the_title().'" />';
            		the_title( '<h2>', '</h2>' );
              	echo '<span class="price">'. $product->get_price_html() .'</span>';
            	?>
              <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
              <div class="clear">

              </div>
          </a>
        </div>

      </div>

    <?php endwhile; ?>
  </div>
</div>
<?php endif; ?>
