$( document ).ready(function() {
    var position = 0;

    $(window).on("scroll", function(){
        $('.nav__sticky-wrapper').addClass('site-header--fixed');
        if (position > $(this).scrollTop()) {
            console.log("show nav");  
            
            $('.nav__sticky-wrapper').addClass('site-header--active'); 
        } else {
            console.log("hide nav");
            $('.nav__sticky-wrapper').addClass('site-header--fixed');
            $('.nav__sticky-wrapper').removeClass('site-header--active');
        }
        position = $(this).scrollTop();
    });

	$('.nav-toggle__btn').on("click", function(){
        $('.nav-container').toggleClass("nav-container--active");
        $('body').toggleClass('modal-open');
    });
});
