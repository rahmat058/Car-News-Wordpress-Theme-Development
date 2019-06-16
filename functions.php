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


 /**
 * Featured Image Support
 */
 add_theme_support('post-thumbnails', array('post', 'page') );

 set_post_thumbnail_size(200, 200, true); 

 add_image_size('myFituredImage', 330, 330, true);
 add_image_size('myFituredImage1', 300, true);
