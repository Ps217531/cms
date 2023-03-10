<?php

return [

    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'seo'],
        'primary_navigation' => [
            //...
            'seo' => [
                'title' => 'SEO',
                'route' => 'admin.settings',
                'params' => ['section' => 'seo']
            ],
            //...
        ]
    ],
    'homepages' => [
        'title' => 'Home',
        // 'module' => true,
        'route' => 'admin.homepage.edit'
    ],

    'headers' => [
        'title' => 'Header',
        // 'module' => true,
        'route' => 'admin.header.edit'
    ],

    'footers' => [
        'title' => 'Footer',
        // 'module' => true,
        'route' => 'admin.footer.edit'
    ],

    'news' => [
        'title' => 'News',
        'module' => true,
    ],
     
    'projects' => [
        'can' => 'custom-permission',
        'title' => 'Projects',
        'module' => true,
    ],

    // user role
    'user' => [
        'can' => 'custom-permission',
        'title' => 'usr',
        'module' => false,
    ],
   

    'pages' => [
        'title' => 'Pages',
        'module' => true,
    ],
    'posts' => [
        'title' => 'Posts',
        'module' => true,
        'can' => 'list-posts',
    ],
];
