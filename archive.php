<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uss
 */
$post = $wp_query->post;

  if (in_category('105')) { //ID категории
    include(TEMPLATEPATH.'/template-parts/category-services.php');
  } elseif (in_category('104')) {
		include(TEMPLATEPATH.'/template-parts/category-gallery.php');
	} else {
      include(TEMPLATEPATH.'/archive-default.php');
  }
?>
