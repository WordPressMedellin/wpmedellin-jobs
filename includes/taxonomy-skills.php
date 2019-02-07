<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Register the skills taxonomy
*/
add_action( 'init', function() {
	$taxonomy_labels = array(
		'name'                       => _x( 'Skills', 'taxonomy general name', 'wpmde-jobs' ),
		'singular_name'              => _x( 'Skill', 'taxonomy singular name', 'wpmde-jobs' ),
		'search_items'               => __( 'Search skills', 'wpmde-jobs' ),
		'popular_items'              => __( 'Popular skills', 'wpmde-jobs' ),
		'all_items'                  => __( 'All skills', 'wpmde-jobs' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit skill', 'wpmde-jobs' ),
		'update_item'                => __( 'Update skill', 'wpmde-jobs' ),
		'add_new_item'               => __( 'Add New skill', 'wpmde-jobs' ),
		'new_item_name'              => __( 'New skill Name', 'wpmde-jobs' ),
		'separate_items_with_commas' => __( 'Separate skills with commas', 'wpmde-jobs' ),
		'add_or_remove_items'        => __( 'Add or remove skills', 'wpmde-jobs' ),
		'choose_from_most_used'      => __( 'Choose from the most used skills', 'wpmde-jobs' ),
		'not_found'                  => __( 'No skills found.', 'wpmde-jobs' ),
		'menu_name'                  => __( 'Skills', 'wpmde-jobs' ),
	);

	$taxonomy_args = array(
		'hierarchical'          => false,
		'labels'                => $taxonomy_labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
    'rewrite'               => array( 'slug' => 'skills' ),
    'show_in_rest'          => true,
	);

	register_taxonomy( 'skill', 'profile', $taxonomy_args );
} );
