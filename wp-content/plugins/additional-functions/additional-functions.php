<?php

/*
Plugin Name: G Squared Additional Functions
Author: Paulo Feliciano
Version: 1.0
Description: Full Stack Developer
*/

function load_bootstrap() {
    wp_enqueue_style('bootstrap', '/wp-content/plugins/additional-functions/bootstrap.css');
    wp_enqueue_script( 'bootstrap-js', '/wp-content/plugins/additional-functions/bootstrap.js', array('jquery'), '5.0.2', true );
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

// DONATIONS
function cpt_donations() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Donations',
        'singular_name'       => 'Donations',
        'menu_name'           => 'Donations',
        'parent_item_colon'   => 'Main Donations',
        'all_items'           => 'All Donations',
        'view_item'           => 'View Donations',
        'add_new_item'        => 'Add New Donations',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Donations',
        'update_item'         => 'Update Donations',
        'search_items'        => 'Search Donations',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => 'Donations',
        'description'         => 'Donations',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => [ 'title', 'editor', 'revisions' ],
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-money-alt',
        'taxonomies'          => [ 'category' ],
    );
    add_post_type_support( 'donations', 'thumbnail' );

    register_post_type( 'donations', $args );
}

add_action( 'init', 'cpt_donations', 0 );

