<div class="container-fluid team">

  <div class="container">

    <?php if( have_rows('team_members') ): ?>

    	<div class="row">

    	<?php while( have_rows('team_members') ): the_row();

    		// vars
    		$team_member_name = get_sub_field('team_member_name');
    		$team_member_photo = get_sub_field('team_member_photo');
    		$team_member_title = get_sub_field('team_member_title');

    		?>

    		<div class="col-sm-4 team_member wow fadeInDown">

          <div class="team_member__wrapper">

            <img class="profile" src="<?php echo $team_member_photo; ?>" alt="<?php echo $team_member_name ?>">

            <h4><?php echo $team_member_name ?></h4>

          </div>

          <img class="seperator" src="//localhost:3000/wp-content/themes/starting-theme/images/product_bottom.svg" alt="Wallhung">

          <h5><?php echo $team_member_title ?></h5>

    		</div>

    	<?php endwhile; ?>

    </div>

    <?php endif; ?>

  </div>

</div>
