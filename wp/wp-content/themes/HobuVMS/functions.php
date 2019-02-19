<?php

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
