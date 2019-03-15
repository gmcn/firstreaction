<?php

  $titleSubheading = get_field('title_sub-heading');
  $introParagraph = get_field('intro_paragraph');

 ?>

<div class="container-fluid title-single">
  <!-- <div class="container"> -->
    <div class="col-md-6 wow fadeInLeft">
      <h2><?php echo $titleSubheading ?></h2>
      <h1><?php echo the_title(); ?></h1>
    </div>
    <div class="col-md-6 wow fadeInRight">

      <?php echo $introParagraph; ?>

    </div>
  <!-- </div> -->
</div>
