jQuery(document).ready(function() {
  var owl = jQuery('.news-carousel');
  owl.owlCarousel({
	loop: true,
	margin: 30,
	autoplay: true, 
	dots:true,
	nav:true,
	navContainer:[".news-carousel-nav"],
	navText:["<i class='la la-arrow-left la-lg'></i>","<i class='la la-arrow-right la-lg'></i>"],
	responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
  });
});

jQuery(document).ready(function() {
  var owl = jQuery('.testimonials-carousel');
  owl.owlCarousel({
	loop: true,
	margin: 30,
	autoplay: false, 
	dots:false,
	nav:true,
	responsive:{
        0:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
  });
});
