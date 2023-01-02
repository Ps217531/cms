<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Behaviors\HasMetadata;


use A17\Twill\Models\Model;

class Page extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition;
 
   
    public $metadataFallbacks = [
        'title' => 'name',
        'description' => 'bio',
    ];   
    
    public $metadataDefaultOgType = 'website';
    public $metadataDefaultCardType = 'summary_large_image';

    protected function initializeHasMetadata()
    {
        // Setup the array for fallback columns
        $this->metadataFallbacks = array_merge(config('metadata.fallbacks'), $this->metadataFallbacks);

        // Add the default metadata from config into the $mediasParams array
        // by default adds in an 'og_image' role with a 'default' crop
        $this->mediasParams = array_merge($this->mediasParams, config('metadata.mediasParams') );
    }
    protected $fillable = [ 
        'published',
        'title',
        'description',
        'position',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
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
        ],
    ];
}
