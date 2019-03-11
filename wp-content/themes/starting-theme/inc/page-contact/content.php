<?php
  $titleSubHeading = get_field('title_sub-heading');
  $bgImage = get_field('background_image');
?>

<div class="container-fluid page contact">
  <div class="container">
    <div class="row">
      <div class="col-md-6 content">
        <h2><?php echo $titleSubHeading ?></h2>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <div class="col-md-6 form">
        <h2>Message Us</h2>
        <?php //echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
        <?php echo do_shortcode('[formidable id=2]'); ?>
      </div>
    </div>
  </div>
</div>
