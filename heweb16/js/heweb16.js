function isMobile() {
    return /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}
(function ($) {
    if ( isMobile() && $('body').hasClass('home') ) {
        var viewport_height = $(window).height();
        $('.hero').css('minHeight', viewport_height * 0.82);
    } else if ( $('body').hasClass('home') ) {
        $('.hero').css('minHeight', 300);
    }
    $('.menu-toggle').on('click', function() {
        $('body').toggleClass('menu-open');
    });
    $('.event-title').on("click", function(){
        $(this).next('.event').toggleClass('open').find('.presenter-bio').removeClass('open');
    });
    $('.toggle-bio').on('click', function(){
        $(this).next('.presenter-bio').toggleClass('open');
    });
})(jQuery, this);