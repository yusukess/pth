<?php

// settings
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'noindex', 1);
add_filter('show_admin_bar', '__return_false');

function remove_image_attribute($html)
{
	$html = preg_replace('/(width|height)="\d*"\s/', "", $html);
	$html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);
	$html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html);
	$html = preg_replace('/<a href=".+">/', '', $html);
	$html = preg_replace('/<\/a>/', '', $html);
	return $html;
}

if (!is_admin()) {
	function register_script()
	{
		wp_register_script('category', get_bloginfo('template_directory') . '/js/ajax-category.js');
	}
	function add_script()
	{
		register_script();
		if (is_category()) {
			wp_enqueue_script('category');
		}
	}
	add_action('wp_print_scripts', 'add_script');
}

add_action('wp_enqueue_scripts', 'remove_my_global_styles');
function remove_my_global_styles()
{
	wp_dequeue_style('global-styles');
	wp_dequeue_style('wp-block-library');
}

function my_body_class($classes)
{
	$classes = array();
	if (is_page()) {
		global $post;
		$parent_slug = get_page_uri($post->post_parent);
		if (is_page('members')) {
			array_push($classes, 'home');
		} else {
			array_push($classes, 'page page_' . $post->post_name);
		}
	} else if (is_home() || is_page('members')) {
		array_push($classes, 'home');
	} else if (is_category()) {
		$category = get_the_category();
		$cat = $category[0];
		array_push($classes, 'page page_' . $cat->slug);
	} else if (is_single()) {
		array_push($classes, 'page page_single');
	} else if (is_404) {
		array_push($classes, 'page');
	}
	return $classes;
}

add_filter('body_class', 'my_body_class');

function my_excerpt($str, $length, $suffix = '…', $encoding = 'UTF-8')
{
	global $post;

	if ($str == 'title') {
		$str = $post->post_title;
	} else if ($str == 'content') {
		$str = $post->post_content;
	}

	if (mb_strlen($str, $encoding) > $length) {
		echo mb_substr(strip_tags($str), 0, $length, $encoding) . $suffix;
	} else {
		echo $str;
	}
}

// catch post image.
function catch_that_image()
{
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches[1][0];

	if (empty($first_img)) { // Defines a default image
		$first_img = get_bloginfo('template_directory') . "/assets/images/noimage.jpg";
	}

	return $first_img;
}

function default_image($src, $width, $height, $alt = '画像', $className = '')
{
	$srcset = count($src) > 1 ? 'srcset="' . get_template_directory_uri() . '/assets/images/' . $src[1] . ' 2x, ' . get_template_directory_uri() . '/assets/images/' . $src[0] . ' 1x"' : '';

	return '<img src="' . get_template_directory_uri() . '/assets/images/' . $src[0] . '"' . $srcset . 'width="' . $width . '" height="' . $height . '" alt="' . $alt . '" class="' . $className . '">';
}

function get_cat($key, $parent)
{
	$cat = get_the_category();
	$cat = $cat[0];

	$cat_parent = get_category($cat->parent);

	if ($cat_parent->cat_ID) {
		$cat_id = $parent ? $cat_parent->cat_ID : $cat->cat_ID;
		$cat_slug = $parent ? $cat_parent->slug : $cat->slug;
		$cat_name = $parent ? $cat_parent->cat_name : $cat->cat_name;
	} else {
		$cat_id = $cat->cat_ID;
		$cat_slug = $cat->slug;
		$cat_name = $cat->cat_name;
	}

	if ($key == 'id') {
		return $cat_id;
	} else if ($key == 'slug') {
		return $cat_slug;
	} else if ($key == 'name') {
		return $cat_name;
	}
}

//navigation
register_nav_menus(array('header-nav' => 'ヘッダーナビ', 'global-nav' => 'グローバルナビ', 'contents-nav' => 'コンテンツナビ', 'footer-nav' => 'フッターナビ', 'menu-nav' => 'メニューナビ'));

function nav_menu_current($var)
{
	if (is_array($var)) {
		if (array_intersect($var, array('current-menu-item'))) {
			return array_intersect($var, array('current-menu-item'));
		} else if (array_intersect($var, array('current-page-ancestor'))) {
			return array_intersect($var, array('current-page-ancestor'));
		}
	} else {
		return '';
	}
}

add_filter('nav_menu_css_class', 'nav_menu_current');

function nav_menu_class($classes, $item)
{
	if ($item->classes[0]) {
		$classes[] = $item->classes[0];
	} else {
		if ('page' == $item->object) {
			$page = get_page_by_title($item->title);
			$classes[] = $page->post_name;
		} else if ('category' == $item->object) {
			// $cat = get_category(get_cat_ID($item->title));
			// $classes[] = $cat->slug;
		} else if (in_array('menu-item-home', $item->classes)) {
			$classes[] = 'home';
		} else {
			$classes[] = '';
		}
	}
	return $classes;
}

add_filter('nav_menu_css_class', 'nav_menu_class', 10, 2);

//custom_menu
function single_page_custom_menu($atts, $content = null)
{
	extract(shortcode_atts(array('menu' => '', 'echo' => true), $atts));
	return wp_nav_menu(array('menu' => $menu, 'echo' => false));
}
add_shortcode("customenu", "single_page_custom_menu");

// remove "/category/"
add_filter('user_trailingslashit', 'remcat_function');
function remcat_function($link)
{
	return str_replace("/category/", "/", $link);
}

add_action('init', 'remcat_flush_rules');
function remcat_flush_rules()
{
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

add_filter('generate_rewrite_rules', 'remcat_rewrite');
function remcat_rewrite($wp_rewrite)
{
	$new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name=' . $wp_rewrite->preg_index(1) . '&paged=' . $wp_rewrite->preg_index(2));
	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

function image_wrap($html, $id, $attachment)
{
	$html = '<div class="img">' . "\n" . $html . "\n" . '</div>' . "\n";
	return $html;
}
add_filter('media_send_to_editor', 'image_wrap', 10, 3);

remove_filter('template_redirect', 'redirect_canonical');

add_action('pre_get_posts', 'filter_other_post');
function filter_other_post($wp_query)
{
	global $pagenow, $current_user;
	if ($pagenow != 'admin-ajax.php' && $pagenow != "edit.php") {
		return;
	}
	if ($current_user->roles[0] == "administrator") {
		return;
	}
	$wp_query->query_vars['author'] = $current_user->ID;
}

function default_style_version($styles)
{
	$version = filemtime(get_template_directory() . '/assets/css/style.css');
	$styles->default_version = $version;
}
add_action('wp_default_styles', 'default_style_version');

function custom_print_styles()
{
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_print_styles', 'custom_print_styles');

function my_scripts_method()
{
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');