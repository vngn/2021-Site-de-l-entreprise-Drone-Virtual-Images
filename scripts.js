$(function () {
    /**
     * Smooth scrolling to page anchor on click
     **/
    $("a[href*='#']:not([href='#'])").click(function () {
        if (
            location.hostname == this.hostname &&
            this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) + "]");
            if (anchor.length) {
                $("html, body").animate({
                    scrollTop: anchor.offset().top
                }, 750);
            }
        }
    });
});

/**
 * btn retour vers le haut
 **/
$('<div></div>')
    .attr('id', 'scrolltotop')
    .hide()
    .css({
        'z-index': '1000',
        'position': 'fixed',
        'bottom': '25px',
        'right': '35px',
        'cursor': 'pointer',
        'width': '40px',
        'height': '40px',
        'background': '#111111'
    })
    .appendTo('body')
    .click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    });
$('<div></div>')
    .css({
        'width': '6px',
        'height': '6px',
        'transform': 'rotate(-135deg)',
        'border': 'solid #ffffff',
        'border-width': '0 3px 3px 0',
        'padding': '3px',
        'margin-top': '16px',
        'margin-left': '12px'
    })
    .appendTo('#scrolltotop');
$(window).scroll(function () {
    if ($(window).scrollTop() < 500) {
        $('#scrolltotop').fadeOut();
    } else {
        $('#scrolltotop').fadeIn();
    }
});
