<?php

$featuredimg = get_the_post_thumbnail_url();
$titleSubHeading = get_field('title_sub-heading');

//acf

$main_slogan = get_field('main_slogan');
$main_page_title = get_field('main_page_title');

 ?>

<div class="container-fluid about_main" style="background: url(<?php echo $featuredimg ?>) center center no-repeat; background-size: cover;">
  <h1 class="wow fadeIn"><?php the_title() ?></h1>
  <div class="row">
    <div class="col-md-10 col-md-offset-2 col-lg-9 col-lg-offset-3 copy wow fadeInRight">
      <img class="branding" src="<?php echo get_template_directory_uri(); ?>/images/logo-mark.svg" alt="<?php bloginfo( 'name' ); ?>">
      <h3 class="slogan"><?php echo $main_slogan ?></h3>
      <h2><?php echo $titleSubHeading ?></h2>
      <h3><?php echo $main_page_title ?></h3>
      <img class="seperator" src="<?php echo get_template_directory_uri() ?>/images/seperator_white.svg" alt="Wallhung">
      <?php the_content(); ?>
    </div>
  </div>
</div>
