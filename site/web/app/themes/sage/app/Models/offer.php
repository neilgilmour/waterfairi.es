<?php
return [
    'type' => 'cpt',
    'name' => 'offer',
    'supports' => [
        'title', 'editor', 'thumbnail',
    ],
    'config' => [
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => NULL,
        'can_export' => true,
        'capability_type' => 'offer',
        'taxonomies' => [
            'category', 'post_tag'
        ],
        'rewrite' => [
            'slug' => 'offer',
            'with_front' => true,
            'feeds' => true,
            'pages' => true,
        ],
    ],
];
