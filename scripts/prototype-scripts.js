$(document).ready(function () {
    show_suggestion_form();
    show_new_user_banner();
});

var show_suggestion_form = function () {

    var $found_an_error_form = $('.found-an-error'),
        $show_suggestion_form = $('#show-suggestion-form');

    $found_an_error_form.hide();

    $show_suggestion_form.on('click', function (e) {
        e.preventDefault();
        $found_an_error_form.slideToggle();
    })
};

var show_new_user_banner = function () {

    var $new_user_banner = $('.new-user-banner'),
        $holds_link = $('.holds-link');

    $new_user_banner.slideDown();

    $remove_link = $('<a>', {
        'text': window.close_link_text,
        'href': '#',
        'click': function (e) {
            e.preventDefault();
            tnaSetThisCookie('returning_user', 365);
            $new_user_banner.slideUp();
        }
    });

    $remove_link.appendTo($holds_link);
}