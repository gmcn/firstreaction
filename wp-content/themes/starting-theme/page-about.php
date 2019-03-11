<?php
/**
 * Template Name: About Page
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
include(locate_template("inc/page-about/main.php"));
include(locate_template("inc/page-about/section-one.php"));
include(locate_template("inc/page-about/section-two.php"));
include(locate_template("inc/page-about/team.php"));
?>

<?php
get_footer();
