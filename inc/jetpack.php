<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package IBK
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ibk_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ibk_jetpack_setup' );
