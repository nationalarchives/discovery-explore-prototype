<?php

include('locale/content.php');

include(set_record_data());

function set_record_data()
{
    switch (filter_input(INPUT_GET, 'record')) {
        case ('2537'):
            $include = '2537.php';
            break;
        case ('2536'):
            $include = '2536.php';
            break;
        default:
            $include = '2537.php';
    }
    return 'locale/' . $include;
}

function new_user_banner($heading, $description)
{
    if (isset($_COOKIE['returning_user']) && $_COOKIE['returning_user'] === 'true') {
        return '';
    } else {
        return sprintf("<div class='new-user-banner'><div class='container holds-link'><h3>%s</h3><p>%s</p></div></div>", $heading, $description);
    }
}

function render_breadcrumb($breadcrumbs)
{

    $return_string = '';

    foreach ($breadcrumbs as $crumb) {
        $return_string .= sprintf("<li><a href='#'>%s</a></li>", $crumb);
    }

    echo $return_string;
}