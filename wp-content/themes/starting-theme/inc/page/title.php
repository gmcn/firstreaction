<?php

  $titleSubheading = get_field('title_sub-heading');
  $introParagraph = get_field('intro_paragraph');

 ?>

<div class="container-fluid title-single">
  <!-- <div class="container"> -->
    <div class="col-md-6 wow fadeInLeft">
      <?php if ($titleSubheading): ?>
        <h2><?php echo $titleSubheading ?></h2>
      <?php endif; ?>

      <?php if (is_shop()): ?>
        <h1>Shop</h1>
      <?php elseif (is_product_category()) : ?>
        <h1><?php echo single_cat_title(); ?></h1>
      <?php else : ?>
        <h1><?php echo the_title(); ?></h1>
      <?php endif; ?>


    </div>
    <div class="col-md-6 wow fadeInRight">

      <?php echo $introParagraph; ?>

    </div>
  <!-- </div> -->
</div>
