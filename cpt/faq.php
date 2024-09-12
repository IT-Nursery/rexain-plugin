<?php 

add_action( 'init', 'rexain_faq_init' );
/**
 * Register a FAQ post type.
 *
 */
function rexain_faq_init() {
	$labels = array(
		'name'               => _x( 'FAQ', 'Rexain FAQ', 'infinity' ),
		'singular_name'      => _x( 'FAQ', 'Rexain FAQ', 'infinity' ),
		'menu_name'          => _x( 'Rexain FAQ', 'admin menu', 'infinity' ),
		'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar', 'infinity' ),
		'add_new'            => _x( 'Add FAQ', 'education', 'infinity' ),
		'add_new_item'       => __( 'Add New FAQ', 'infinity' ),
		'new_item'           => __( 'New FAQ', 'infinity' ),
		'edit_item'          => __( 'Edit FAQ', 'infinity' ),
		'view_item'          => __( 'View FAQ', 'infinity' ),
		'all_items'          => __( 'All FAQ', 'infinity' ),
		'search_items'       => __( 'Search FAQ', 'infinity' ),
		'parent_item_colon'  => __( 'Parent FAQ:', 'infinity' ),
		'not_found'          => __( 'No FAQ found.', 'infinity' ),
		'not_found_in_trash' => __( 'No FAQ found in Trash.', 'infinity' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'infinity' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'faq' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies' 		 => array('faq_category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_taxonomy('faq_category', 'faq', array('hierarchical' => true, 'label' => 'FAQ Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
	register_post_type( 'faq', $args );
}