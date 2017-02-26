<?php
/*
Template Name: Home
 */
?>


<?php get_header(); ?>
<section class='inverse-section hero-header-lg bg-cover' style='background-image:url(<?php the_field('home_hero_background_image');?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12 text-center'>
        <h2 class='headline-accent headline-accent-lg no-pull'>
          <?php the_field('home_hero_title');?>
        </h2>
        <h1>
          <?php the_field('home_hero_subtitle');?>
        </h1>
      </div>
    </div>
  </div>
</section>
<section class='section-trailor' style='background-image:url(<?php bloginfo('template_url'); ?>/images/section_bg_trailor.png);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-6 text-center margin-bottom'>
        <h2 class='headline-accent headline-accent-lg'>
          <?php the_field('entertainment_title');?>
        </h2>
        <h2>
          <?php the_field('entertainment_subtitle');?>
        </h2>
      </div>
      <div class='col-sm-6'></div>
    </div>
    <div class='row entertainment-stack-top'>
      <div class='col-md-7'>
        <div class='slider-entertainment' style='background-image:url(<?php the_field('entertainment_panel_background_image');?>);'></div>
      </div>
      <div class='col-md-5'></div>
    </div>
    <div class='row entertainment-stack-bottom'>
      <div class='col-md-7'></div>
      <div class='col-md-5'>
        <div class='div card-texture-dark-entertainment'>
          <h3>
            <?php the_field('entertainment_panel_title');?>
          </h3>
          <p class='margin-bottom'>
          	<?php the_field('entertainment_panel_text');?>
          </p>
          <div class='btn-stack'>
            <a class='btn btn-block btn-wire btn-lg half-margin-bottom' href='<?php the_field('entertainment_book_now_link');?>'>
              BOOK NOW
            </a>
            <a class='btn btn-block btn-wire btn-lg' href='<?php the_field('entertainment_learn_more_link');?>'>
              Learn more
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='row hidden-xs'>
      <div class='col-md-1'></div>
      <div class='col-md-10'>
        <img class='full-width' src='<?php the_field('entertainment_quote_image');?>'>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>
<section class='inverse-section section-rider bg-cover' style='background-image:url(<?php the_field('rider_background_image');?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-3'></div>
      <div class='col-md-6 text-center'>
        <div class='rider-text'>
          <h2 class='headline-accent headline-accent-lg no-pull'>
            <?php the_field('rider_title');?>
          </h2>
          <h1>
            <?php the_field('rider_subtitle');?>
          </h1>
          <p class='double-margin-bottom'>
            <?php the_field('rider_text');?>
          </p>
          <div class='btn-stack'>
            <div class='row'>
              <div class='col-sm-2'></div>
              <div class='col-sm-8'>
                <a class='btn btn-block btn-wire btn-lg half-margin-bottom fb-video' href='<?php the_field('rider_video_link');?>'>
                  <i class='fa fa-play' style='margin-right:5px;'></i>
                  See robbie in action
                </a>
                <a class='btn btn-block btn-wire btn-lg' href='<?php the_field('more_about_robbie_page_link');?>'>
                  More about robbie
                </a>
              </div>
              <div class='col-sm-2'></div>
            </div>
          </div>
        </div>
      </div>
      <div class='col-md-3'></div>
    </div>
  </div>
</section>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center margin-bottom'>
        <h2 class='headline-accent headline-accent-lg'>
          Media
        </h2>
        <h2>
          Pics & Vids
        </h2>
      </div>
    </div>
    <div class='row'>
      <section class='media-grid'>
        <div class='container'>
          <div class='grid'>
            <div class='grid-sizer'></div>

            <?php $medialoop = new WP_Query( array('post_type' => 'media', 'posts_per_page' => 9) ); ?>
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
    </div>
  </div>
</section>


<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; // end of the loop. ?>

<div style='margin-top:-60px;'>
  <?php get_template_part( 'content', 'teaser' ); ?>
</div>


<?php get_footer(); ?>