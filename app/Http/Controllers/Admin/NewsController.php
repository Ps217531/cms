<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class NewsController extends BaseModuleController
{
    protected $moduleName = 'news';

    protected $indexOptions = [
    ];


     // header_id and footer_id is 1 
    protected $defaultParams = [
        'published' => true,
        'header_id' => 1,
        'footer_id' => 1,
    ];

    public function additionalTableActions()
    {
        return [
            'exportAction' => [ // Action name.
                'name' => 'go to newspage', // Button action title.
                'variant' => 'tertiary', // Button style variant. Available variants; primary, secondary, action, editor, validate, aslink, aslink-grey, warning, ghost, outline, tertiary
                'size' => 'small', // Button size. Available sizes; small
                'link' => route('pages.news'), // Button action link.
                'target' => '_black', // Button action target. Available targets; _blank, _self, _parent, _top
                'type' => 'a', // Leave it blank for "button". Available types; a, button
            ],
        ];
    }
}
