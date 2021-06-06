<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'MUSICO_DIR_URI' ) ) {
	define( 'MUSICO_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'MUSICO_DIR_ASSETS_URI' ) ) {
	define( 'MUSICO_DIR_ASSETS_URI', MUSICO_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'MUSICO_DIR_CSS_URI' ) ) {
	define( 'MUSICO_DIR_CSS_URI', MUSICO_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'MUSICO_DIR_JS_URI' ) ) {
	define( 'MUSICO_DIR_JS_URI', MUSICO_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'MUSICO_DIR_IMGS_URI' ) ) {
	define( 'MUSICO_DIR_IMGS_URI', MUSICO_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'MUSICO_DIR_ICON_IMG_URI' ) ) {
	define( 'MUSICO_DIR_ICON_IMG_URI', MUSICO_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'MUSICO_DIR_PATH' ) ) {
	define( 'MUSICO_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'MUSICO_DIR_PATH_INC' ) ) {
	define( 'MUSICO_DIR_PATH_INC', MUSICO_DIR_PATH . 'inc/' );
}

//Musico Libraries Folder Directory
if ( ! defined( 'MUSICO_DIR_PATH_LIBS' ) ) {
	define( 'MUSICO_DIR_PATH_LIBS', MUSICO_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'MUSICO_DIR_PATH_CLASSES' ) ) {
	define( 'MUSICO_DIR_PATH_CLASSES', MUSICO_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'MUSICO_DIR_PATH_HOOKS' ) ) {
	define( 'MUSICO_DIR_PATH_HOOKS', MUSICO_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function musico_admin_script(){
    wp_enqueue_style( 'musico-admin', get_template_directory_uri().'/assets/css/musico-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'musico_admin', get_template_directory_uri().'/assets/js/musico-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'musico_admin_script' );



/**
 * Include File
 *
 */
require_once( MUSICO_DIR_PATH_INC . 'musico-breadcrumbs.php' );
require_once( MUSICO_DIR_PATH_INC . 'musico-widgets-reg.php' );
require_once( MUSICO_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( MUSICO_DIR_PATH_INC . 'post-like.php' );
require_once( MUSICO_DIR_PATH_INC . 'musico-functions.php' );
require_once( MUSICO_DIR_PATH_INC . 'musico-commoncss.php' );
require_once( MUSICO_DIR_PATH_INC . 'support-functions.php' );
require_once( MUSICO_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( MUSICO_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( MUSICO_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( MUSICO_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( MUSICO_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( MUSICO_DIR_PATH_HOOKS . 'hooks.php' );
require_once( MUSICO_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( MUSICO_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( MUSICO_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Musico object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Musico = new Musico();