<?php

// Setup
define( 'NP_DEV_MODE', false );

// Includes -
include( get_theme_file_path( '/includes/front/enqueue.php') );
include( get_theme_file_path( '/includes/setup.php') );

// Hooks - Load in CSS, Remove WP Version tag
add_action( 'wp_enqueue_scripts', 'northpoint_enqueue_theme_scripts' );
add_action( 'after_setup_theme', 'northpoint_setup_theme' );

// Start custom logo  support & setup
function northpoint_custom_logo(){
  $defaults = array(
    'flex-height'           =>  true,
    'flex-width'            =>  true,
    'header-text'           =>  array(),
    'unlink-homepage-logo'  =>  false,
  );

  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'northpoint_custom_logo' );
// End custom logo setup

// Now tune-up custom logo setup - if no logo present [for some reason]
function theme_get_custom_np_logo() {

    if ( has_custom_logo() ) {

        $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );

        echo '<a href="' . get_site_url() . '" >';
        echo '<img id="shrink" src="' . esc_url( $logo[0] ) . '" alt="The North Point Logo">';
        echo "</a>";

    } else {
        // Fix this later  - add css class to adjust spacing due to no custom logo!
        echo '<h1 class="some-new-class">';
        echo '<a href="' . get_site_url() . '">' . get_bloginfo( 'name' ) . '</a>';
        echo '</h1>';

    }
} // End tune up custom logo

// Start walker setup for main navigation
class NP_My_Walker_Menu extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= "<li class='" .  implode(" ", $item->classes) . "'>";

		if ($item->url != '#') {
			$output .= '<a href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}

    $output .= $item->title;

		if ($item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
    }

// 	  Do not need the following [menu will never have children]:
//     if ($args->walker->has_children) {
// 			$output .= '<i class="caret fa fa-angle-down"></i>';
// 		}
	}
}
// End walker setup
// END
?>