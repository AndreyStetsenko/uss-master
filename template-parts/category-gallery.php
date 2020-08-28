<?php
  /**
   * Template Name: Галерея
   * Template Post Type: page
   */
  __( 'Галерея', 'page-gallery' );

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
      <div class="col-12 col-md-12">
        <div class="gallery-list row">

          <?php /*
           * Template name: Блог
           */
          $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
          $args = array(
          	'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
            'category__and' => 104,
          	'paged'          => $current_page // текущая страница
          );
          query_posts( $args );

          $wp_query->is_archive = true;
          $wp_query->is_home = false;

          while(have_posts()): the_post();
          	?>
            <div class="gallery-list-item">
              <div class="row">
                <div class="col-12 col-md-4">
                  <div class="gallery-list-item__img">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                </div>
                <div class="col-12 col-md-8">
                  <div class="gallery-list-item__body">
                    <h2 class="gallery-list-item__body--title"><?php the_title(); ?></h2>
                    <p class="gallery-list-item__body--text"><?php do_excerpt(get_the_excerpt(), 50); ?></p>
                    <div class="gallery-list-item__body--footer">
                      <span class="gallery-list-item__body--date"><?php the_date('d F Y'); ?></span>
                      <a class="gallery-list-item__body--link" href="<?php the_permalink(); ?>">Перейти к событию ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          	<?php
          endwhile;?>

        </div>
        <div class="pagination-list">
          <?php
          echo paginate_links( array(
            'show_all'     => false, // показаны все страницы участвующие в пагинации
          	'end_size'     => 1,     // количество страниц на концах
          	'mid_size'     => 1,     // количество страниц вокруг текущей
          	'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
          	'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
          	'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
          	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
          	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
          	'screen_reader_text' => __( 'Posts navigation' ),
          ) );

          wp_reset_postdata(); // чтобы ничего не поломать
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
