<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class HeaderController extends BaseModuleController
{
    protected $moduleName = 'headers';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
