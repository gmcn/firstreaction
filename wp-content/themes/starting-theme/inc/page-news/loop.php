<?php if ( have_posts() ) : ?>
  <div class="container-fluid news">
    <div class="row">
    <?php while ( have_posts() ) : the_post();

    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
    $thumb_url = $thumb_url_array[0];

    ?>

      <div class="col-sm-6 col-md-4 col-lg-3 news__post wow fadeIn">
        <div class="news__post__wrapper" style="background: url(<?php echo $thumb_url; ?>) center center; background-size: cover;">
          <div class="date">
            <?php echo get_the_date('d.m.y'); ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
      </div>

      <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

    <?php else :

      get_template_part( 'template-parts/content', 'none' ); ?>


<?php endif; ?>

  </div><!-- /.row -->
</div><!-- /.container-fluid news -->
