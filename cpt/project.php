<?php 

add_action( 'init', 'rexain_client_init' );
/**
 * Register a service post type.
 *
 */
function rexain_client_init() {
	$labels = array(
		'name'               => _x( 'Project', 'Rexain Project', 'rexain-plugin' ),
		'singular_name'      => _x( 'Project', 'Rexain Project', 'rexain-plugin' ),
		'menu_name'          => _x( 'Rexain Project', 'admin menu', 'rexain-plugin' ),
		'name_admin_bar'     => _x( 'service', 'add new on admin bar', 'rexain-plugin' ),
		'add_new'            => _x( 'Add Project', 'Project', 'rexain-plugin' ),
		'add_new_item'       => __( 'Add New Project', 'rexain-plugin' ),
		'new_item'           => __( 'New Project', 'rexain-plugin' ),
		'edit_item'          => __( 'Edit Project', 'rexain-plugin' ),
		'view_item'          => __( 'View Project', 'rexain-plugin' ),
		'all_items'          => __( 'All Project', 'rexain-plugin' ),
		'search_items'       => __( 'Search Project', 'rexain-plugin' ),
		'parent_item_colon'  => __( 'Parent Project:', 'rexain-plugin' ),
		'not_found'          => __( 'No Project found.', 'rexain-plugin' ),
		'not_found_in_trash' => __( 'No Project found in Trash.', 'rexain-plugin' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'rexain-plugin' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies' 		 => array('project_category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_taxonomy('project_category', 'project', array('hierarchical' => true, 'label' => 'Project Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
	register_post_type( 'project', $args );
}