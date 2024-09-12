<?php
/*
 * Plugin Name: Rexain Plugin
 * Plugin URI: http://wordpress.org/extend/plugins/rexain-plugin/
 * Description: Rexain Plugin for Rexain theme
 * Author: IT Nursery
 * Author URI: http://wordpress.org/
 * Version: 1.0
 * Text Domain: rexain-plugin
 * License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Requires Plugins:  elementor
 * Elementor tested up to: 3.21.0
 * Elementor Pro tested up to: 3.21.0
*/

if( ! defined ('ABSPATH') ) {
    exit;
}

add_action( 'wp_enqueue_scripts', 'front_end_style' );
 
function front_end_style() {
	
	//wp_enqueue_style( 'revent_style',	plugins_url('/css/style.css',__FILE__), array(), 1.0, 'all' );
	do_action( 'front_end_style' );	
	
}


// Add Custom Post
require dirname( __FILE__ ) . '/cpt/service.php';
require dirname( __FILE__ ) . '/cpt/team.php';
require dirname( __FILE__ ) . '/cpt/project.php';
require dirname( __FILE__ ) . '/cpt/testimonial.php';
require dirname( __FILE__ ) . '/cpt/faq.php';


// Meta box
require dirname( __FILE__ ) . '/meta.php';


// Custom Widget
/**
 * Widgets Manager
 */

require plugin_dir_path(__FILE__).'widgets-manager.php';


// Custom Category function
function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'rexain',
		[
			'title' => esc_html__( 'Rexain', 'rexain-plugin' ),
			'icon' => 'fa fa-plug',
		]
	);	

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );