<?php

/**
 * zuzu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

add_theme_support('post-thumbnails');

function preconnect_google_fonts()
{
	echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>' . "\r\n";
	echo '<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>' . "\r\n";
}

add_action('wp_head', 'preconnect_google_fonts', 7);

if (!function_exists('zuzu_styles')) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function zuzu_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'zuzu-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('zuzu-style');

		wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false, '1.1', 'all');
	}

endif;

add_action('wp_enqueue_scripts', 'zuzu_styles');

/**
 * Add new menus.
 */
function add_custom_menus()
{
	register_nav_menus(
		array(
			'top-menu' => __('Top Menu'),
			'footer-services' => __('Footer Services'),
			'footer-extra-links' => __('Footer Extra Links'),
		)
	);
}

add_action('init', 'add_custom_menus');

/**
 * Allow svg's.
 */
function enable_svg_upload($upload_mimes)
{
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter('upload_mimes', 'enable_svg_upload', 10, 1);


function zuzu_the_html_classes()
{
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$html_classes = '';
	$classes = apply_filters('zuzu_html_classes', $html_classes);
	if (!$classes) {
		return;
	}
	echo 'class="' . esc_attr($classes) . '"';
}

function pprint_r($a)
{
	echo "<pre>", htmlspecialchars(print_r($a, true)), "</pre>";
}

function get_section_header($text, $color = 'black')
{
	echo '<h2 class="section-header text-center text-' . $color . '">' . $text . '</h2>';
}

function get_zuzu_btn($text, $href, $size = 'large', $color = 'accent')
{
	echo '<a class="zuzu-btn zuzu-btn-' . $size . ' zuzu-btn-' . $color . '" href="' . $href . ' ">' . $text . '</a>';
}
