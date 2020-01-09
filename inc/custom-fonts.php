<?php

/**
 * Register Google Fonts
 */
function understrap_fonts_url() {
	$fonts_url = '';

	/**
	 * Translator: If fonts does not support characters in your language, translate this to 'off'.
	 */
	$gFont1 = esc_html_x( 'on', '[Font 1] font: on or off', 'understrap' ); // Put Google Font 1 Name here

	$gFont2 = esc_html_x( 'on', '[Font 2] font: on or off', 'understrap' ); // Put Google Font 2 Name here

	$font_families = array();

	if ( 'off' !== $gFont1 ) {
		$font_families[] = '';  // Put Google Font code here
	}

	if ( 'off' !== $gFont2 ) {
		$font_families[] = ''; // Put Google Font code here
	}

	if ( in_array( 'on', array( $gFont1, $gFont2 ) ) ) {
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );

}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function understrap_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'understrap-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'understrap_resource_hints', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function understrap_fonts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'understrap-fonts', understrap_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'understrap_fonts' );

?>
