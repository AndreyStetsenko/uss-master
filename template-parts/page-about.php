<?php
  /**
   * Template Name: О компании
   * Template Post Type: page
   */
  __( 'О компании', 'page-about' );

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
      <div class="col-1"></div>
      <div class="col-12 col-md-10">
        <div class="main-content">

          <div class="about-company">
            <div class="row">
              <div class="col-md-7">
                <div class="mt-3">
                  <p class="about-text">Служба охраны <b class="c-gold">USS Security</b> работает на рынке охранных услуг с 2008 года. Компании группы были основаны специалистами международного класса, ранее работавшими в таких охранных компаниях как Falck, G4S.</p>
                  <p class="about-text">USS Security имеет государственные лицензии на охранную деятельность на осуществление:</p>
                  <ul class="about-list">
                    <li><i class="icon far fa-circle"></i>физической охраны</li>
                    <li><i class="icon far fa-circle"></i>технической охраны</li>
                    <li><i class="icon far fa-circle"></i>монтажа охранного оборудования</li>
                    <li><i class="icon far fa-circle"></i>видеонаблюдения</li>
                    <li><i class="icon far fa-circle"></i>монтаж и техническое обслуживание пожарной сигнализации</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img-full-cont img-aboutus">
                  <img src="/wp-content/uploads/2020/08/big-logo.svg" alt="uss">
                </div>
              </div>
            </div>
          </div>

          <?php if ( have_rows( 'about-questions' ) ) : ?>
          <div class="about-questions">
            <div class="accordion about-questions-accordion about-cont" id="accordionAboutQuestions">
            	<?php while ( have_rows( 'about-questions' ) ) : the_row(); $q_card = $q_card + 1; ?>
                <div class="card">
                  <div class="card-header" id="heading<?php echo $q_card; ?>">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $q_card; ?>" aria-expanded="false" aria-controls="collapse<?php echo $q_card; ?>">
                      <?php the_sub_field( 'title' ); ?>
                    </button>
                    <i class="icon fas fa-chevron-down"></i>
                  </div>
                  <div id="collapse<?php echo $q_card; ?>" class="collapse" aria-labelledby="heading<?php echo $q_card; ?>" data-parent="#accordionAboutQuestions">
                    <div class="card-body">
                    <?php the_sub_field( 'description' ); ?>
                    </div>
                  </div>
                </div>
            	<?php endwhile; ?>
            </div>
          </div>
          <?php else : ?>
          	<?php // no rows found ?>
          <?php endif; ?>

          <div class="about-mission">
            <h3 class="title-3 about-title">Миссия и кредо</h3>

            <div class="about-mission-cont about-cont">
              <span class="about-mission-cont--text">Ежедневно делать жизнь и бизнес наших клиентов более безопасными, используя европейский опыт и знание специфики украинского охранного рынка.</span>

              <div class="about-mission-cont__list">
                <div class="about-mission-cont__list--item">
                  <i class="icon far fa-shield-check"></i>
                  <div class="about-mission-cont__list--text">
                    <span class="about-mission-cont__list--title">Цель функционирования USS Security</span>
                    <span class="about-mission-cont__list--description">Наша цель — понять проблему и предоставить оптимальное решение каждому клиенту, обеспечив ему максимальные уверенность и спокойствие.</span>
                  </div>
                </div>
                <div class="about-mission-cont__list--item">
                  <i class="icon far fa-shield-check"></i>
                  <div class="about-mission-cont__list--text">
                    <span class="about-mission-cont__list--title">Область деятельности USS Security</span>
                    <span class="about-mission-cont__list--description">USS Security специализируется на предосталении полного спектра охранных услуг от охраны частных домов и квартир и до обеспечения комплексных охранных мероприятий крупных коммерческих объектов.</span>
                  </div>
                </div>
                <div class="about-mission-cont__list--item">
                  <i class="icon far fa-shield-check"></i>
                  <div class="about-mission-cont__list--text">
                    <span class="about-mission-cont__list--title">Философия USS Security — качество и индивидуальный подход</span>
                    <span class="about-mission-cont__list--description">Основой деятельности USS Security является соблюдение высоких стандартов качества предоставляемых услуг, а также ориентация на потребности каждого клиента с учетом его индивидуальных особенностей и пожеланий.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="about-values">
            <h3 class="title-3 about-title">Ценности</h3>

            <div class="about-values__list about-cont">
              <div class="about-values__list--item">
                <i class="icon far fa-shield-check"></i>
                <div class="about-values__list--text">
                  <span class="about-values__list--title">Индивидуальный подход</span>
                  <span class="about-values__list--description">Ориентация на потребности каждого клиента с учетом его индивидуальных особенностей и пожеланий.</span>
                </div>
              </div>
              <div class="about-values__list--item">
                <i class="icon far fa-shield-check"></i>
                <div class="about-values__list--text">
                  <span class="about-values__list--title">Профессионализм</span>
                  <span class="about-values__list--description">Неукоснительное выполнение своих договорных обязательств, а также уважение интересов и прав клиента.</span>
                </div>
              </div>
              <div class="about-values__list--item">
                <i class="icon far fa-shield-check"></i>
                <div class="about-values__list--text">
                  <span class="about-values__list--title">Законопослушность</span>
                  <span class="about-values__list--description">Соблюдение законов Украины и лояльность по отношению к государственным интересам.</span>
                </div>
              </div>
              <div class="about-values__list--item">
                <i class="icon far fa-shield-check"></i>
                <div class="about-values__list--text">
                  <span class="about-values__list--title">Забота о благополучии клиента</span>
                  <span class="about-values__list--description">Обеспечение безопасности и целостности не только материальных ценностей, но и здоровья и благополучия охраняемых нами физических лиц.</span>
                </div>
              </div>
              <div class="about-values__list--item">
                <i class="icon far fa-shield-check"></i>
                <div class="about-values__list--text">
                  <span class="about-values__list--title">Конфиденциальность в работе с клиентом</span>
                  <span class="about-values__list--description">Недопустимость разглашения коммерческой тайны и вмешательства в дела клиента.</span>
                </div>
              </div>
              <div class="about-values__list--item">
                <i class="icon far fa-shield-check"></i>
                <div class="about-values__list--text">
                  <span class="about-values__list--title">Прогрессивность</span>
                  <span class="about-values__list--description">Стремление всегда быть на пике современных тенденций и направлений.</span>
                </div>
              </div>
            </div>
          </div>

          <div class="about-founders">
            <h3 class="title-3 about-title">Учредители</h3>

            <div class="row">
              <div class="col-md-6">
                <div class="img-full-cont img-aboutus">
                  <img src="/wp-content/uploads/2020/08/logo-usinvest.png" alt="uss">
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-cont">
                  <p class="about-text"><b class="c-gold">USS Security</b> входит в структуру международного инвестиционного холдинга  <b>US Invest</b>, предприятия которого ведут успешную деятельность в странах Прибалтики, России и Украине.</p>
                  <p class="about-text">Для создания в Украине охранной компании европейского образца, US Invest привлек команду профессионалов с более чем <b>20-летним</b> опытом работы в сфере обеспечения охраны и безопасности.</p>
                  <p class="about-text">Таким образом, в своей деятельности USS Security использует опыт, методики и технологии ведущих европейских охранных фирм, таких как <b>G4S, Falck, ESS</b>.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
                <div class="about-cont">
                  <h3 class="title-3 mb-5">US Invets AS</h3>
                  <p class="about-text"><b>US INVEST AS</b> является частным инвестиционным холдингом. Основан в 1991 году г-ном Урмасом Сыырумаа. Центральный офис расположен в Цюрихе (Швейцария).</p>
                  <p class="about-text">Холдинг ведёт успешную деятельность в таких отраслях как:</p>
                  <ul class="about-list">
                    <li><i class="icon far fa-circle"></i>девелопмент, строительство и управление объектами;</li>
                    <li><i class="icon far fa-circle"></i>недвижимость;</li>
                    <li><i class="icon far fa-circle"></i>энергетика;</li>
                    <li><i class="icon far fa-circle"></i>охранные услуги;</li>
                    <li><i class="icon far fa-circle"></i>социальные услуги (паркинги, медицина, образование) и пр.</li>
                  </ul>
                  <p class="about-text">Компании холдинга находятся в <b>Эстонии, Латвии, Литве, Испании, России и Украине</b>.</p>
                </div>
              </div>
              <div class="col-md-5">
                <div class="img-full-cont img-aboutus">
                  <img src="/wp-content/uploads/2020/08/map.png" alt="uss">
                </div>
              </div>
            </div>
          </div>

          <?php if ( have_rows( 'about-partners' ) ) : ?>
          <div class="about-partners">
          	<?php while ( have_rows( 'about-partners' ) ) : the_row(); ?>
              <h3 class="title-3 about-title"><?php the_sub_field( 'main-title' ); ?></h3>
          		<?php if ( have_rows( 'items' ) ) : ?>
              <div class="about-partners__list about-cont">
          			<?php while ( have_rows( 'items' ) ) : the_row(); ?>
                  <div class="about-partners__list--item">
                    <div class="about-partners__list--img">
                      <?php if ( get_sub_field( 'img' ) ) : ?>
              					<img src="<?php the_sub_field( 'img' ); ?>" />
              				<?php endif ?>
                    </div>
                    <span class="about-partners__list--title">
                      <?php the_sub_field( 'title' ); ?>
                    </span>
                  </div>
          			<?php endwhile; ?>
              </div>
          		<?php else : ?>
          			<?php // no rows found ?>
          		<?php endif; ?>
          	<?php endwhile; ?>
          </div>
          <?php else : ?>
          	<?php // no rows found ?>
          <?php endif; ?>

          <?php if ( have_rows( 'home-clients' ) ) : ?>
          <div class="about-clients">
          	<?php while ( have_rows( 'home-clients' ) ) : the_row(); ?>
            <h3 class="title-3 about-title"><?php the_sub_field( 'section-title' ); ?></h3>
          		<?php if ( have_rows( 'clients' ) ) : ?>
                    <div class="clients-box about-cont">
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
          		<?php else : ?>
          			<?php // no rows found ?>
          		<?php endif; ?>
          	<?php endwhile; ?>
          </div>
          <?php endif; ?>

        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
