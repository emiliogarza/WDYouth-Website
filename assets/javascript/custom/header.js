/* Variables for the header-shower-thingy */
var didScroll;
var lastScrollTop = 0;
var delta = 2;
var navbarHeight = $('#site-navigation').outerHeight();

$(window).scroll(function() {
    didScroll = true;
});

/*Triggers a call to the header-shower-thingy function (after 250 MS) */
setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(window).scrollTop();
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta) {
        return;
    }
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#site-navigation').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#site-navigation').removeClass('nav-up');
        }
    }
    lastScrollTop = st;
}