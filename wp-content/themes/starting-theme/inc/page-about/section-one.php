<?php

  $content_section_1_img_separator = get_field('content_section_1_img_separator');
  $content_section_1_heading = get_field('content_section_1_heading');
  $content_section_1_copy = get_field('content_section_1_copy');

 ?>


<div class="section-one">

  <section class="stripe" style="background: #38A571 url(<?php echo $content_section_1_img_separator ?>) fixed center center no-repeat">
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
    </div>
  </div>

</div>
