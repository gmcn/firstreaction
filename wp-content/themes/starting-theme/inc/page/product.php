  <?php

  /*
  *  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
  *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
  *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
  */

  $post_objects = get_field('product_info');



  if( $post_objects ): ?>

  <div class="container-fluid product-info">

      <?php $i = 1; foreach( $post_objects as $post): // variable must be called $post (IMPORTANT)

        $product_lifestyle_img = get_field('product_lifestyle_img');
        $price = get_post_meta( get_the_ID(), '_regular_price', true);
        ?>
          <?php setup_postdata($post); ?>

          <?php if ($i % 2) : ?>
            <div class="row">
              <div class="col-sm-6 details matchheight wow fadeInLeft">
                <h2>
                  <?php the_title(); ?>
                </h2>
                <?php echo the_post_thumbnail('medium'); ?>
                <br />

                <?php if (!$price) : ?>
                  <a>Coming Soon</a>
                <?php else : ?>
                  <a href="<?php the_permalink(); ?>">Read Details</a>
                <?php endif; ?>
              </div>
              <div class="col-sm-6 matchheight lifeimg wow fadeInRight" style="background: url(<?php echo $product_lifestyle_img ?>) center center; background-size: cover">
              </div>
            </div>
          <?php else : ?>
            <div class="row">
              <div class="col-sm-6 matchheight lifeimg wow fadeInLeft" style="background: url(<?php echo $product_lifestyle_img ?>) center center; background-size: cover">
              </div>
              <div class="col-sm-6 details matchheight wow fadeInRight">
                <h2>
                  <?php the_title(); ?>
                </h2>
                <?php echo the_post_thumbnail('medium'); ?>
                <br />
                <?php if (!$price) : ?>
                  <a>Coming Soon</a>
                <?php else : ?>
                  <a href="<?php the_permalink(); ?>">Read Details</a>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>


      <?php $i++; endforeach; ?>

      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      </div><!-- /.container-fluid product-into -->
  <?php endif; ?>
