$(document).ready(function(){

// init Masonry
var $grid = $('.grid').masonry({
      // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.grid-item',
      // use element for option
      columnWidth: '.grid-sizer',
      percentPosition: true
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});




   //fancybox
  $('.fancybox').fancybox({
        padding: 0
    });
  
  $('.fb-video').fancybox({
        padding: 0,
        helpers: {
            media: {}
        }
   });

  $( "#js-menu-button-open,#js-menu-button-close" ).click(function() {
        $( ".main-nav-container" ).toggleClass( "fixed-nav" );
        $( ".menu-drop" ).toggleClass( "menu-show" );
        $( "html" ).toggleClass( "nav-open" );
    });




    //main nav
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= 200) {
            $(".global-nav").addClass("dark-header");
        } else {
            $(".global-nav").removeClass("dark-header");
        }
    });
    



});
