<?php
/*
Plugin Name: Facebook Foot Plugin
Plugin URI: NO URI
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 4.1.2
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

 //Exit if Accessed Directly

 if(!defined('ABSPATH')){
     exit;
 }
//Global Options Variable
$ffl_options = get_option('ffl_settings');

 //Load Scripts
 require_once(plugin_dir_path(__FILE__).'/includes/facebook-foot-plugin-scripts.php');

  //Load Content
  require_once(plugin_dir_path(__FILE__).'/includes/facebook-foot-plugin-content.php');

if(is_admin()){
     //Load Settings
  require_once(plugin_dir_path(__FILE__).'/includes/facebook-foot-plugin-settings.php');

}

 