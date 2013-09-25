<?php

if ( ! isset( $content_width ) )
	$content_width = 940;

 add_action( 'after_setup_theme', 'wczg_setup' );

function wczg_setup() {
	add_theme_support( 'post-thumbnails', array( 'post', 'speakers' ) );
	add_theme_support('automatic-feed-links');
	add_theme_support( 'menus' );
}

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );

function add_scripts_and_styles() {
	wp_register_script( 'global', get_template_directory_uri() . '/js/core.js', array( 'jquery' ), 1.0, false );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), 1.0, false );
	wp_register_script( 'swipe', get_template_directory_uri() . '/js/swipe.js', array(), 1.0, false );
	wp_register_script( 'twitter', '//platform.twitter.com/widgets.js', array(), 1.0, false );
	wp_register_style( 'global', get_template_directory_uri() . '/style.css', null, 1.0, 'screen' );
	wp_register_style( 'font1', '//fonts.googleapis.com/css?family=Roboto:300,400,700&subset=latin,latin-ext' );
	wp_register_style( 'font2', '//fonts.googleapis.com/css?family=Roboto+Slab&subset=latin,latin-ext' );
	wp_register_style( 'icons', get_template_directory_uri() . '/font/css/webcampzg.css' );

	wp_enqueue_script( 'global' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'swipe' );
	wp_enqueue_script( 'twitter' );
	wp_enqueue_style( 'global' );
	wp_enqueue_style( 'font1' );
	wp_enqueue_style( 'font2' );
	wp_enqueue_style( 'icons' );
}

/*
 * Fix the extra 10 pixel width issue for image captions
 */
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');

function fixed_img_caption_shortcode($attr, $content = null) {
	// Allow plugins/themes to override the default caption template.
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' ) return $output;
	extract(shortcode_atts(array(
		'id'=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''), $attr));
	if ( 1 > (int) $width || empty($caption) )
	return $content;
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align)
	. '" style="width: ' . ((int) $width) . 'px">'
	. do_shortcode( $content ) . '<p class="wp-caption-text">'
	. $caption . '</p></div>';
}

?>
