<?php
/*
Template Name: Contact
 */
?>

<?php get_header(); ?>


<?php
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	wpcf7_enqueue_scripts();
}

if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
	wpcf7_enqueue_styles();
}
?>

<?php get_template_part( 'content', 'page_header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>



<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>