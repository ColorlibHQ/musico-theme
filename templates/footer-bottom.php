<?php 		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'musico' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( musico_opt( 'musico_footer_copyright_text' ) ) ? musico_opt( 'musico_footer_copyright_text' ) : $copyText;
	?>

	<div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
			<div class="row">
				<div class="col-xl-7 col-md-6">
                    <p class="copy_right">
						<?php echo wp_kses_post( $copyRight ); ?>
					</p>
				</div>
				<div class="col-xl-5 col-md-6">
					<?php
						if(has_nav_menu('footer-menu')) {
							wp_nav_menu(array(
								'menu'            => 'footer-menu',
								'theme_location'  => 'footer-menu',
								'menu_id'         => 'navigation',
								'container_class' => 'footer_links',
								'container_id'    => false,
								'menu_class'      => false,
								'depth'           => 1,
							));
						} 
					?>
				</div>
			</div>
		</div>
	</div>