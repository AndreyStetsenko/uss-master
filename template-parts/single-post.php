<?php
  /**
   * Template Name: Post Service
   * Template Post Type: page
   */
  __( 'Post Service', 'single-post' );

  get_header();
?>

<?php if ( have_rows( 'services-banners-imgs' ) ) : ?>
  <div class="banner-services">
    <div class="container">
      <div class="banner-services-img">
    	<?php while ( have_rows( 'services-banners-imgs' ) ) : the_row(); ?>
    		<?php if ( get_sub_field( 'services-main-img-desc' ) ) : ?>
    			<img class="banner-services-img--img banner-services-img--img-desc" src="<?php the_sub_field( 'services-main-img-desc' ); ?>" />
    		<?php endif ?>
    		<?php if ( get_sub_field( 'services-main-img-mob' ) ) : ?>
    			<img class="banner-services-img--img banner-services-img--img-mob" src="<?php the_sub_field( 'services-main-img-mob' ); ?>" />
    		<?php endif ?>
    	<?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-title">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
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

        </div>

				<?php endwhile; // End of the loop. ?>
      </div>
      <div class="col-12 col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
