<?php

  $intro_heading = get_field('intro_heading');
  $intro_content = get_field('intro_content');
 ?>

<?php if ($intro_heading): ?>
  <div class="container-fluid intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeIn">
          <h1><?php echo $intro_heading; ?></h1>
          <?php echo $intro_content; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
