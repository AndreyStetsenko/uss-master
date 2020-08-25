<?php get_header(); ?>

<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>

<section class="home-services">

  <div class="title-main title-main-black">
    <h2 class="title-main--title">Ваша безопасность - наша забота</h2>
  </div>

  <div class="services-h">
    <?php if ( have_rows( 'home-services-top' ) ) : ?>
      <div class="container">
        <div class="services-tabs tab-content" id="nav-tabContent">
        	<?php while ( have_rows( 'home-services-top' ) ) : the_row(); $s_card = $s_card + 1; ?>
            <div class="row services-tabs-item tab-pane fade" id="list-<?php echo $s_card; ?>" role="tabpanel" aria-labelledby="list-<?php echo $s_card; ?>">
              <div class="col-12 col-md-6">
                <div class="services-tabs-item--img img-full-cont">
            		<?php if ( get_sub_field( 'img' ) ) : ?>
            			<img src="<?php the_sub_field( 'img' ); ?>" />
            		<?php endif ?>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="services-tabs-item__cont">
                  <h2 class="services-tabs-item__cont--title"><?php the_sub_field( 'title' ); ?></h2>
                  <span class="services-tabs-item__cont--text"><?php the_sub_field( 'description' ); ?></span>
                  <div class="services-tabs-item__cont--btn">
                    <?php $link = get_sub_field( 'link' ); ?>
                		<?php if ( $link ) : ?>
                			<a class="btn btn-gold" href="<?php echo esc_url( $link); ?>">Подробнее</a>
                		<?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
        	<?php endwhile; ?>
        </div>
      </div>
    <?php else : ?>
    	<?php // no rows found ?>
    <?php endif; ?>

    <?php if ( have_rows( 'home-services-top-title' ) ) : ?>
    <div class="container-fluid">
      <div class="services-links">
        <div class="services-links__list list-group" id="list-tab">
        	<?php while ( have_rows( 'home-services-top-title' ) ) : the_row(); $st_card = $st_card + 1; ?>
            <a class="services-links__list-item" id="list-<?php echo $st_card; ?>" data-toggle="list" href="#list-<?php echo $st_card; ?>" role="tab" aria-controls="list<?php echo $st_card; ?>"><?php the_sub_field( 'title' ); ?></a>
        	<?php endwhile; ?>
        </div>
      </div>
    </div>
    <?php else : ?>
    	<?php // no rows found ?>
    <?php endif; ?>
  </div>

</section>

<section class="home-about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-full-cont img-aboutus">
          <img src="/wp-content/uploads/2020/08/big-logo.svg" alt="uss">
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-cont">
          <h3 class="about-title">О нас</h3>
          <span class="about-text">Служба охраны <b class="c-gold">USS Security</b> работает на рынке охранных услуг с 2008 года. Компании группы были основаны специалистами международного класса, ранее работавшими в таких охранных компаниях как Falck, G4S.</span>
          <ul class="about-list">
            <li><i class="icon far fa-shield-check"></i>USS Security имеет собственный Пульт Централизированной Охраны, патрульные автомобили, а также квалифицированный персонал.</li>
            <li><i class="icon far fa-shield-check"></i>USS Security оказывает охранные услуги физическим лицам (охранная сигнализация, видеонаблюдение и физическая охрана частных домов и квартир).</li>
            <li><i class="icon far fa-shield-check"></i>В своей работе USS Security применяет лучшие наработки крупных международных компаний, работающих в сфере охранного бизнеса.</li>
            <li><i class="icon far fa-shield-check"></i>Все объекты, охраняемые USS Security, принимаются под материальную ответственность.</li>
          </ul>
          <a href="/about-us/" class="btn btn-gold" type="a" name="a">Подробнее</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-price">
  <div class="title-main">
    <h2 class="title-main--title"><?php the_field( 'home-price-title' ); ?></h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="price-services">

          <?php if ( have_rows( 'home-price' ) ) : ?>
            <div class="owl-carousel">
          	<?php while ( have_rows( 'home-price' ) ) : the_row(); ?>
              <div class="item">
                <div class="price-services-item <?php the_sub_field( 'sale' ); ?>">
                  <div class="price-services-sale">
                    <i class="icon fas fa-star"></i>
                  </div>
                  <h4 class="price-services-item--title"><?php the_sub_field( 'service-name' ); ?></h4>
                  <div class="price-services-item--image">
                    <?php if ( get_sub_field( 'img' ) ) : ?>
                			<img src="<?php the_sub_field( 'img' ); ?>" />
                		<?php endif ?>
                  </div>
                  <?php if ( have_rows( 'description' ) ) : ?>
                  <div class="price-services-item__body">
                    <?php while ( have_rows( 'description' ) ) : the_row(); ?>
                    <div class="price-services-content">
                      <span class="price-services-item__body--title"><?php the_sub_field( 'description-title' ); ?></span>
                      <?php if ( have_rows( 'description-repeat' ) ) : ?>
                      <ul class="price-services-item__body--list">
                        <?php while ( have_rows( 'description-repeat' ) ) : the_row(); ?>
                        <li><i class="icon fas fa-check-circle"></i><?php the_sub_field( 'description-text' ); ?></li>
                        <?php endwhile; ?>
                      </ul>
                      <?php else : ?>
                        <?php // no rows found ?>
                      <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                  </div>
                  <?php else : ?>
                    <?php // no rows found ?>
                  <?php endif; ?>
                  <div class="price-services-item__footer">
                    <?php if ( have_rows( 'price' ) ) : ?>
                    <div class="price-services-item__price">
                      <?php while ( have_rows( 'price' ) ) : the_row(); ?>
                      <span class="price-services-item__price--pre"><?php the_sub_field( 'full-price' ); ?></span>
                      <span class="price-services-item__price--main"><?php the_sub_field( 'main-price' ); ?></span>
                      <span class="price-services-item__price--time">/ мес</span>
                      <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <div class="price-services-item--btn">
                      <a type="a" class="btn btn-gold" data-toggle="modal" data-target="#modalPricePack" data-whatever="<?php the_sub_field( 'service-name' ); ?>">Заказать</a>
                    </div>
                    <!-- <div class="price-services-item--more"> -->
                      <!-- <a href=" -->
                      <?php
                      // the_sub_field( 'link' );
                      ?>
                      <!-- ">Подробнее</a> -->
                    <!-- </div> -->
                  </div>
                </div>
              </div>
          	<?php endwhile; ?>
            </div>
          <?php else : ?>
          	<?php // no rows found ?>
          <?php endif; ?>

        </div>

      </div>
    </div>
  </div>
</section>

<?php if ( have_rows( 'home-why' ) ) : ?>
	<?php while ( have_rows( 'home-why' ) ) : the_row(); ?>
  <section class="home-why" style="background: linear-gradient(0deg, rgba(40, 40, 40, 0.75), rgba(40, 40, 40, 0.85)), url('<?php the_sub_field( 'backround' ); ?>')">
    <div class="title-main title-main-black">
        <h2 class="title-main--title"><?php the_sub_field( 'title' ); ?></h2>
    </div>
		<?php if ( have_rows( 'items' ) ) : ?>
    <div class="why-cont">
			<?php while ( have_rows( 'items' ) ) : the_row(); ?>
        <div class="why-cont-item">
          <?php if ( get_sub_field( 'img' ) ) : ?>
  					<img src="<?php the_sub_field( 'img' ); ?>" />
  				<?php endif ?>
          <h2 class="why-cont-item--text"><?php the_sub_field( 'description' ); ?></h2>
        </div>
			<?php endwhile; ?>
    </div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
  </section>
	<?php endwhile; ?>
<?php endif; ?>



<?php if ( have_rows( 'gallery-home' ) ) : ?>
<section class="home-gallery">
	<?php while ( have_rows( 'gallery-home' ) ) : the_row(); ?>
  <div class="title-main">
    <h2 class="title-main--title"><?php the_sub_field( 'title' ); ?></h2>
  </div>
		<?php if ( have_rows( 'gallery-box' ) ) : ?>
    <div class="container">
      <div class="row">
        <div class="gallery-box">
    		<?php while ( have_rows( 'gallery-box' ) ) : the_row(); ?>
    			<?php if ( get_sub_field( 'img' ) ) : ?>
            <a href="<?php the_sub_field( 'img' ); ?>" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
              <img src="<?php the_sub_field( 'img' ); ?>" class="img-fluid rounded">
            </a>
    			<?php endif ?>
    		<?php endwhile; ?>
        </div>
      </div>
    </div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<!-- <section class="home-gallery">

  <div class="title-main">
    <h2 class="title-main--title">Галерея</h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="gallery-box">
        <a href="http://uss.ua/wp-content/uploads/2016/12/19884_308276_1481270874.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
          <img src="http://uss.ua/wp-content/uploads/2016/12/19884_308276_1481270874.jpg" class="img-fluid rounded">
        </a>
        <a href="http://uss.ua/wp-content/uploads/2016/12/19884_308459_1481284522.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
          <img src="http://uss.ua/wp-content/uploads/2016/12/19884_308459_1481284522.jpg" class="img-fluid rounded">
        </a>
        <a href="http://uss.ua/wp-content/uploads/2016/08/19884_308269_1481270874.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
          <img src="http://uss.ua/wp-content/uploads/2016/08/19884_308269_1481270874.jpg" class="img-fluid rounded">
        </a>
        <a href="http://uss.ua/wp-content/uploads/2016/12/19884_308274_1481270874.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
          <img src="http://uss.ua/wp-content/uploads/2016/12/19884_308274_1481270874.jpg" class="img-fluid rounded">
        </a>
        <a href="http://uss.ua/wp-content/uploads/2016/12/19884_308279_1481270874.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
          <img src="http://uss.ua/wp-content/uploads/2016/12/19884_308279_1481270874.jpg" class="img-fluid rounded">
        </a>
        <a href="http://uss.ua/wp-content/uploads/2016/12/19884_308460_1481284522.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
          <img src="http://uss.ua/wp-content/uploads/2016/12/19884_308460_1481284522.jpg" class="img-fluid rounded">
        </a>
        <a href="http://uss.ua/wp-content/uploads/2016/12/19884_308301_1481270874.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery-box-item">
          <img src="http://uss.ua/wp-content/uploads/2016/12/19884_308301_1481270874.jpg" class="img-fluid rounded">
        </a>
        <a href="/gallery" class="gallery-box-item next">
          <img src="http://uss.ua/wp-content/uploads/2016/12/19884_308295_1481270874.jpg">
          <span>Смотреть галерею <i class="icon fas fa-arrow-circle-right"></i></span>
          <div class="flow"></div>
        </a>
      </div>
    </div>
  </div>

</section> -->

<?php if ( have_rows( 'home-clients' ) ) : ?>
<section class="home-clients">
	<?php while ( have_rows( 'home-clients' ) ) : the_row(); ?>
  <div class="title-main">
    <h2 class="title-main--title"><?php the_sub_field( 'section-title' ); ?></h2>
  </div>
		<?php if ( have_rows( 'clients' ) ) : ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="clients-box">
			<?php while ( have_rows( 'clients' ) ) : the_row(); ?>
        <div class="clients-box-item">
          <div class="clients-box-item--img">
            <?php $img = get_sub_field( 'img' ); ?>
    				<?php if ( $img ) : ?>
    					<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
    				<?php endif; ?>
          </div>
          <div class="clients-box-item--title">
            <span class="clients-box-item--title__text"><?php the_sub_field( 'title' ); ?></span>
          </div>
        </div>
			<?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php get_footer(); ?>
