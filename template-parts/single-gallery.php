<?php
  /**
   * Template Name: Post Gallery
   * Template Post Type: page
   */
  __( 'Post Gallery', 'single-gallery' );

  get_header();
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-title">
          <?php
          the_title( '<h1 class="page-title">', '</h1>' );
          ?>
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
        <?php
        while ( have_posts() ) : ?>
        <div class="post-gallery">

          <div class="post-gallery-main">
            <div class="row">
              <div class="col-12">
                <div class="post-gallery-main--content">
                  <div class="post-gallery-main__post">
                    <!-- <p class="post-gallery-main__post--text"> -->
                      <?php
											the_post();
											the_content(); ?>
                    <!-- </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="post-gallery-gal">
            <div class="row">
              <div class="col-12 col-md-4">
                <div class="post-gallery-gal--img">
                  <div class="post-gallery-gal--img__img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="uss">
                  </div>
                </div>
              </div>
              <?php if ( have_rows( 'gallery-box' ) ) : ?>
              <div class="col-12 col-md-8">
                <div class="post-gallery-imgs gallery-box">
              	<?php while ( have_rows( 'gallery-box' ) ) : the_row(); ?>
              		<?php if ( get_sub_field( 'img' ) ) : ?>
                    <a href="<?php the_sub_field( 'img' ); ?>" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
                      <img src="<?php the_sub_field( 'img' ); ?>" class="img-fluid rounded">
                    </a>
              		<?php endif ?>
              	<?php endwhile; ?>
                </div>
              </div>
              <?php else : ?>
              	<?php // no rows found ?>
              <?php endif; ?>
            </div>
          </div>

        </div>

        <div class="post-footer">
          <div class="post-meta">
            <div class="post-meta-item">
              <span class="post-meta-item--left">Дата:</span>
              <span class="post-meta-item--right"><?php the_date('d F Y'); ?></span>
            </div>
            <div class="post-meta-item">
              <span class="post-meta-item--left">Теги:</span>
              <span class="post-meta-item--right"><?php the_tags(''); ?></span>
            </div>
          </div>

          <!-- <div class="post-pagination">
            <div class="post-pagination-item post-pagination-left">
              <div class="post-pagination-item__icon">
                <i class="icon fal fa-chevron-left"></i>
              </div>
              <div class="post-pagination-item__text">
                <span class="post-pagination-item__text--title">Предыдущая запись</span>
                <a href="#" class="post-pagination-item__text--text">В Киеве состоялось открытие пространства MANDARIN MAIS...</a>
              </div>
            </div>
            <div class="post-pagination-item post-pagination-right">
              <div class="post-pagination-item__text">
                <span class="post-pagination-item__text--title">Предыдущая запись</span>
                <a href="#" class="post-pagination-item__text--text">В Киеве состоялось открытие пространства MANDARIN MAIS...</a>
              </div>
              <div class="post-pagination-item__icon">
                <i class="icon fal fa-chevron-right"></i>
              </div>
            </div>
          </div> -->



          <div class="post-last">
            <?php
            // необязательно, но в некоторых случаях без этого не обойтись
            global $post;

            // тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
            $related_tax = 'category';

            // получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
            $cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );

            // массив параметров для WP_Query
            $args = array(
            	'posts_per_page' => 4, // сколько похожих постов нужно вывести,
            	'tax_query' => array(
            		array(
            			'taxonomy' => $related_tax,
            			'field' => 'id',
            			'include_children' => false, // нужно ли включать посты дочерних рубрик
            			'terms' => $cats_tags_or_taxes,
            			'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
            		)
            	)
            );
            $misha_query = new WP_Query( $args );

            // если посты, удовлетворяющие нашим условиям, найдены
            if( $misha_query->have_posts() ) :

            	// выводим заголовок блока похожих постов
            	echo '<div class="post-last--title"><span>Похожие публикации</span><hr></div>';?>

              <div class="post-last__items">
                <?php
                // запускаем цикл
              	while( $misha_query->have_posts() ) : $misha_query->the_post();
              		// в данном случае посты выводятся просто в виде ссылок
              		echo  '<div class="post-last__items--item">' .
                          '<span class="post-last__items--item-date">'. $misha_query->post->post_date .'</span>' .
                          '<a class="post-last__items--item-text" href="' . get_permalink( $misha_query->post->ID ) . '">' . $misha_query->post->post_title . '</a>' .
                          '<hr>' .
                        '</div>';
              	endwhile;
               ?>
              </div>

            <?php endif;

            // не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
            wp_reset_postdata();
             ?>
          </div>
        </div>

        <?php endwhile; // End of the loop. ?>
      </div>
      <!-- <div class="col-12 col-md-3"> -->
        <!-- @include('inc/sidebar.html') -->
      <!-- </div> -->
    </div>
  </div>
</section>

<?php get_footer(); ?>
