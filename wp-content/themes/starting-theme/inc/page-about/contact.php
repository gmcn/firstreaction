<?php

  $get_in_touch_enable = get_field('get_in_touch_enable');
  $get_in_touch_blurb = get_field('get_in_touch_blurb');

 ?>

 <?php if ($get_in_touch_enable): ?>
   <div class="container-fluid product_form_top">
   </div>
   <div class="container-fluid product_form">
     <div class="container">
       <div class="col-md-6">
         <h2>Get in touch today</h2>
         <h1><?php echo the_title(); ?></h1>
         <?php echo $get_in_touch_blurb ?>
       </div>
       <div class="col-md-6 form">
         <h2>Message Us</h2>
         <?php if (is_page( 401 )): ?>
           <?php echo do_shortcode('[formidable id=6]'); ?>
         <?php elseif (is_page( 407 )) : ?>
           <?php echo do_shortcode('[formidable id=7]'); ?>
         <?php else: ?>
           <?php echo do_shortcode('[formidable id=2]'); ?>
         <?php endif; ?>

       </div>
     </div>
   </div>
 <?php endif; ?>
