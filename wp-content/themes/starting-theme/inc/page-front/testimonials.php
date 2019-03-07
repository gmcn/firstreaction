<?php if( have_rows('testimonials') ): ?>
  <div class="testimonials_bg">
    <div class="container-fluid testimonials">
      <h1>Testimonials</h1>
    	<div class="row">
    	<?php $i = 1; while( have_rows('testimonials') ): the_row();
    		// vars
    		$testimonial_content = get_sub_field('testimonial_content');
    		$testimonial_author = get_sub_field('testimonial_author');
    		?>
    		<div class="col-md-4 testimonial <?php if ($i % 2): ?>wow fadeInUp <?php else : ?>wow fadeInDown<?php endif; ?>">
          <img class="seperator" src="<?php echo get_template_directory_uri() ?>/images/testimonial_top.svg" alt="<?php the_title(); ?>">
  		    <p class="matchheight">“<?php echo $testimonial_content; ?>”</p>
          <span><?php echo $testimonial_author; ?></span>
    		</div>
    	<?php $i++; endwhile; ?>
    	</div>
    </div>
  </div>
<?php endif; ?>
