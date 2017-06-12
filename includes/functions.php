<?php

include('locale.php');

function new_user_banner($heading, $description)
{
    if (isset($_COOKIE['returning_user']) && $_COOKIE['returning_user'] === 'true') {
        return '';
    } else {
        return sprintf("<div class='new-user-banner'><div class='container holds-link'><h3>%s</h3><p>%s</p></div></div>", $heading, $description);
    }
}

