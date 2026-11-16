jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1500
    }).on('counterUp:finished', function() {
        $(this).text($(this).text() + '+');
    });
});
