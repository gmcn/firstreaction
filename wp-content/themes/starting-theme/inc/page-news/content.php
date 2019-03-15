<div class="container-fluid news-single">
  <div class="row">
    <div class="col-md-5 feat-img matchheight">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
      <?php if( have_rows('gallery') ): ?>
          <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">
            <img class="more" src="<?php echo get_template_directory_uri() ?>/images/photo-camera.svg" alt="View <?php the_title() ?> Gallery">
          </a>         
        <?php endif; ?>

        <?php next_post_link( '%link', 'Next Article', TRUE ); ?>

    </div><!-- /.col-md-5 -->

    <div class="col-md-7 content matchheight">
      <div class="date">
        <?php echo the_date('d.m.y'); ?>
      </div>
      <h1><?php the_title(); ?></h1>
      <img class="seperator" src="<?php echo get_template_directory_uri(); ?>/images/product_bottom.svg" alt="<?php echo the_title(); ?>">
      <?php the_content(); ?>
      <a class="back" href="/news/">Back to news</a>
    </div><!-- /.col-md-7 -->

  </div><!-- /.row -->
</div><!-- /.container-fluid news_single -->



<?php if( have_rows('gallery') ): ?>
  <!-- Hidden Gallery -->
  <div class="hidden">
    <?php while( have_rows('gallery') ): the_row();
      // vars
      $image = get_sub_field('image');
      $image_title = get_sub_field('image_title');
      $image_url = $image['sizes']['thumbnail'];
      ?>

        <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
          <?php echo $image_title ?>
        <?php else : ?>
          <?php the_title(); ?>
        <?php endif; ?>">

            <img src="<?php echo $image_url; ?>" alt="<?php if($image_title) : ?>
              <?php echo $image_title ?>
            <?php else : ?>
              <?php the_title(); ?>
            <?php endif; ?>" />
        </a>

    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
