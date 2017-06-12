$(document).ready(function() {

    var $new_user_banner = $('.new-user-banner'),
        $holds_link = $('.holds-link');

    $new_user_banner.slideDown();

    $remove_link = $('<a>', {
        'text' : window.close_link_text,
        'href' : '#',
        'click' : function(e) {
            e.preventDefault();
            tnaSetThisCookie('returning_user', 365);
            $new_user_banner.slideUp();
        }
    });

    $remove_link.appendTo($holds_link);

});