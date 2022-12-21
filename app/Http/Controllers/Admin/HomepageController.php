<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class HomepageController extends BaseModuleController
{
    protected $moduleName = 'homepages';

    protected $indexOptions = [
    ];



    protected function formdata($request)
    {
       
        return [
            'customPermalink' => route("pages.welcome") // Directs the permalink to resources/views/website/pages/page.blade.php
        ];

    }







}
