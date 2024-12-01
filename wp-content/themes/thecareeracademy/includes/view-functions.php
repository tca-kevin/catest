<?php

add_action('after_setup_theme', function () {
	// add_theme_support('woocommerce'); // Storefront Child experiment

	load_theme_textdomain('thecareeracademy', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(array('header-menu' => __('Header Menu', 'thecareeracademy'),));
	register_nav_menus(array('footer-menu' => __('Footer Menu', 'thecareeracademy'),));
	register_nav_menus(array('mobile-menu' => __('Mobile Menu', 'thecareeracademy'),));
});

add_action('wp_enqueue_scripts', function () {
	// wp_enqueue_style('storefront-style', get_template_directory_uri() . '/style.css'); // Storefront Child experiment

	if (defined('VITE_DEV') && VITE_DEV) {
		echo '<script type="module" src="https://catest.test:5173/@vite/client"></script>';
		wp_enqueue_script('src-js-app', "https://catest.test:5173/src/js/app.js", array(), null);
		wp_enqueue_style('src-sass-style', "https://catest.test:5173/src/sass/style.scss", array(), null);
	} else {
		wp_enqueue_script('dist-assets-js-app', get_stylesheet_directory_uri() . '/dist/assets/js/app.js', array(), wp_get_theme()->get('Version'));
		wp_enqueue_style('style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	}

	if (is_front_page()) {
		wp_deregister_script('jquery'); // /wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js | /wp-includes/js/jquery/jquery.min.js | /wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js | /wp-includes/js/jquery/jquery-migrate.min.js
		wp_dequeue_style('wp-block-library'); // /wp-includes/css/dist/block-library/style.min.css
		wp_deregister_style('wc-blocks-style'); // /wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css
		wp_dequeue_style('woocommerce-layout'); // /wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css
		wp_dequeue_style('woocommerce-smallscreen'); // /wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css
		wp_dequeue_style('woocommerce-general'); // /wp-content/plugins/woocommerce/assets/css/woocommerce.css
		wp_dequeue_style('woocommerce-inline'); // id='woocommerce-inline-inline-css'
		// wp_dequeue_style('wp-block-library-theme'); // id='wp-block-library-theme-inline-css', Storefront Child experiment
		// wp_dequeue_style('storefront-gutenberg-blocks'); // id='storefront-gutenberg-blocks-inline-css', Storefront Child experiment
		// add_filter('storefront_customizer_css', '__return_false'); // id='storefront-style-inline-css', Storefront Child experiment
		// add_filter('storefront_customizer_woocommerce_css', '__return_false'); // id='storefront-woocommerce-style-inline-css', Storefront Child experiment
	}
});

add_action('wp_enqueue_scripts', function () {
	if (is_front_page()) {
		wp_deregister_script('sourcebuster-js'); // /wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js | /wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js
	}
}, 9999);

add_action('template_redirect', function () {
	if (is_front_page()) {
		remove_action('wp_head', 'wp_print_auto_sizes_contain_css_fix', 1); // img:is([sizes="auto" i], [sizes^="auto," i])
		remove_action('wp_head', 'print_emoji_detection_script', 7); // <![CDATA[]]> | /wp-includes/js/wp-emoji-release.min.js?
		remove_action('wp_print_styles', 'print_emoji_styles'); // id='wp-emoji-styles-inline-css'
		remove_action('wp_enqueue_scripts', 'wp_enqueue_classic_theme_styles'); // id='classic-theme-styles-inline-css'
		remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles'); // id='global-styles-inline-css'
		remove_action('wp_head', 'wc_gallery_noscript'); // .woocommerce-product-gallery
		remove_action('wp_head', 'wp_print_font_faces', 50); // class='wp-fonts-local'
	}
});

add_filter('body_class', function ($classes) {
	if (is_front_page()) {
		remove_action('wp_footer', 'wc_no_js'); // type="application/ld+json"
	}

	return $classes;
});

add_filter(
	'script_loader_tag',
	function ($tag, $handle, $src) {
		if (($handle === 'src-js-app') || ($handle === 'dist-assets-js-app')) {
			$tag = '<script type="module" src="' . $src . '"></script>';
		}
		return $tag;
	},
	10,
	3
);
