
<?php if (is_cart() || is_checkout()): ?>
  <div class="container woocart">
    <div class="row">
      <div class="col-md-12">
        <?php echo the_content() ?>
      </div>
    </div>
  </div>
<?php elseif($post_objects) : ?>

<?php else : ?>
  <div class="container-fluid news-single">
    <div class="row">
      <div class="col-md-5 feat-img matchheight">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
        <?php if( have_rows('gallery') ): ?>
            <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">
              <img class="more" src="<?php echo get_template_directory_uri() ?>/images/photo-camera.svg" alt="View <?php the_title() ?> Gallery">
            </a>
          <?php endif; ?>

      </div><!-- /.col-md-5 -->

      <div class="col-md-7 content matchheight">
        <?php the_content(); ?>
      </div><!-- /.col-md-7 -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid news_single -->
<?php endif; ?>
