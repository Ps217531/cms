<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Header;

class HeaderRepository extends ModuleRepository
{
    use HandleBlocks, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Header $model)
    {
        $this->model = $model;
    }
}
