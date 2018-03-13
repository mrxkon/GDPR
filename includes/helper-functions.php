<?php

if ( ! function_exists( 'gdpr_cookie_preferences_trigger' ) ) {
	function gdpr_cookie_preferences_trigger( $text ) {
		echo '<button type="button" class="gdpr-cookie-preferences">' . esc_html( $text ) . '</button>';
	}
}

if ( ! function_exists( 'gdpr_request_form' ) ) {
	function gdpr_request_form( $type ) {
		GDPR_Requests_Public::request_form( $type );
	}
}
