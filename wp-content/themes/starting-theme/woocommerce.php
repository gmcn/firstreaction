<?php
/**
  * Template Name: Woocommerce
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-elements/breadcrumbs.php"));
?>

<?php if ( is_singular( 'product' ) ) : ?>

  <?php
  include(locate_template("inc/woocommerce/single.php"));
  ?>

<?php else : ?>

<?php
include(locate_template("inc/woocommerce/loop.php"));
?>

<?php endif; ?>

<?php
get_footer();
