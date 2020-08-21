<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uss
 */
$post = $wp_query->post;

  if (in_category('15')) { //ID категории
    include(TEMPLATEPATH.'/template-parts/single-post.php');
  } elseif (in_category('17')) {
		include(TEMPLATEPATH.'/template-parts/single-gallery.php');
	} else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>
