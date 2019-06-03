<?php

  $content_section_1_img_separator = get_field('content_section_1_img_separator');
  $content_section_1_heading = get_field('content_section_1_heading');
  $content_section_1_copy = get_field('content_section_1_copy');
  $content_section_1_bg_colour = get_field('content_section_1_bg_colour');
  $content_section_1_product_image = get_field('content_section_1_product_image');

 ?>


<div class="section-one">

  <section class="stripe" style="background: <?php echo $content_section_1_bg_colour ?> url(<?php echo $content_section_1_img_separator ?>) fixed center center no-repeat">
    <div class="stripe__content">
    </div>
  </section>


  <div class="container section-one__copy">
    <div class="row">
      <div class="col-md-6 wow fadeInLeft">
        <h2><?php echo $titleSubHeading ?></h2>
        <h3><?php echo $content_section_1_heading ?></h3>

        <img class="seperator" src="<?php echo get_template_directory_uri() ?>/images/seperator_green.svg" alt="<?php echo $content_section_1_heading ?>">

        <?php echo $content_section_1_copy ?>
      </div>
      <?php if ($content_section_1_product_image): ?>
        <div class="col-md-6">
          <img class="prod_img" src="<?php echo $content_section_1_product_image ?>" alt="<?php echo the_title(); ?>">
        </div>
      <?php endif; ?>
    </div>
  </div>

</div>
