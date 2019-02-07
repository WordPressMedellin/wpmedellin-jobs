<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Register the profile content type
*/
add_action( 'init', function() {
  $labels = array(
    'name'               => _x( 'Profiles', 'profile general name', 'wpmde-jobs' ),
    'singular_name'      => _x( 'Profile', 'profile singular name', 'wpmde-jobs' ),
    'menu_name'          => __( 'Profiles', 'wpmde-jobs' ),
    'name_admin_bar'     => __( 'Profile', 'wpmde-jobs' ),
    'add_new'            => __( 'Add new', 'wpmde-jobs' ),
    'add_new_item'       => __( 'Add new profile', 'wpmde-jobs' ),
    'new_item'           => __( 'New profile', 'wpmde-jobs' ),
    'edit_item'          => __( 'Edit profile', 'wpmde-jobs' ),
    'view_item'          => __( 'View profile', 'wpmde-jobs' ),
    'all_items'          => __( 'All profiles', 'wpmde-jobs' ),
    'search_items'       => __( 'Search profiles', 'wpmde-jobs' ),
    'parent_item_colon'  => __( 'Parent profiles:', 'wpmde-jobs' ),
    'not_found'          => __( 'No profiles found.', 'wpmde-jobs' ),
    'not_found_in_trash' => __( 'No profiles found in Trash.', 'wpmde-jobs' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'profiles' ),
    'capability_type'    => 'page',
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-money',
    'supports'           => array( 'title', 'thumbnail' ),
    'show_in_rest'       => true,
  );

  if ( ! post_type_exists( 'profile' ) ) {
    register_post_type( 'profile', $args );
  }
} );

/**
 * Rename title placeholder
 */
add_filter( 'enter_title_here', function( $title, $post ) {
  if ( $post->post_type === 'profile' ) {
    $title = __( 'Enter your name here', 'wpmde-jobs' );
  }
  return $title;
}, 10, 2 );
