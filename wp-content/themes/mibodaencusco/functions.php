<?php
/**
 * Add custom widgets areas
 */
function mibodaencusco_widgets_init() {
  // Menu widgets
  $args = array(
    'name'          => 'Menu Widgets',
    'id'            => 'menu-widgets',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
  );
  register_sidebar( $args );
}
add_action('widgets_init', 'mibodaencusco_widgets_init');

/**
 * Enqueue custom CSS files and Scripts
 */
if ( ! function_exists( 'mibodaencusco_css_js' ) ) {
  // Load theme's JavaScript and CSS sources.
  function mibodaencusco_css_js() {
    wp_enqueue_style( 'mibodaencusco-style', get_stylesheet_directory_uri() . '/style.css');
  }
} // endif function_exists( 'mibodaencusco_css_js' ).
add_action( 'wp_enqueue_scripts', 'mibodaencusco_css_js' );
