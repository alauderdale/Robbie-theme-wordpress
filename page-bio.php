<?php
/*
Template Name: Bio
 */
?>


<?php get_header(); ?>


<section class='inverse-section hero-header-lg bg-cover hero-bio' style='background-image:url(<?php the_field('bio_background_image');?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12 text-center'>
        <h2 class='headline-accent headline-accent-xl no-pull muted-accent'>
          <?php the_field('bio_title');?>
        </h2>
        <h1 style='margin-top:-30px;'>
          <?php the_field('bio_subtitle');?>
        </h1>
        <div class='row'>
          <div class='col-sm-3'></div>
          <div class='col-sm-6'>
            <p class='text-center'>
              <?php the_field('bio_text');?>
            </p>
          </div>
          <div class='col-sm-3'></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class='bio-info-graphics'>
  <div class='container'>
    <div class='row'>
        <?php if( have_rows('bio_graphics') ): ?>
            <?php 
            while( have_rows('bio_graphics') ): the_row(); 
            // vars
            $text = get_sub_field('text');
            $image = get_sub_field('image');
            $stat = get_sub_field('stat');
            ?>
            <div class='col-sm-4'>
              <div class='bio-info-graphic'>
                <div class='bio-info' style='background-image:url(<?php echo $image; ?>);'>
                  <h1 class='text-center'>
                    <?php echo $stat; ?>
                  </h1>
                </div>
                <h5 class='text-center'>
                  <?php echo $text; ?>
                </h5>
              </div>
            </div>



            <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</section>
<section class='section-trailor'>
  <div class='container'>
    <div class='row bio-stack-top'>
      <div class='col-md-7'>
        <a class='fb-video' href='<?php the_field('bio_video_link');?>'>
          <div class='slider-bio' style='background-image:url(<?php the_field('bio_video_image');?>);'>
            <div class='play-icon'>
              <i class='fa fa-play-circle'></i>
            </div>
            <h1 class='hidden-xs'>
              <?php the_field('bio_video_caption');?>
            </h1>
          </div>
        </a>
      </div>
      <div class='col-md-5'></div>
    </div>
    <div class='row entertainment-stack-bottom'>
      <div class='col-md-7'></div>
      <div class='col-md-5'>
        <div class='div card-texture-dark-bio'>
          <h3>
            <?php the_field('bio_panel_title');?>
          </h3>
          <p class='margin-bottom'>
            <?php the_field('bio_panel_text');?>
          </p>
          <div class='btn-stack'>
            <a class='btn btn-block btn-wire btn-lg half-margin-bottom' href='<?php the_field('bio_panel_media_link');?>'>
              More pics & Vids
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='row hidden-xs'>
      <div class='col-md-1'></div>
      <div class='col-md-5'>
        <img class='full-width' src='<?php the_field('bio_quote_pic');?>'>
      </div>
      <div class='col-md-6'></div>
    </div>
  </div>
</section>



<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; // end of the loop. ?>


<?php get_template_part( 'content', 'teaser' ); ?>



<?php get_footer(); ?>