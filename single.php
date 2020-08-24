<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uss
 */
$post = $wp_query->post;

  if (in_category('105')) { //ID категории
    include(TEMPLATEPATH.'/template-parts/single-post.php');
  } elseif (in_category('104')) {
		include(TEMPLATEPATH.'/template-parts/single-gallery.php');
	} else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>
