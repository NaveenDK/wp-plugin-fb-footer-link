<?php

function ffp_add_footer($content){
    return $content.'Hello world';
}

add_filter('the_content','ffp_add_footer');
