<?php
// include customizer
require get_stylesheet_directory() . '/inc/customize/settings.php'; 

// change title on post page
function change_title( $title, $sep ) {

    if( is_single() ){
        $our_word = get_option('my_options');
        $title = $our_word['my_first_option'] . " - " . $title;
    } else {
        $title = bloginfo('name');
    }
 
    return $title;
}
add_filter( 'wp_title', 'change_title', 10, 2);