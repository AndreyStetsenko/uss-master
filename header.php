<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div id="topbar" class="topbar tobar-toggle">
    <div class="container">
      <div class="row">
        <div class="col-7 col-md-6 topbar-col topbar-left-col">
          <div class="topbar-cont">

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<div class="navbar-brand-text">
								<h1 class="navbar-brand-text--title"><?php bloginfo( 'name' ); ?></h1>
								<span class="navbar-brand-text--description"><?php echo get_bloginfo('description'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
							</div>
							<?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
							<img src="<?php echo $custom_logo__url[0]; ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a>


          </div>
        </div>
        <div class="col-5 col-md-6 topbar-col topbar-right-col">
          <div class="topbar-cont">

						<?php if ( have_rows( 'header-contacts', 'option' ) ) : ?>
						<div class="dropdown topbar-dropdown topbar-contacts">
							<?php while ( have_rows( 'header-contacts', 'option' ) ) : the_row(); ?>
								<?php if ( have_rows( 'main-contact' ) ) : ?>
									<?php while ( have_rows( 'main-contact' ) ) : the_row(); ?>
										<a href="<?php the_sub_field( 'link' ); ?>" class="btn btn-secondary dropdown-toggle">
			                <i class="icon <?php the_sub_field( 'Icon' ); ?>"></i><?php the_sub_field( 'text' ); ?>
			              </a>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php if ( have_rows( 'dropdown-contacts' ) ) : ?>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<?php while ( have_rows( 'dropdown-contacts' ) ) : the_row(); ?>

			                <a href="<?php the_sub_field( 'link' ); ?>"><i class="icon <?php the_sub_field( 'icon' ); ?>"></i><?php the_sub_field( 'text' ); ?></a>

									<?php endwhile; ?>
									</div>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>

            <!-- <div class="dropdown topbar-dropdown topbar-contacts">
              <a href="tel:+380445007788" class="btn btn-secondary dropdown-toggle">
                <i class="icon fas fa-phone-alt"></i>+380 (44) 500 77 88
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="mailto:uss@uss.ua"><i class="icon fas fa-envelope"></i>uss@uss.ua</a>
                <a href="#"><i class="icon fas fa-map-marker-alt"></i>USS Security, М. Гринченка, 4а, 03680, Киев, Украина</a>
              </div>
            </div> -->

            <div class="dropdown topbar-dropdown topbar-lang">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php
								    $current_language = get_locale();

								    if( $current_language == 'en_US' ){
								      echo 'EN';
								    }

										if( $current_language == 'ru_RU' ){
								      echo 'RU';
								    }

										if( $current_language == 'uk' ){
								      echo 'UA';
								    }

								?>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<?php
								 wp_nav_menu([
									 'menu'            => 'Language',
									 'theme_location'  => 'lang',
									 'depth'           => 1,
								 ]);
								 ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

	<div class="navbar-uss-top">
		<div class="navbar-uss-top__lang">
			<?php
			 wp_nav_menu([
				 'menu'            => 'Language',
				 'theme_location'  => 'lang',
				 'depth'           => 1,
			 ]);
			 ?>
		</div>
		<div class="navbar-uss-top__phone">
			<a href="tel:+380445007788">
				<span class="navbar-uss-top__phone--text">24/7</span>
				<i class="icon fas fa-phone"></i>
			</a>
		</div>
	</div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-uss" id="nav-top">
    <div class="container">
      <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="navbar-brand--logo"><?php bloginfo( 'name' ); ?></span>
				<img src="<?php echo $custom_logo__url[0]; ?>" alt="<?php bloginfo( 'name' ); ?>">
			</a>
      <button class="navbar-toggler" type="button">
        <div class="navbar-toggler-burger">
          <div class="burger-line burger-line--1"></div>
          <div class="burger-line burger-line--2"></div>
          <div class="burger-line burger-line--3"></div>
        </div>
      </button>

			<?php
		   wp_nav_menu([
		     'menu'            => 'top',
		     'theme_location'  => 'top',
		     'container'       => 'div',
		     'container_id'    => 'bs4navbar',
		     'container_class' => 'navbar-collapse',
		     'menu_id'         => false,
		     'menu_class'      => 'navbar-nav mx-auto',
		     'depth'           => 2,
		     'fallback_cb'     => 'bs4navwalker::fallback',
		     'walker'          => new bs4navwalker()
		   ]);
		   ?>
    </div>
  </nav>
