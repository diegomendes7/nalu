jQuery(document).ready(function($) {
	jQuery('.produto-carousel').slick({
	  dots: false,
    arrows: true,
		vertical: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
		autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
					dots: false,
	        slidesToShow: 2,
	        slidesToScroll: 1,
					autoplay: true,
	  			autoplaySpeed: 2000,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
					dots: false,
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
					vertical: false,
					dots: false,
	        slidesToShow: 1,
	        slidesToScroll: 1,
					autoplaySpeed: 2000,
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
});
