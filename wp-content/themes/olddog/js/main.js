$(document).ready(function($){
    $('#menu').dcAccordion({
        eventType: 'click',
        autoClose: false,
        saveState: false,
        disableLink: false,
        showCount: false,
        speed: 'slow'
    });
    
    $(".owl-carousel").owlCarousel({
        
            loop:true,
            margin:0,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                400:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        
    });
    
    $('.popup-open').magnificPopup({ 
		type: 'inline',
		preloader: false
	});
    
});

(function($) {
$(function() {

  $('select, .radio_but, .check').styler();

});
})(jQuery);

$(function() { 
  $(".btn_menu_mobile").click(function() {
    $("body").toggleClass("open_catal");
    $(this).toggleClass("active"); return false;
  });
  $(".sh").click(function() {
    $("body").toggleClass("open_catal");
    return false;
  });
});


