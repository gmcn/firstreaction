<div class="container-fluid main-products">
  <div class="container">
    <?php

    /*
    *  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
    *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
    *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
    */

    $post_objects = get_field('featured_products');
    $rangeLink = get_field('range_link');


    if( $post_objects ): ?>
        <div class="row">
        <?php $i = 1; foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="col-xs-6 col-md-3 <?php if ($i % 2): ?>wow fadeInDown <?php else : ?>wow fadeInUp<?php endif; ?>">
              <h2>
                <a class="product" href="<?php the_permalink(); ?>">#<?php the_title(); ?></a>
              </h2>
              <?php echo the_post_thumbnail('medium'); ?>
              <br>
              <img class="seperator" src="<?php echo get_template_directory_uri() ?>/images/product_bottom.svg" alt="<?php the_title(); ?>">
            </div>
        <?php $i++; endforeach; ?>
      </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    <a class="more wow fadeInUp" href="<?php echo $rangeLink; ?>">Shop the range</a>
  </div>
</div>
