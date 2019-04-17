<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' );
if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}else{
    show_admin_bar( TRUE );
}


function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Left Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'social-menu' => __( 'Social Links' )
    )
  );
}

add_action( 'init', 'register_my_menus' );

add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
        $wp_customize->add_section( 'cd_html' , array(
            'title'      => 'Custom Header and Footer HTML',
            'priority'   => 30,
        ) );
        
        $wp_customize->add_setting( 'header_html' , array(
            'default'     => '',
        ) );
        
         $wp_customize->add_setting( 'footer_html' , array(
            'default'     => '',
        ) );
        
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_html', array(
                'label'        => 'Header HTML',
                'section'    => 'cd_html',
                'settings'   => 'header_html',
                'type'      => 'textarea'
        ) ) );
        
         $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_html', array(
                'label'        => 'Footer HTML',
                'section'    => 'cd_html',
                'settings'   => 'footer_html',
                'type'      => 'textarea'
        ) ) );
}


/**
 * Default color filters.
 */
require get_template_directory() . '/inc/color-filters.php';

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
