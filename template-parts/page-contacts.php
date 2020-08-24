<?php
  /**
   * Template Name: Контакты
   * Template Post Type: page
   */
  __( 'Контакты', 'page-contacts' );

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


<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="contacts contacts-info">
          <div class="contacts-info-contacts">
            <h2 class="title-3">г. Киев</h2>
            <a href="tel:+380445007788" class="contacts-info--item"><i class="icon fas fa-phone-alt"></i>+38 (044) 5007788</a>
            <a href="tel:+380674063545" class="contacts-info--item"><i class="icon fas fa-phone-alt"></i>+38 (067) 4063545</a>
            <a href="mailto:uss@uss.ua" class="contacts-info--item"><i class="icon fas fa-at"></i>uss@uss.ua</a>
            <a href="" class="contacts-info--item"><i class="icon fas fa-map-marker-alt"></i>USS Security, ул. Н. Гринченко 4а, 03680, Киев, Украина</a>
            <a href="#" class="btn btn-gold" data-toggle="modal" data-target="#modalContactsMap">Показать на карте</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 l-separator">
        <div class="contacts contacts-form h-100 all-center">
          <h3>Оставить заявку</h3>
          <?php echo do_shortcode('[contact-form-7 id="6118" title="Контакты"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
