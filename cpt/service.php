<?php 

add_action( 'init', 'rexain_service_init' );
/**
 * Register a project post type.
 *
 */
function rexain_service_init() {
	$labels = array(
		'name'               => _x( 'Service', 'rexain Service', 'rexain-plugin' ),
		'singular_name'      => _x( 'Service', 'rexain Service', 'rexain-plugin' ),
		'menu_name'          => _x( 'Rexain Service', 'admin menu', 'rexain-plugin' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'rexain-plugin' ),
		'add_new'            => _x( 'Add Service', 'Service', 'rexain-plugin' ),
		'add_new_item'       => __( 'Add New Service', 'rexain-plugin' ),
		'new_item'           => __( 'New Service', 'rexain-plugin' ),
		'edit_item'          => __( 'Edit Service', 'rexain-plugin' ),
		'view_item'          => __( 'View Service', 'rexain-plugin' ),
		'all_items'          => __( 'All Service', 'rexain-plugin' ),
		'search_items'       => __( 'Search Service', 'rexain-plugin' ),
		'parent_item_colon'  => __( 'Parent Service:', 'rexain-plugin' ),
		'not_found'          => __( 'No Service found.', 'rexain-plugin' ),
		'not_found_in_trash' => __( 'No Service found in Trash.', 'rexain-plugin' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'rexain-plugin' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies' 		 => array('service_category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_taxonomy('service_category', 'service', array('hierarchical' => true, 'label' => 'Service Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
	register_post_type( 'service', $args );
}