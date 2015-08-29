<?php
/**
 * Plugin Name: Haintheme Member
 * Plugin URI: http://haintheme.com
 * Description: Create a team member for your theme.
 * Version: 1.0.0
 * Author: Haintheme
 * Author URI: http://haintheme.com
 * Text Domain: haintheme
 * License: GNU General Public License v2 or later
 */

add_action( 'init', 'mauris_create_ht_member_post_type' );
function mauris_create_ht_member_post_type(){
    $labels = array(
        'name'               => __( 'Members', 'unyson' ),
        'singular_name'      => __( 'Member', 'unyson' ),
        'menu_name'          => __( 'Members', 'unyson' ),
        'name_admin_bar'     => __( 'Member', 'unyson' ),
        'add_new'            => __( 'Add New', 'unyson' ),
        'add_new_item'       => __( 'Add New Member', 'unyson' ),
        'new_item'           => __( 'New Member', 'unyson' ),
        'edit_item'          => __( 'Edit Member', 'unyson' ),
        'view_item'          => __( 'View Member', 'unyson' ),
        'all_items'          => __( 'All Members', 'unyson' ),
        'search_items'       => __( 'Search Members', 'unyson' ),
        'parent_item_colon'  => __( 'Parent Members:', 'unyson' ),
        'not_found'          => __( 'No members found.', 'unyson' ),
        'not_found_in_trash' => __( 'No members found in Trash.', 'unyson' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'			 => 'dashicons-groups',
        'rewrite'            => array( 'slug' => 'member' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail',  )
    );

    register_post_type( 'fw-member', $args );
}

