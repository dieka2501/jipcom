$(document).ready(function() {     
      var owl = $("#owl-hero-slider");     
      owl.owlCarousel({
        autoPlay : 6000,
        paginationSpeed : 3000,
        navigation : true,
        pagination : false,
        navigationText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
            ],
        singleItem : true,
        transitionStyle : "fadeUp"
      });
      $("#owl-news").owlCarousel({
        autoPlay: false,
        items : 4,
        pagination : false,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });     
      $("#owl-gallery").owlCarousel({

        autoPlay: false,
        items : 4,
        pagination : false,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        transitionStyle : "backSlide"
      });
    });
    $(document).ready(function() {     
        // Datepicker
        $('#datetimepicker-arrival').datetimepicker();
        $('#datetimepicker-departure').datetimepicker();
        $('#datetimepicker-arrival-modal').datetimepicker();
        $('#datetimepicker-departure-modal').datetimepicker();
    });
   	$(document).ready(function() {
        $('.fancybox').fancybox({
            helpers : {
                overlay : {
                    css : {
                        'background' : 'rgba(255, 255, 255, 0.75)'
                    }
                }
            }
        });
    });
    $(function(){
      var $elems = $('.animateblock');
      var winheight = $(window).height();
      var fullheight = $(document).height();
      
      $(window).scroll(function(){
        animate_elems();
      });
      
      function animate_elems() {
        wintop = $(window).scrollTop(); // calculate distance from top of window
     
        // loop through each item to check when it animates
        $elems.each(function(){
          $elm = $(this);
          
          if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
          
          topcoords = $elm.offset().top; // element's distance from top of page in pixels
          
          if(wintop > (topcoords - (winheight*.75))) {
            // animate when top of the window is 3/4 above the element
            $elm.addClass('animated');
          }
        });
      } // end animate_elems()
    });
    (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
            });

    })();