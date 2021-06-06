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

	$musico_reservation_title     = !empty( musico_opt( 'musico_reservation_title' ) ) ? musico_opt( 'musico_reservation_title' ) : '';
	$musico_reservation_sub_title = !empty( musico_opt( 'musico_reservation_sub_title' ) ) ? musico_opt( 'musico_reservation_sub_title' ) : '';
	$musico_reservation_btn_text  = !empty( musico_opt( 'musico_reservation_btn_text' ) ) ? musico_opt( 'musico_reservation_btn_text' ) : '';
	$musico_reservation_btn_url	  = !empty( musico_opt( 'musico_reservation_btn_url' ) ) ? musico_opt( 'musico_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $musico_reservation_title )?></h3>
			<p><?php echo esc_html( $musico_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $musico_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $musico_reservation_btn_text )?></a>
		</div>
	</div>