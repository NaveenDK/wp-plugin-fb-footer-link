<?php

function ffp_add_footer($content){
   

    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content">';
    $footer_output .= '<span class ="dashicons dashicons-facebook"></span> Find me on  <a target="_blank" 
    href="https://facebook.com"> facebook </a>';
    return $content.$footer_output;
}

add_filter('the_content','ffp_add_footer');
