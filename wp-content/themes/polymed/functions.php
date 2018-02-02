<?php
include('includes/wp_bootstrap_navwalker.php');

/**
 * Enqueue scripts and styles for the front end.
 *
 */
function polymed_scripts() {
  // Custom CSS
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/polymed.css', array());
  // JQuery
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/jquery.min.js', array());
  // Bootstrap JS
  //wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap-sass-twbs/vendor/assets/javascripts/bootstrap.js', array());
  wp_enqueue_script( 'alert', get_template_directory_uri() . '/bower_components/bootstrap-sass-twbs/vendor/assets/javascripts/bootstrap/alert.js', array());
  wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/bower_components/bootstrap-sass-twbs/vendor/assets/javascripts/bootstrap/dropdown.js', array());
  wp_enqueue_script( 'collapse', get_template_directory_uri() . '/bower_components/bootstrap-sass-twbs/vendor/assets/javascripts/bootstrap/collapse.js', array());
  wp_enqueue_script( 'modal', get_template_directory_uri() . '/bower_components/bootstrap-sass-twbs/vendor/assets/javascripts/bootstrap/modal.js', array());
  wp_enqueue_script( 'carousel', get_template_directory_uri() . '/bower_components/bootstrap-sass-twbs/vendor/assets/javascripts/bootstrap/carousel.js', array());
  wp_enqueue_script( 'transition', get_template_directory_uri() . '/bower_components/bootstrap-sass-twbs/vendor/assets/javascripts/bootstrap/transition.js', array());
  wp_enqueue_script( 'polymed', get_template_directory_uri() . '/js/polymed.js', array());
}

add_action( 'wp_enqueue_scripts', 'polymed_scripts' );



register_nav_menus(array(
  'primary' => __( 'Primary Menu', 'PolyMed' ),
  'about' => __( 'About Menu', 'PolyMed' ),
  'solutions' => __( 'Solutions Menu', 'PolyMed' )
));

remove_filter('the_content', 'wpautop');
