<?php
  /**
   * Template Name: Расчет сигнализации
   * Template Post Type: page
   */
  __( 'Расчет сигнализации', 'page-alarm-cost' );

  get_header();
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-title">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="breadcrumbs-cont">
          <?php the_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
