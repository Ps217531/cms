<?php

return [



    'block_editor' => [

        'files' => ['logo'],


        'block_single_layout' => 'editor.layouts.block', // layout to use when rendering a single block in the editor
        'block_views_path' => 'editor.blocks', // path where a view file per block type is stored



        'crops' => [
            'variable_file' => [
                'default' => [
                    [
                        'name' => 'default',
                    ]
                ]
            ]
        ],


        'crops' => [
            'variable_image' => [
                'default' => [
                    [
                        'name' => 'default',
                    ]
                ],
                'flexible' => [
                    [
                        'name' => 'free',
                        'ratio' => 0,
                    ],
                    [
                        'name' => 'landscape',
                        'ratio' => 16 / 9,
                    ],
                    [
                        'name' => 'portrait',
                        'ratio' => 3 / 5,
                    ],
                ],

            ]
        ],

        'blocks' => [
            'paragraph_image' => [
                'title' => 'Paragraph & Image',
                'icon' => 'image-text',
                'component' => 'a17-block-paragraph'
            ],
            'image' => [
                'title' => 'Image',
                'icon' => 'image',
                'component' => 'a17-block-image'
            ],
            'logo' => [
                'title' => 'Logo',
                'icon' => 'image',
                'component' => 'a17-block-logo'
            ],
            'menu' => [
                'title' => 'Menu',
                'icon' => 'colors',
                'component' => 'a17-block-menu'
            ],
            'copyright' => [
                'title' => 'Copyright',
                'icon' => 'text',
                'component' => 'a17-block-copyright'
            ],
            'footer' => [
                'title' => 'Footer',
                'icon' => 'text',
                'component' => 'a17-block-footer'
            ],
         
            
        ],

    ],


    'files' => ['logo']

];
