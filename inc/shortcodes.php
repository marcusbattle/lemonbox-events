<?php
	function embee_shortcode_upcoming_event( $atts ) {

		ob_start();

		include plugin_dir_path( dirname(__FILE__) ) . 'templates/shortcodes/upcoming-event.php';

		$html = ob_get_clean();

		return $html;

	}

	add_shortcode( 'upcoming_event', 'embee_shortcode_upcoming_event' );
?>