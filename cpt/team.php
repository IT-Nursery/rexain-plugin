<?php 

add_action( 'init', 'rexain_team_init' );
/**
 * Register a project post type.
 *
 */
function rexain_team_init() {
	$labels = array(
		'name'               => _x( 'Team', 'rexain Team', 'rexain-plugin' ),
		'singular_name'      => _x( 'Team', 'rexain Team', 'rexain-plugin' ),
		'menu_name'          => _x( 'Rexain Team', 'admin menu', 'rexain-plugin' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'rexain-plugin' ),
		'add_new'            => _x( 'Add Member', 'Team', 'rexain-plugin' ),
		'add_new_item'       => __( 'Add New Member', 'rexain-plugin' ),
		'new_item'           => __( 'New Team Member', 'rexain-plugin' ),
		'edit_item'          => __( 'Edit Member', 'rexain-plugin' ),
		'view_item'          => __( 'View Member', 'rexain-plugin' ),
		'all_items'          => __( 'All Members', 'rexain-plugin' ),
		'search_items'       => __( 'Search Member', 'rexain-plugin' ),
		'parent_item_colon'  => __( 'Parent Member:', 'rexain-plugin' ),
		'not_found'          => __( 'No Member found.', 'rexain-plugin' ),
		'not_found_in_trash' => __( 'No Member found in Trash.', 'rexain-plugin' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'rexain-plugin' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies' 		 => array('team_category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_taxonomy('team_category', 'team', array('hierarchical' => true, 'label' => 'Team Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
	register_post_type( 'team', $args );
}