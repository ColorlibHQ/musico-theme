<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Musico
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
			
	// Footer widget 1
	if( is_active_sidebar( 'footer-1' ) ){
		dynamic_sidebar( 'footer-1' );
	}
			
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		?>
		<div class="col-xl-5 col-md-5 offset-xl-1">
			<?php
			dynamic_sidebar( 'footer-2' );			

			// Social profiles
			$social_opt = musico_opt('musico_social_profile_toggle');
			if ( $social_opt == true ) {
				$social_items = musico_opt('musico_social_profiles');
				if( is_array( $social_items ) && count( $social_items ) > 0 ){
					echo '<div class="socail_links"><ul>';
						foreach ($social_items as $value) {
							echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
						}
					echo '</ul></div>';
				}          
			} 
			?>
		</div>
		<?php
	}