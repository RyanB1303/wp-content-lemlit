<?php


function proposal_post_types()
{
    $args_proposal = [ //config custom post here
        'has_archive' => true,
        'public' => true,
        'rewrite' => [
            'slug' => 'proposals'
        ],
        'publicly_queryable' => true,
        'capability_type'    => 'post',
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'show_in_admin_bar' => true,
        'labels' => [
            'name' => 'Proposal',
            'add_new_item' => 'Buat Proposal Baru',
            'edit_item' => 'Edit Proposal',
            'all_items' => 'Semua Proposal',
            'add_new' => 'Buat Proposal',
            'singular_name' => 'Proposal',
            'archives' => 'Arsip Proposal'
        ],
        'menu_icon' => 'dashicons-pdf'
    ];
    register_post_type('proposal', $args_proposal);
}
add_action('init', 'proposal_post_types');
