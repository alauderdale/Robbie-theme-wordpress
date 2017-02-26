<?php
/*
Template Name: Info
 */
?>


<?php get_header(); ?>

  <section class='inverse-section hero-header-lg bg-cover hero-info' style='background-image:url(<?php the_field('stunt_show_hero_background');?>);'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-12 text-center'>
          <h2 class='headline-accent headline-accent-xl no-pull muted-accent'>
            <?php the_field('stunt_show_hero_title');?>
          </h2>
          <h1 style='margin-top:-30px;'>
            <?php the_field('stunt_show_hero_subtitle');?>
          </h1>
          <div class='row'>
            <div class='col-sm-3'></div>
            <div class='col-sm-6'>
              <p class='text-center'>
                <?php the_field('stunt_show_hero_text');?>
              </p>
              <a class='btn btn-wire btn-lg half-margin-top double-padding-left double-padding-right' href='<?php the_field('stunt_show_hero_link');?>'>
                BOOK NOW
              </a>
            </div>
            <div class='col-sm-3'></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='section-how-it-works' style='background-image:url(../images/how-it-works-bg.png);'>
    <div class='container'>
      <div class='row double-margin-bottom'>
        <div class='col-lg-12'>
          <h2 class='headline-accent headline-accent-xl no-pull muted-accent-white-bg'>
            <?php the_field('how_it_works_title');?>
          </h2>
          <h2>
            <?php the_field('how_it_works_subtitle');?>
          </h2>
        </div>
      </div>
      <div class='how-it-works-steps'>

        <?php if( have_rows('stunt_show_steps') ): ?>
            <?php 
            $number = 1;
            while( have_rows('stunt_show_steps') ): the_row(); 
            // vars
            $title = get_sub_field('step__title');
            $text = get_sub_field('step_text');
            ?>
          <div class='how-it-works-step'>
            <div class='col-sm-6 how-it-works-step-inner'>
              <div class='row'>
                <div class='col-sm-8 text'>
                  <h3>
                    <span class="visible-xs pull-left quarter-padding-right">
                      <?php echo $number; ?>.
                    </span>
                    <?php echo $title; ?>
                  </h3>
                  <p>
                    <?php echo $text; ?>
                  </p>
                </div>
                <div class='col-sm-4 number'>
                  <div class='tire hidden-xs'>
                    <h1>
                      <?php echo $number; ?>
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <?php 
            $number++;
            endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section>
    <div class='container'>
      <div class='row'>
        <div class='info-images-container'>
          <div class='col-sm-7 info-img-col-1 info-img-col'>
            <div class='info-img-card'>
              <img class='full-width' src='<?php the_field('stunt_show_image_one');?>'>
            </div>
          </div>
          <div class='col-sm-6 info-img-col-2 info-img-col'>
            <div class='info-img-card'>
              <img class='full-width' src='<?php the_field('stunt_show_image_two');?>'>
            </div>
          </div>
          <div class='col-sm-4 info-img-col-3 info-img-col'>
            <div class='info-img-card'>
              <img class='full-width' src='<?php the_field('stunt_show_image_three');?>'>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style='margin-top:-80px;'>
    <?php get_template_part( 'content', 'teaser' ); ?>
  </div>


<?php get_footer(); ?>