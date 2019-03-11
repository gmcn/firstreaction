<div class="container-fluid page" <?php if ($bgImage): ?>
  style="padding-bottom: 1000px; background: url(<?php echo $bgImage ?>) bottom center no-repeat; background-size: 100% 75%;"
<?php endif; ?>>
  <div class="container social_main">
    <div class="row">
      <div class="col-md-6 title">
        <h3>Stay Up To Date</h3>
        <h2>social</h2>
      </div>
      <div class="col-md-6">
        <?php if( have_rows('social_links', 'option') ): ?>
					<?php $i = 1; while( have_rows('social_links', 'option') ): the_row();
						// vars
						$socialName = get_sub_field('social_name');
						$sociaIicon = get_sub_field('social_icon');
            $socialLink = get_sub_field('social_link');
						?>

            <div class="col-sm-3">
              <a href="<?php echo $socialLink ?>">
                <h3><?php echo $socialName ?></h3>
                <img src="<?php echo $sociaIicon ?>" alt="Follow Us On <?php echo $socialName ?>">
              </a>
            </div>

					<?php $i++; endwhile; ?>
			   <?php endif; ?>
      </div>
    </div>
  </div>
</div>
