<?php

// Patient Story Post Type

function create_patient_stories_post_type() {

  $labels = array(
    'name'                  => __( 'Patient Stories', 'Post Type General Name', 'mmt-hospital' ),
    'singular_name'         => __( 'Patient Story', 'Post Type Singular Name', 'mmt-hospital' ),
    'menu_name'             => __( 'Patient Stories', 'mmt-hospital' ),
    'name_admin_bar'        => __( 'Patient Story', 'mmt-hospital' ),
    'archives'              => __( 'Archives', 'mmt-hospital' ),
    'parent_item_colon'     => __( 'Parent Patient Story', 'mmt-hospital' ),
    'all_items'             => __( 'All Patient Stories', 'mmt-hospital' ),
    'add_new_item'          => __( 'Add New Patient Story', 'mmt-hospital' ),
    'add_new'               => __( 'Add New', 'mmt-hospital' ),
    'new_item'              => __( 'New Patient Story', 'mmt-hospital' ),
    'edit_item'             => __( 'Edit Patient Story', 'mmt-hospital' ),
    'update_item'           => __( 'Update Patient Story', 'mmt-hospital' ),
    'view_item'             => __( 'View Patient Story', 'mmt-hospital' ),
    'search_items'          => __( 'Search Patient Story', 'mmt-hospital' ),
    'not_found'             => __( 'Not found', 'mmt-hospital' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mmt-hospital' ),
    'featured_image'        => __( 'Featured Image', 'mmt-hospital' ),
    'set_featured_image'    => __( 'Set featured image', 'mmt-hospital' ),
    'remove_featured_image' => __( 'Remove featured image', 'mmt-hospital' ),
    'use_featured_image'    => __( 'Use as featured image', 'mmt-hospital' ),
    'insert_into_item'      => __( 'Insert into Patient Story', 'mmt-hospital' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Patient Story', 'mmt-hospital' ),
    'items_list'            => __( 'Patient Stories list', 'mmt-hospital' ),
    'items_list_navigation' => __( 'Patient Stories list navigation', 'mmt-hospital' ),
    'filter_items_list'     => __( 'Filter Patient Stories list', 'mmt-hospital' ),
  );

  $args = array(
    'label'                 => __( 'Patient Stories', 'mmt-hospital' ),
    'description'           => __( 'Patient Stories', 'mmt-hospital' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access',
    'taxonomies'            => array( 'type' ),
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,        
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
    'rewrite'               => array('with_front' => false)  
  );

  register_post_type( 'patient_stories', $args );

}

add_action( 'init', 'create_patient_stories_post_type', 0 );