<?php
  /**
   * Template Name: Вакансии
   * Template Post Type: page
   */
  __( 'Вакансии', 'page-vacancies' );

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
      <div class="col-12 col-md-9">
        <div class="main-content">

          <h3 class="title-3 mb-4">Приглашаем на постоянную работу в охранную компанию USS Security</h3>

          <?php if ( have_rows( 'vacancies' ) ) : ?>
          <div class="vacancies-cards">
          	<?php while ( have_rows( 'vacancies' ) ) : the_row(); ?>
            <div class="vacancies-card">
              <h2 class="vacancies-card--title"><?php the_sub_field( 'title' ); ?></h2>
              <div class="vacancies-card--info"><?php the_sub_field( 'description' ); ?></div>
            </div>
          	<?php endwhile; ?>
          </div>
          <?php else : ?>
          	<?php // no rows found ?>
          <?php endif; ?>

          <h4 class="title-4 mb-4 mt-4">Заинтересованы? Заполните форму ниже, и наши специалисты свяжутся с Вами!</h4>

          <div class="vacancies-form">
            <?php echo do_shortcode('[wpforms id="6117"]'); ?>
            <!-- <form class="form form-modal vacancies-form--form">
              <div class="inputs">
                <div class="form-group select">
                  <select class="form-control selectpicker" id="formVacanciesVacancy" title="Выберите вакансию">
                    <option>Менеджер по продажам</option>
                    <option>Охранник</option>
                  </select>
                </div>
                <div class="form-group">
                  <input placeholder="Номер телефона" type="text" id="formVacanciesPhone" required>
                  <label for="formVacanciesPhone">Контактный номер телефона</label>
                </div>
                <div class="form-group">
                  <input placeholder="Ссылка на резюме" type="text" id="formVacanciesResumeLink" required>
                  <label for="formVacanciesResumeLink">Ссылка на Ваше резюме</label>
                </div>
                <div class="form-group">
                  <input class="custom-file-input" placeholder="Файл с резюме" type="file" id="formVacanciesResumeFile">
                  <label class="custom-file-label" for="formVacanciesResumeFile">Прикрепить файл с резюме</label>
                </div>
              </div>
              <div class="form-group form-group-textarea">
                <textarea placeholder="Комментарий" name="name" rows="8" cols="80" id="formVacanciesComment" required></textarea>
                <label for="formVacanciesComment">Комментарий</label>
              </div>
              <button type="button" name="button" class="btn btn-vac btn-gold active">Заказать</button>
            </form> -->
          </div>

        </div>
      </div>
      <div class="col-12 col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
