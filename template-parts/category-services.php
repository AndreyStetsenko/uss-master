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

          <?php if ( have_posts() ) : ?>

            <?php
            global $post;

            // записываем $post во временную переменную $tmp_post
            $tmp_post = $post;
            $args = array( 'posts_per_page' => 10, 'category' => 105 );
            $myposts = get_posts( $args );
            $src = get_the_post_thumbnail_url(null, 'full');

            foreach( $myposts as $post ){ setup_postdata($post);
            	?>
              <div class="services-list-item col-md-6">
                <a href="<?php the_permalink(); ?>" class="services-list-item__cont" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(43, 42, 42, 0.6)), url('<?php the_post_thumbnail_url('full'); ?>');">
                  <h2 class="services-list-item__cont--title"><?php the_title(); ?></h2>
                  <span class="services-list-item__cont--desc"><?php the_field( 'services-description' ); ?></span>
                </a>
              </div>
            	<?php
            }

            // возвращаем былое значение $post
            $post = $tmp_post;
            ?>

      		<?php endif;?>

        </div>
      </div>
      <div class="col-12 col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
