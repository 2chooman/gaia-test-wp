<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function cpt_featured_videos_init() {
    $labels = array(
        'name'                  => _x( 'featured_videos', 'General name', 'twentytwenty-child' ),
        'singular_name'         => _x( 'Featured Video', 'Singular name', 'twentytwenty-child' ),
        'menu_name'             => _x( 'Featured Videos', 'Admin Menu text', 'twentytwenty-child' ),
        'name_admin_bar'        => _x( 'Featured Video', 'Add New on Toolbar', 'twentytwenty-child' ),
        'add_new'               => __( 'Add New', 'twentytwenty-child' ),
        'add_new_item'          => __( 'Add New Featured Video', 'twentytwenty-child' ),
        'new_item'              => __( 'New Featured Video', 'twentytwenty-child' ),
        'edit_item'             => __( 'Edit Featured Video', 'twentytwenty-child' ),
        'view_item'             => __( 'View Featured Video', 'twentytwenty-child' ),
        'all_items'             => __( 'All Featured Videos', 'twentytwenty-child' ),
        'search_items'          => __( 'Search Featured Videos', 'twentytwenty-child' ),
        'parent_item_colon'     => __( 'Parent Featured Videos:', 'twentytwenty-child' ),
        'not_found'             => __( 'No Featured Videos found.', 'twentytwenty-child' ),
        'not_found_in_trash'    => __( 'No Featured Videos found in Trash.', 'twentytwenty-child' ),
        'featured_image'        => __( 'Featured Video Cover Image', 'twentytwenty-child' ),
        'set_featured_image'    => __( 'Set cover image', 'twentytwenty-child' ),
        'remove_featured_image' => __( 'Remove cover image', 'twentytwenty-child' ),
        'use_featured_image'    => __( 'Use as cover image', 'twentytwenty-child' ),
        'archives'              => __( 'Featured Video archives', 'twentytwenty-child' ),
        'insert_into_item'      => __( 'Insert into Featured Video', 'twentytwenty-child' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Featured Video', 'twentytwenty-child' ),
        'filter_items_list'     => __( 'Filter Featured Videos list', 'twentytwenty-child' ),
        'items_list_navigation' => __( 'Featured Videos list navigation', 'twentytwenty-child' ),
        'items_list'            => __( 'Featured Videos list', 'twentytwenty-child' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'featured' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title' ),
    );
 
    register_post_type( 'featured_videos', $args );
}
 
add_action( 'init', 'cpt_featured_videos_init' );

