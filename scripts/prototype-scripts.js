$(document).ready(function () {
    show_new_user_banner();
    manage_delivery_options();
    provide_user_research_tools();
    $('.user-collaboration').user_collaboration();
});

$.fn.user_collaboration = function (options) {
    return this.each(function () {
        var $this = $(this),
            $foundAnError = $('.found-an-error', $this),
            $showSuggestionForm = $('#show-suggestion-form', $this),
            $whatIsTheError = $('#whatIsTheError', $this);

        $foundAnError.hide();

        $this.on('click', '#show-suggestion-form', function (e) {
            e.preventDefault();
            $foundAnError.slideToggle();
            $showSuggestionForm.hide();
            $whatIsTheError.focus();
        });

        $this.on('click', '.close-this', function (e) {
            e.preventDefault();
            console.log('Hide suggestion form');
            $foundAnError.slideToggle();
            $showSuggestionForm.show();
            $('a', $showSuggestionForm).focus();
        })
    });
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
    $image_link_to_remove.on('click', function (e) {
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
};

var provide_user_research_tools = function () {

    var select_record = function (index) {
        (['1', '2'].indexOf(index) !== -1) ? window.location.search = ['record=2536', 'record=2537'][index - 1] : '';
    };

    document.addEventListener('keyup', function (e) {
        select_record(e.key);
    });
};