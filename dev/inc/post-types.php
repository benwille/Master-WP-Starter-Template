<?php
/**
 * Custom post types.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function underscores_custom_post_types() {

    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Team', 'Post Type General Name', 'underscores' ),
            'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'underscores' ),
            'menu_name'           => __( 'Team', 'underscores' ),
            'parent_item_colon'   => __( 'Parent Venue', 'underscores' ),
            'all_items'           => __( 'Team', 'underscores' ),
            'view_item'           => __( 'View Team Member', 'underscores' ),
            'add_new_item'        => __( 'Add New Team Members', 'underscores' ),
            'add_new'             => __( 'Add New', 'underscores' ),
            'edit_item'           => __( 'Edit Team Member', 'underscores' ),
            'update_item'         => __( 'Update Team Member', 'underscores' ),
            'search_items'        => __( 'Search Team Members', 'underscores' ),
            'not_found'           => __( 'Not Found', 'underscores' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'underscores' ),
        );

    // Set other options for Custom Post Type

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'team' ),
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => 6,
            'menu_icon'          => 'dashicons-groups',
            'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
        );

        // Registering your Custom Post Type
        register_post_type( 'team', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'underscores_custom_post_types', 0 );
