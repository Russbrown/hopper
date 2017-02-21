$( document ).ready(function() {
    var position = 0;

	$('.nav-toggle__btn').on("click", function(){
        $('.nav-container').slideToggle();
    });

    window.setInterval(imageFlicker, 375);

    function imageFlicker() {
        var current = $('.people-gif.active');
        if (current.next().hasClass("people-gif")) {
            current.next().addClass('active');
            current.removeClass('active');
        } else {
            current.removeClass('active');
            $('.tile-image-1').addClass('active');
        }   
    }

    $('.people-rollover, .people-gif').on("click", function(){
        $(this).siblings(".tile__people__popup").addClass('active');
    });

    $('.popup__close').on("click", function(){
        $(this).closest(".tile__people__popup").removeClass('active');
    });

    $('.js-anchor').on('click', function(){
        // close nav
        $('.nav-container').removeClass("nav-container--active");
        $('body').removeClass('modal-open');        
        // slide to target
        var target = '#' + $(this).text();
        $(document.body).animate({
            'scrollTop':   $(target).offset().top
        }, 1000);
        return false;
    });

    $('.tile-type--About').on("click", function(){
         // slide to target
        var target = '#About';
        $(document.body).animate({
            'scrollTop':   $(target).offset().top
        }, 1000);
        return false;       
    });
});
