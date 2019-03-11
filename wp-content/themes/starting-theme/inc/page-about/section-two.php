<?php

  $content_section_2_img_separator = get_field('content_section_2_img_seperator');
  $content_section_2_heading = get_field('content_section_2_heading');
  $content_section_2_copy = get_field('content_section_2_copy');

 ?>

<div class="section-two">

  <section class="stripe" style="background: #F12A28 url(<?php echo $content_section_2_img_separator ?>) fixed center center no-repeat">
    <div class="stripe__content">
    </div>
  </section>


  <div class="container section-two__copy">
    <div class="row">
      <div class="col-md-6 col-md-offset-6 wow fadeInRight">
        <h2><?php echo $titleSubHeading ?></h2>
        <h3><?php echo $content_section_2_heading ?></h3>

        <img class="seperator" src="<?php echo get_template_directory_uri() ?>/images/product_bottom.svg" alt="<?php echo $content_section_2_heading ?>">

        <?php echo $content_section_2_copy ?>
      </div>
    </div>
  </div>

</div>
