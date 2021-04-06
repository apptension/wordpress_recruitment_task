<?php
/**
 * Register sample custom post type called "job".
 */
function register_job_custom_post_type() {
  $labels = array(
    'name'                  => _x( 'Jobs', 'Post type general name', 'apptension' ),
    'singular_name'         => _x( 'Job', 'Post type singular name', 'apptension' ),
    'menu_name'             => _x( 'Jobs', 'Admin Menu text', 'apptension' ),
    'name_admin_bar'        => _x( 'Job', 'Add New on Toolbar', 'apptension' ),
    'add_new'               => __( 'Add New', 'apptension' ),
    'add_new_item'          => __( 'Add New Opening', 'apptension' ),
    'new_item'              => __( 'New Job', 'apptension' ),
    'edit_item'             => __( 'Edit Job', 'apptension' ),
    'view_item'             => __( 'View Job', 'apptension' ),
    'all_items'             => __( 'All openings', 'apptension' ),
    'search_items'          => __( 'Search jobs', 'apptension' ),
    'parent_item_colon'     => __( 'Job parent:', 'apptension' ),
    'not_found'             => __( 'No openings found.', 'apptension' ),
    'not_found_in_trash'    => __( 'No openings found in Trash.', 'apptension' ),
    'featured_image'        => _x( 'Job Cover Image', 'Overrides the “Featured Image” phrase.', 'apptension' ),
    'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase.', 'apptension' ),
    'remove_featured_image' => _x( 'Remove image', 'Overrides the “Remove featured image” phrase.', 'apptension' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase.', 'apptension' ),
    'archives'              => _x( 'Job archives', 'The post type archive label used in nav menus.', 'apptension' ),
    'insert_into_item'      => _x( 'Insert into job', 'Show when inserting media into a post.', 'apptension' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this job', 'Used when viewing media attached to a post.', 'apptension' ),
    'filter_items_list'     => _x( 'Filter openings list', 'Screen reader text for the filter links heading on the post type listing screen.', 'apptension' ),
    'items_list_navigation' => _x( 'Openings list navigation', 'Screen reader text for the pagination heading on the post type listing screen.', 'apptension' ),
    'items_list'            => _x( 'Jobs list', 'Screen reader text for the items list heading on the post type listing screen.', 'apptension' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'job' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies'         => array( 'category', 'post_tag' ),
    'show_in_rest'       => true,
    'show_in_graphql'    => true,
    'graphql_single_name' => 'Job',
    'graphql_plural_name' => 'Jobs',
  );

  register_post_type( 'job', $args );
}

add_action( 'init', 'register_job_custom_post_type' );
