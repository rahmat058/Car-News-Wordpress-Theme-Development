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

 /**
 * Widget Support
 */
function my_widgets_sidebar(){
  register_sidebar( array(
  'name'          => __( 'Home Page Sidebar One', 'carnews' ),
  'id'            => 'widget-home-one',
  'before_widget' => '<div class="siderbar-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4 class="sidebar-widget-title">',
  'after_title'   => '</h4> ',
) );

  register_sidebar( array(
  'name'          => __( 'Footer widget One', 'carnews' ),
  'id'            => 'footer-one',
  'before_widget' => '<div class="footer-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2> ',
) );
}
add_action( 'widgets_init', 'my_widgets_sidebar' );
