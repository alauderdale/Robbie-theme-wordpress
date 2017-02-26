<?php
/*
Template Name: media
 */
?>


<?php get_header(); ?>

        <section class='inverse-section hero-header-lg bg-cover hero-media' style='background-image:url(<?php the_field('media_background_image');?>); margin-bottom:-200px;'>
          <div class='container'>
            <div class='row'>
              <div class='col-lg-12 text-center'>
                <h2 class='headline-accent headline-accent-xl no-pull muted-accent' style='color:#46505B!important;'>
                  <?php the_field('media_title');?>
                </h2>
                }
                <h1 style='margin-top:-30px;'>
                  <?php the_field('media_subtitle');?>
                </h1>
              </div>
            </div>
          </div>
        </section>
        <section class='media-grid'>
          <div class='container'>
            <div class='grid'>
              <div class='grid-sizer'></div>

              <?php $medialoop = new WP_Query( array('post_type' => 'media', 'posts_per_page' => 100) ); ?>
              <?php while ( $medialoop->have_posts() ) : $medialoop->the_post(); ?>

                <div class='grid-item'>
                  <a class='fancybox' href='<?php the_field('media_image');?>'>
                    <img class='full-width' src='<?php the_field('media_image');?>'>
                    <div class='img-title'>
                      <h2>
                        <?php the_title();?>
                      </h2>
                    </div>
                  </a>
                </div>

              <?php wp_reset_postdata(); ?>
              <?php endwhile; // end of the loop. ?>

            </div>
          </div>
        </section>




  <div style='margin-top:-40px;'>
    <?php get_template_part( 'content', 'teaser' ); ?>
  </div>


<?php get_footer(); ?>