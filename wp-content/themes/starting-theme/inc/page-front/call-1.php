<?php

  $cta_1_bg_image = get_field('cta_1_bg_image');
  $cta_1_bg_word = get_field('cta_1_bg_word');
  $cta_1_text = get_field('cta_1_text');
  $cta_1_link = get_field('cta_1_link');

 ?>


<div class="container-fluid call-1" style="background:url(<?php echo $cta_1_bg_image; ?>) center center; background-size: cover;">
  <p class="top wow fadeIn"><?php echo $cta_1_bg_word ?></p>
  <div class="vert-align">
    <?php if ($cta_1_link): ?>
      <a href="<?php echo $cta_1_link; ?>">
    <?php endif; ?>
    <h3 class="wow fadeInDown"><?php echo $cta_1_text; ?></h3>
    <?php if ($cta_1_link): ?>
      </a>
    <?php endif; ?>
  </div>
  <p class="bottom wow fadeIn"><?php echo $cta_1_bg_word ?></p>
</div>
