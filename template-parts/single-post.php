<?php
  /**
   * Template Name: Post Service
   * Template Post Type: page
   */
  __( 'Post Service', 'single-post' );

  get_header();
?>

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
