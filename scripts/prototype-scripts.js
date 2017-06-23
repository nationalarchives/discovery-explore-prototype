$(document).ready(function () {
    show_suggestion_form();
    show_new_user_banner();
    manage_delivery_options();
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

    var $new_user_banner = $('#home_alert'),
        $holds_link = $('.holds-link'),
        $image_link_to_remove = $('#alert_close_button');

    $new_user_banner.slideDown();

    $remove_link = $('<a>', {
        'text': window.close_link_text,
        'href': '#',
        'click': function (e) {
            e.preventDefault();
            $new_user_banner.slideUp();
        }
    });

    // This is a temporary measure to allow for:
    //  - the textual link to close the banner
    //  - the image link to close the banner
    $image_link_to_remove.on('click', function(e) {
        e.preventDefault();
        $new_user_banner.slideUp();
    });

    $remove_link_and_persist = $('<a>', {
        'text': window.close_link_and_persist_text,
        'href': '#',
        'style': 'padding-left: 1.5em;',
        'click': function (e) {
            e.preventDefault();
            tnaSetThisCookie('returning_user', 365);
            $new_user_banner.slideUp();
        }
    });

    $holds_link.append($remove_link).append($remove_link_and_persist);

};

var manage_delivery_options = function () {
    var $expander_link = $('.expander-link'),
        $supplemental_content = $('.supplemental-content');

    $expander_link.on('click', function (e) {
            e.preventDefault();

            var $this = $(this);

            $this.toggleClass('expanded');
            $supplemental_content.slideToggle();
        }
    )
}