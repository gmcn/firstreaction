<?php

  $cta_2_bg_image = get_field('cta_2_bg_image');
  $cta_2_bg_word = get_field('cta_2_bg_word');
  $cta_2_text = get_field('cta_2_text');
  $cta_2_link = get_field('cta_2_link');

 ?>


<div class="container-fluid call-1" style="background:url(<?php echo $cta_2_bg_image; ?>) center center; background-size: cover;">
  <p class="top wow fadeIn"><?php echo $cta_2_bg_word ?></p>
  <div class="vert-align">
    <?php if ($cta_2_link): ?>
      <a href="<?php echo $cta_2_link; ?>">
    <?php endif; ?>
    <h3 class="wow fadeInUp"><?php echo $cta_2_text; ?></h3>
    <?php if ($cta_2_link): ?>
      </a>
    <?php endif; ?>
  </div>
  <p class="bottom wow fadeIn"><?php echo $cta_2_bg_word ?></p>
</div>
