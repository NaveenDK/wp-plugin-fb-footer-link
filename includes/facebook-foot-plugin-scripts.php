<?php

//add Scripts
function ffp_add_scripts(){
   wp_enqueue_style('ffp-main-style', plugins_url().'/facebook-foot-plugin/css/style.css');
   wp_enqueue_script('ffp-main-script',plugins_url().'/facebook-foot-plugin/js/main.js');
   //wp_enqueue_script/style('NAME_WELIKETOCALL_THE_FILE', 'PATH_TO_THE_FILE);

}

add_action('wp_enqueue_scripts','ffp_add_scripts'); 