<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) :

	$box_intro = get_field('box_intro');
	$infoGraphic = get_field('info_graphic');
	$tech_intro = get_field('tech_intro');

	?>

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
		<?php if ($box_intro): ?>
		<li><a href="#box" role="tab" data-toggle="tab">What's in the box</a></li>
		<?php endif; ?>
		<?php if ($tech_intro): ?>
		<li><a href="#tech" role="tab" data-toggle="tab">Technical Specification</a></li>
		<?php endif; ?>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		<div class="tab-pane active" id="description"><?php echo the_content(); ?></div>
		<?php if ($box_intro): ?>
			<div class="tab-pane" id="box">
				<div class="row">
					<div class="col-md-12">
						<div class="intro">
							<?php echo $box_intro ?>
						</div>
					</div>
					<div class="col-md-4">
						<?php if( have_rows('box_contents') ): ?>

								<ul class="included_products">

									Contents

									<?php $i = 1; while( have_rows('box_contents') ): the_row();

										// vars
										$boxContentsName = get_sub_field('box_contents_name');

										?>

										<li>

											#<?php echo $i; ?> <?php echo $boxContentsName ?>

										</li>

									<?php $i++; endwhile; ?>

								</ul>

							<?php endif; ?>
					</div>
					<?php endif; ?>
					<?php if($infoGraphic) : ?>
						<div class="col-md-8 box_image">
							<img src="<?php echo $infoGraphic ?>" alt="<?php echo the_title(); ?>">
						</div>

				</div>

			</div>
		<?php endif; ?>
		<?php if ($tech_intro): ?>
			<div class="tab-pane" id="tech">


				<div class="row">
					<div class="col-md-12">
						<div class="intro">
							<?php echo $tech_intro ?>
						</div>
					</div>
					<div class="col-md-12">


						<?php if( have_rows('tech_table') ): ?>

							<?php while( have_rows('tech_table') ): the_row();

								// vars
								$item_name = get_sub_field('item_name');
								$item_no = get_sub_field('item_no');
								$link_to_single_product = get_sub_field('link_to_single_product');

								?>

								<div class="tech_table matchheight">

									<div class="item_title">
										<?php echo $item_name ?>
									</div>

									<div class="item_no">
										<p>item no:</p>
										<h3><?php echo $item_no ?></h3>
									</div>

									<?php if( have_rows('item_details') ): ?>

											<?php

											// loop through rows (sub repeater)
											while( have_rows('item_details') ): the_row();

											$item_detail = get_sub_field('item_detail');

												// display each item as a list - with a class of completed ( if completed )
												?>
												<div class="item_details matchitem">
													<?php echo $item_detail; ?>
												</div>
											<?php endwhile; ?>


										<?php endif; ?>

								</div>

							<?php endwhile; ?>

						<?php endif; ?>



					</div>
				</div>


			</div>
		<?php endif; ?>
		</div>
	</div>

<?php endif; ?>
