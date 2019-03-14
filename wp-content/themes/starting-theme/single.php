<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
	include(locate_template("inc/page-elements/breadcrumbs.php"));
	include(locate_template("inc/page-news/title-single.php"));
	include(locate_template("inc/page-news/content.php"));
 ?>

<?php
get_footer();
