<?php
/*
Template Name: Contact
 */
?>

<?php get_header(); ?>

<section class='contact-section hero-header-lg' style='background-image:url(<?php the_field('contact_background_image');?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-3 col-md-2'></div>
      <div class='col-lg-6 col-md-8'>
        <h2 class='text-center'>
          <?php the_field('contact_title');?>
        </h2>
      </div>
      <div class='col-lg-3 col-md-2'></div>
    </div>
    <div class='row margin-top'>
      <div class='col-lg-3 col-md-2'></div>
      <div class='col-lg-6 col-md-8'>
        <div class='panel'>
          <div class='panel-body'>
            <p class='text-center margin-bottom'>
              <?php the_field('contact_hello_text');?>
            </p>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content();?>
            <?php endwhile; // end of the loop. ?>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-2'></div>
    </div>
  </div>
</section>
<style>
  footer{
  	background:transparent!important;
  	margin-top:-176px;
  }
</style>



<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>