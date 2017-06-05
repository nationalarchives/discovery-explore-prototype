//Modenizr test for data URI support
(function () {
    if (Modernizr === undefined) {
        return;
    }
    var data = new Image();
    data.onload = data.onerror = function () {
        var img = this;
        Modernizr.addTest('datauri', function () {
            return (img.width === 1 && img.height === 1);
        });
    };
    data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
})();

$(function () { // All content must be placed within this IIFE.
    $.polyfillPlaceholder({ targetElement: '#tnaSearch' });
    $.polyfillPlaceholder({ targetElement: '#query' });

    // JavaScript to be run on the home page only

    // Functionality being replicated in experiment.js
    // Uncomment this block of code when that is no longer being used. 

    //if ($('#home-page').length) {
    //    $("ul[role='tablist'] li a").tabify({ customEvent: true });
    //}

    // JavaScript to handle 'sorting' message - it seems overly complicated to address this on the back-end
    if ($('#sort-form select:disabled').length) {
        var k = $('#sort-form').find('.emphasis-block');
        k.remove();
        k.insertAfter('#search-control-panel');
    }

    $('#scope-selector').click();

});   // All content must be placed within this IIFE. 

