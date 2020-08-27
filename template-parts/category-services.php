<?php
  /**
   * Template Name: Услуги
   * Template Post Type: category
   */
  __( 'Услуги', 'category-services' );

  get_header();
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-title">
          <h1 class="page-title"><?php single_cat_title(); ?></h1>
        </div>
        <div class="breadcrumbs-cont">
          <?php the_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-9">
        <div class="services-list row">

          <?php /*
           * Template name: Блог
           */
          $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
          $args = array(
          	'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
            'category__and' => 105,
          	'paged'          => $current_page // текущая страница
          );
          query_posts( $args );

          $wp_query->is_archive = true;
          $wp_query->is_home = false;

          while(have_posts()): the_post();
          	?>
            <div class="services-list-item col-md-6">
              <a href="<?php the_permalink(); ?>" class="services-list-item__cont" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(43, 42, 42, 0.6)), url('<?php the_post_thumbnail_url('full'); ?>');">
                <h2 class="services-list-item__cont--title"><?php the_title(); ?></h2>
                <span class="services-list-item__cont--desc"><?php the_field( 'services-description' ); ?></span>
              </a>
            </div>
          	<?php
          endwhile;?>

        </div>
      </div>
      <div class="col-12 col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
