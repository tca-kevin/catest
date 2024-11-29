<?php

/**
 * Setup theme
 *
 * @return void
 */
function configure_theme()
{
	load_theme_textdomain('thecareeracademy', get_template_directory() . '/languages');

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'thecareeracademy'),
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action('after_setup_theme', 'configure_theme');

/**
 * Enqueue scripts and styles
 *
 * @return void
 */
function load_scripts_and_styles()
{
	if (defined('VITE_DEV') && VITE_DEV) {
		echo '<script type="module" src="https://catest.test:5173/@vite/client"></script>';
		wp_enqueue_script('theme-script', "https://catest.test:5173/src/app.js", array(), null);
		wp_enqueue_style('theme-style', "https://catest.test:5173/src/style.scss", array(), null);
	} else {
		wp_enqueue_script('theme-script', get_template_directory_uri() . '/app.js', array(), wp_get_theme()->get('Version'));
		wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	}
}

add_action('wp_enqueue_scripts', 'load_scripts_and_styles');

/**
 * Edit script loader tag
 *
 * @param [type] $tag
 * @param [type] $handle
 * @param [type] $src
 * @return void
 */
function edit_script_loader_tag($tag, $handle, $src)
{
	if ('theme-script' === $handle) {
		$tag = '<script type="module" src="' . esc_url($src) . '"></script>';
	}
	return $tag;
}

add_filter('script_loader_tag', 'edit_script_loader_tag', 10, 3);
