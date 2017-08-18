<?php

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

remove_action( 'wp_head', 'wp_generator' );

show_admin_bar(false);


// Remove p tags from category description
remove_filter('term_description','wpautop');



/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Логотип SVG',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

require_once ( get_stylesheet_directory() . '/theme-options.php' );


add_theme_support( 'post-thumbnails' );

?>

