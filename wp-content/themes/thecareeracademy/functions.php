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
 * Manage scripts and styles in head tag
 *
 * @return void
 */
function manage_scripts_and_styles_in_head_tag()
{
	if (defined('VITE_DEV') && VITE_DEV) {
		echo '<script type="module" src="https://catest.test:5173/@vite/client"></script>';

		wp_enqueue_script('hmr-script', "https://catest.test:5173/src/tca.js", array(), null);

		wp_enqueue_style('hmr-style', "https://catest.test:5173/src/style.scss", array(), null);
	} else {
		wp_enqueue_script('theme-script', get_template_directory_uri() . '/tca.js', array(), wp_get_theme()->get('Version'));

		wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	}

	if (!is_woocommerce()) {
		wp_deregister_script('jquery'); // /wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js | /wp-includes/js/jquery/jquery.min.js | /wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js | /wp-includes/js/jquery/jquery-migrate.min.js

		remove_action('wp_head', 'print_emoji_detection_script', 7); // /wp-includes/js/wp-emoji-release.min.js?

		wp_dequeue_style('wp-block-library'); // /wp-includes/css/dist/block-library/style.min.css

		wp_deregister_style('wc-blocks-style'); // /wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css

		wp_dequeue_style('woocommerce-layout'); // /wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css

		wp_dequeue_style('woocommerce-smallscreen'); // /wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css

		wp_dequeue_style('woocommerce-general'); // /wp-content/plugins/woocommerce/assets/css/woocommerce.css
	}
}

add_action('wp_enqueue_scripts', 'manage_scripts_and_styles_in_head_tag');


/**
 * Manage scripts and styles in head tag
 *
 * @return void
 */
function manage_scripts_and_styles_in_body_tag()
{
	if (!is_woocommerce()) {
		wp_deregister_script('sourcebuster-js'); // /wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js | /wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js
	}
}

add_action('wp_enqueue_scripts', 'manage_scripts_and_styles_in_body_tag', 9999);

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
