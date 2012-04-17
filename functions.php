<?php
  /*
    function define_css_path() {
      return get_template_directory_uri() . '/style.php';
    }
    add_filter('stylesheet_uri', 'define_css_path');
  */
  function hide_version(){
    return '';
  }
  add_filter('the_generator', 'hide_version');
  
  function theme_scripts(){
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.5.3.min.js', array(), '2.5.3' );
    wp_deregister_script( 'jquery' );
    wp_enqueue_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", array(), '1.7.1', true );
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins-min.js', array(), '1', true );
    wp_enqueue_script('theme_script', get_template_directory_uri() .'/js/theme-min.js', array(), '1', true );

  }
  add_action('wp_enqueue_scripts', 'theme_scripts');
  
?>