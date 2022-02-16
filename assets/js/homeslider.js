$(document).ready(function() {
  var owl = $('.bannerhomerw .owl-carousel');
      owl.owlCarousel({
        margin: 10,
        nav: true,
        dotsEach: true,
        autoplay:true,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    })