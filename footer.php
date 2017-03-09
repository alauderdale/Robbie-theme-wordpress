<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

      <footer class='primary-footer'>
        <section class='text-center'>
          <div class='container'>
            <div class='col-lg-12'>
              <p>
                Be social
              </p>
              <?php wp_nav_menu( array( 
                'theme_location' => 'menu-social', 
                'container' => false, 
                'menu_class' => 'social-list',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
              )); ?>
              <p class='headline-font-name footer-line'>
                © 2016 Robbie Pfunder. All rights reserved
              </p>
            </div>
          </div>
        </section>
      </footer>
      <script src="<?php bloginfo('template_url'); ?>/js/lib/menu_button.js" type="text/javascript"></script>
      <script>
        transformicons.add('.tcon')
      </script>
      <?php wp_footer(); ?>
    </body>
  </head>
</html>