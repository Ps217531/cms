<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Http\Controllers\Admin\Behaviors\HandlesMetadata;
use App\Models\Page;


class PageController extends BaseModuleController
{
 

    protected $moduleName = 'pages';

    protected $indexOptions = [
    ];

    protected function formData($request)
    {
        return [
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }
}
