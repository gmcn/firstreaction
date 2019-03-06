<?php
/**
 * Template Name: Front Page
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
  include(locate_template("inc/page-front/hero.php"));
  include(locate_template("inc/page-front/main-products.php"));
  include(locate_template("inc/page-front/moto.php"));
  include(locate_template("inc/page-front/call-1.php"));
  include(locate_template("inc/page-front/intro.php"));
  include(locate_template("inc/page-front/testimonials.php"));
  include(locate_template("inc/page-front/call-2.php"));
  include(locate_template("inc/page-front/sub-products.php"));
  ?>

<?php
//get_sidebar();
get_footer();
