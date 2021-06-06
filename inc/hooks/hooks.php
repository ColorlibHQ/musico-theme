<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'musico_preloader', 'musico_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'musico_header', 'musico_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'musico_footer', 'musico_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'musico_wrp_start', 'musico_wrp_start_cb', 10 );
	add_action( 'musico_wrp_end', 'musico_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'musico_blog_col_start', 'musico_blog_col_start_cb', 10 );
	add_action( 'musico_blog_col_end', 'musico_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'musico_blog_posts_thumb', 'musico_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'musico_blog_details_wrap_start', 'musico_blog_details_wrap_start_cb', 10 );
	add_action( 'musico_blog_details_wrap_end', 'musico_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'musico_blog_posts_title', 'musico_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'musico_blog_posts_meta', 'musico_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'musico_blog_posts_excerpt', 'musico_blog_posts_excerpt_cb', 10 );
	// add_action( 'musico_blog_posts_excerpt', 'musico_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'musico_blog_posts_info_link', 'musico_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'musico_blog_posts_content', 'musico_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'musico_blog_posts_share', 'musico_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'musico_blog_sidebar', 'musico_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'musico_blog_single_meta', 'musico_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'musico_page_content', 'musico_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'musico_fof', 'musico_fof_cb', 10 );

	

?>