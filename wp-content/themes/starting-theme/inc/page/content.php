
<?php if (is_cart() || is_checkout()): ?>
  <div class="container woocart">
    <div class="row">
      <div class="col-md-12">
        <?php echo the_content() ?>
      </div>
    </div>
  </div>
<?php elseif($post_objects) : ?>
  
<?php else : ?>
  <div class="container-fluid content">
    <div class="row">
      <div class="col-md-12">
        <?php echo the_content() ?>
      </div>
    </div>
  </div>
<?php endif; ?>
