<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Musico
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function musico_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'musico' ),
        'id'            => 'musico-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'musico' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-xl-6 col-md-6"><div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'musico' ),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="single-footer-widget footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'musico_widgets_init' );
