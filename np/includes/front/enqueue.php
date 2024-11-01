<?php
function northpoint_enqueue_theme_scripts() {

  // set variables - to keep things clean
  $uri  =   get_template_directory_uri();
  $ver  =   NP_DEV_MODE ? time() : false;

  // register/enqueue css/js files

  // normalize:
  wp_register_style( 'np_normalize',
    'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
    [],
    $ver
  );
  wp_enqueue_style( 'np_normalize' );

  // google-fonts:
  wp_register_style( 'np_google-fonts',
    'https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap',
    [],
    $ver
  );
  wp_enqueue_style( 'np_google-fonts' );

  // font-awesome:
  wp_register_script( 'np_font-awesome',
    'https://kit.fontawesome.com/24362247b4.js',
    [],
    $ver,
    false
  );
  wp_enqueue_script( 'np_font-awesome' );

  // the main css stylesheet:
  wp_register_style( 'np_style',
    $uri . '/style.css',
    [],
    $ver,
    false
  );
  wp_enqueue_style( 'np_style');

  // NOT USING FOR NOW js to shrink the header on scroll - for screens >575px
  // wp_register_script( 'np_header-shrink',
  //   $uri . '/assets/js/header-shrink.js',
  //   [],
  //   $ver,
  //   true
  // );
  // wp_enqueue_script( 'np_header-shrink' );

  // this is jquery - req'd for WP
  wp_enqueue_script( 'jquery' );
}

// moves current (above) wp-required jquery to load bottom
function np_move_jquery_to_footer() {
    wp_scripts()->add_data( 'jquery', 'group', 1 );
    wp_scripts()->add_data( 'jquery-core', 'group', 1 );
    wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'np_move_jquery_to_footer' );
?>