/**
 * Notice for Elementor
 *
 * @package Musico
 */

/* global musicoElementorNotice */

jQuery(document).ready(
	function () {

		var style = '<style>.musico-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.musico-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.musico-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.musico-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.musico-elementor-notice-buttons{border-top:1px solid #e6e9ec}.musico-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.musico-elementor-notice-buttons>a.musico-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.musico-elementor-notice-buttons>a.musico-disable-default-styles{color:#9b0a46}</style>';

		var dialog = style + '<div class="musico-disable-elementor-styling">' +
			'<div class="musico-elementor-notice-wrapper">' +
			'<div class="musico-elementor-notice-header">Musico supports default styling for Elementor widgets</div>' +
			'<div class="musico-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
			'<div class="musico-elementor-notice-buttons">' +
			'<a href="#" class="musico-do-nothing" data-reply="no">No</a>' +
			'<a href="#" class="musico-disable-default-styles" data-reply="yes">Yes</a>' +
			'</div>' +
			'</div>' +
			'</div>';

		jQuery('body').prepend(dialog);
		jQuery('.musico-elementor-notice-buttons > a').on(
			'click', function () {

				var reply = jQuery(this).data('reply');

				jQuery.ajax(
					{
						url: musicoElementorNotice.ajaxurl,
						data: {
							reply: reply,
							nonce: musicoElementorNotice.nonce,
							action: 'elementor_desiable_default_style'
						},
						type: 'post',
						success: function () {

							if (reply === 'yes') {
								parent.location.reload();
							} else {
								jQuery('.musico-disable-elementor-styling').fadeOut(500, function () { jQuery(this).remove(); });
							}
						}
					}
				);
			}
		);
	}
);
