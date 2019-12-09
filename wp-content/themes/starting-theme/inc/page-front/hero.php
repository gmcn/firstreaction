<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="bxslider">

	<?php if(have_rows('slider')): ?>

		<ul class="bxslider">

			<?php while(have_rows('slider')) : the_row();
					// ACF Sub fields
      		$slide_image = get_sub_field('slide_image');
					$slide_align = get_sub_field('slide_image_align');
      		$slide_title = get_sub_field('slide_title');
					$slide_link = get_sub_field('slide_link');
          $range_link = get_sub_field('range_link');
					$slide_cta_text = get_sub_field('slide_cta_text');
					?>

				<li class="slide" style="background:url(<?php echo $slide_image; ?>) center <?php echo $slide_align; ?>; background-size: cover">

          <div class="container-fluid" style="background: url(<?php echo get_template_directory_uri(); ?>/images/horizontal_rule.svg) center center no-repeat;">

            <div class="slide__title vert-align">
              <h1 class="wow fadeInLeft" data-wow-delay="5s"><?php echo $slide_title; ?></h1><br />
							<a href="<?php echo $slide_link ?>" class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="5.5s"><?php echo $slide_cta_text ?></a>
            </div>

          </div>

				</li>

			<?php endwhile; ?>

		</ul>
  <?php endif; ?>
<img class="scroll animated bounce" src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.svg" alt="">
</div>
