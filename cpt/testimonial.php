<?php 

add_action( 'init', 'rexain_testimonial_init' );
/**
 * Register a project post type.
 *
 */
function rexain_testimonial_init() {
	$labels = array(
		'name'               => _x( 'Testimonial', 'Rexain Testimonial', 'infinity' ),
		'singular_name'      => _x( 'Testimonial', 'Rexain Testimonial', 'infinity' ),
		'menu_name'          => _x( 'Rexain Testimonial', 'admin menu', 'infinity' ),
		'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'infinity' ),
		'add_new'            => _x( 'Add Testimonial', 'testimonial', 'infinity' ),
		'add_new_item'       => __( 'Add New Testimonial', 'infinity' ),
		'new_item'           => __( 'New Testimonial', 'infinity' ),
		'edit_item'          => __( 'Edit Testimonial', 'infinity' ),
		'view_item'          => __( 'View Testimonial', 'infinity' ),
		'all_items'          => __( 'All Testimonial', 'infinity' ),
		'search_items'       => __( 'Search Testimonial', 'infinity' ),
		'parent_item_colon'  => __( 'Parent Testimonial:', 'infinity' ),
		'not_found'          => __( 'No Testimonial found.', 'infinity' ),
		'not_found_in_trash' => __( 'No Testimonial found in Trash.', 'infinity' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'infinity' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies' 		 => array('testimonial_category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_taxonomy('testimonial_category', 'testimonial', array('hierarchical' => true, 'label' => 'Testimonial Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
	register_post_type( 'testimonial', $args );
}