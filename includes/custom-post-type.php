<?php

function theblog_custom_post(){

    $blogPost_label = array (
        'name'              => __('Blog Post', 'textdomain'),
        'singular_name'     => __('Blog Post', 'textdomain'),
        'add_new'           => __('Add Blog Post', 'textdomain'),
        'add_new_item'      => __('Add New Blog Post', 'textdomain'),
        'edit_item'         => __('Edit Blog Post', 'textdomain'),
        'all_items'          => __('Blog Post', 'textdomain'),
    );
    $blogPost_args = array(
        'labels'             => $blogPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title' , 'editor' , 'thumbnail' , 'excerpt')
    );

    register_post_type('blogPost', $blogPost_args);

    // $latest_label = array (
    //     'name'              => __('Latest Post', 'textdomain'),
    //     'singular_name'     => __('Latest Post', 'textdomain'),
    //     'add_new'           => __('Add Latest Post', 'textdomain'),
    //     'add_new_item'      => __('Add New Latest Post', 'textdomain'),
    //     'edit_item'         => __('Edit Latest Post', 'textdomain'),
    //     'all_items'          => __('Latest Post', 'textdomain'),
    // );
    // $latest_args = array(
    //     'labels'             => $latest_label,
    //     'public'            => true,
    //     'capability_type'   => 'post',
    //     'show_ui'           => true,
    //     'taxonomies'        => array('post_tag', 'category'),
    //     'supports'          => array('title' , 'editor' , 'thumbnail' , 'excerpt')
    // );

    // register_post_type('latestPost', $latest_args);

    // $feature_label = array (
    //     'name'              => __('Feature Post', 'textdomain'),
    //     'singular_name'     => __('Feature Post', 'textdomain'),
    //     'add_new'           => __('Add Feature Post', 'textdomain'),
    //     'add_new_item'      => __('Add New Feature Post', 'textdomain'),
    //     'edit_item'         => __('Edit Feature Post', 'textdomain'),
    //     'all_items'          => __('Feature Post', 'textdomain'),
    // );
    // $feature_args = array(
    //     'labels'             => $feature_label,
    //     'public'            => true,
    //     'capability_type'   => 'post',
    //     'show_ui'           => true,
    //     'taxonomies'        => array('post_tag', 'category'),
    //     'supports'          => array('title' , 'editor' , 'thumbnail' , 'excerpt')
    // );

    // register_post_type('featurePost', $feature_args);

}
add_action('init', 'theblog_custom_post');
