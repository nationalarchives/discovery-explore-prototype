$(document).ready(function() {
    $found_an_error_form = $('.found-an-error');
    $show_suggestion_form = $('#show-suggestion-form');

    $found_an_error_form.hide();

    $show_suggestion_form.on('click', function(e) {
        e.preventDefault();
        $found_an_error_form.slideToggle();
    })

});