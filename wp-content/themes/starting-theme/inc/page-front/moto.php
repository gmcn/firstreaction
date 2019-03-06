<?php

  $moto_bg_image = get_field('moto_bg_image');
  $moto_text = get_field('moto_text');
  $moto_link = get_field('moto_link');

 ?>

<div class="container-fluid moto" style="background: url(<?php echo $moto_bg_image; ?>) no-repeat center left;">
  <div class="row">
    <div class="col-md-6 col-md-offset-6 copy wow fadeIn">
      <div class="vert-align">
        <h3><?php echo $moto_text; ?></h3>
        <a href="<?php echo $moto_link; ?>">Click for more information</a>
      </div>
    </div>
  </div>
</div>
