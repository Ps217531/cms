<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Models\Post;
            

class PostController extends BaseModuleController
{
    protected $moduleName = 'posts';

    protected $indexOptions = [];

    /**
     * On the base ModuleController, this is where built-in gates are assigned to each
     * controller action. Our `posts` module is only interested in our 2 custom gates,
     * for all possible actions.
     */
    protected function setMiddlewarePermission()
    {
    }

    protected function getIndexOption($option)
    {
        return ($this->indexOptions[$option] ?? $this->defaultIndexOptions[$option] ?? false);
    }
}
