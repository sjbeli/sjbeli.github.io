<?php
function northpoint_setup_theme() {

  // Register Menu Locations
  register_nav_menus(
    array(
      'primary'     =>  esc_html__( 'Top of Page: Header', 'northpoint' ),
      // Not using footer nav menu at the moment
      // 'footer'      =>  esc_html__( 'Bottom of Page: Footer', 'northpoint' ),
    ) );

  // Setup Widget Areas (Sidebars) They're just not necessary anymore with blocks...
  // A temporary message at the top of the page! Let's turn it off!
  // register_sidebar([
  //   'name'          =>  esc_html__( 'Temporary Message Widget', 'northpoint' ),
  //   'id'            =>  'sidebar-1',
  //   'description'   =>  esc_html__( 'Add a temp message to the top of the page!','northpoint' ),
  //   'before_widget' =>  '<section class="widget %2$s">',
  //   'after_widget'  =>  '</section>',
  //   'before_title'  =>  '<h2 class="widget-title">',
  //   'after_title'   =>  '</h2>',
  // ]);

  // A footer widget area - because who knows why? Let's turn it off!
  // register_sidebar([
  //   'name'          =>  esc_html__( 'Footer Area Widget', 'northpoint' ),
  //   'id'            =>  'sidebar-2',
  //   'description'   =>  esc_html__( 'Add a footer widget','northpoint' ),
  //   'before_widget' =>  '<section class="widget">',
  //   'after_widget'  =>  '</section>',
  //   'before_title'  =>  '<h2 class="widget-title">',
  //   'after_title'   =>  '</h2>',
  // ]);

  // Add Theme Support Basics
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', [ 'image', 'video', 'gallery' ] );
  add_theme_support( 'custom-background' );
  add_theme_support( 'html5' );
  // Support for Gutenberg block editor?? WTF?? - shows wide/full block editor options
  // Why have to add this? Duh, should be standard WP!!! Fn wakeup WP!
  add_theme_support( 'align-wide' );
  // Remove WP version number
  remove_action('wp_head', 'wp_generator');
}
?>