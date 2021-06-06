<?php 
/**
 * @Packge     : Musico
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'musico_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'musico' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'musico_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'musico_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'musico_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'musico_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'musico_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'musico_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'musico_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'musico_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'musico' ),
            'panel'    => 'musico_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>