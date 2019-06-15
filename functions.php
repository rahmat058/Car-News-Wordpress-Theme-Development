<?php

/**
 * Registering Menu Support
 */

 function myCarNewsMenu() {
   if(function_exists('register_nav_menu')) {
    register_nav_menu('header_top_menu', __('Header Menu', 'carnews') );
    register_nav_menu('footer_menu', __('Footer Menu', 'carnews') );
   }
 }

 add_action('init', 'myCarNewsMenu');