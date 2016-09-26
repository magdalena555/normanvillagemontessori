

// artwork page slider
(function($){
    // all jquery code goes in here
    $(document).ready(function(){
 
       

        // magnific popout js on gallery
        $('.parent-container').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image',
          gallery:{enabled:true},
          
          preload: [0,2], // read about this option in next Lazy-loading section

          navigateByImgClick: true,

          titleSrc: 'title',
          enabled:true
        }); // end popup js

        $('.home-popup').magnificPopup({
          type: 'image'
          // other options
        });

        // activity magnific popout
        $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
          verticalFit: true
        },
        zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        }
        });

        // flickity

          $('.carousel').flickity({
            // options
                autoPlay: true,
                freeScroll: true,
                pageDots: false,
                pauseAutoPlayOnHover: false,
                wrapAround: true
          });
          $('.quote-carousel').flickity({
            // options
                "autoPlay": 6000,
                freeScroll: true,
                pageDots: false,
                pauseAutoPlayOnHover: false,
                wrapAround: true
          });

          // mobile navigation menu
          $('.mobileNavIcon').on('click', function(){
            $('.mobile').slideToggle(500);
          });



          // scroll reveal!
          window.sr = new ScrollReveal({
            opacity: 0.20,
            easing: 'ease',
            mobile: false,
            enter: 'bottom',
            delay : 300,
          });

          sr.reveal('.reveal');

    });


})(jQuery);



