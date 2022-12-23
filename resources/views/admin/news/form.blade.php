@extends('twill::layouts.form')

@section('contentFields')
   



@formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'variable_image',
        'label' => 'image',
        'note' => 'Recommended size: 1920x1080',
    
    ])
    <!-- block_editor -->
@formField('radios', [
    'name' => 'type',
    'label' => 'Article type',
    'default' => 'long_form',
    'inline' => true,
    'options' => [
        [
            'value' => 'long_form',
            'label' => 'Long form article'
        ],
        [
            'value' => 'news',
            'label' => 'news article'
        ]
    ]
])

@formConnectedFields([
    'fieldName' => 'type',
    'fieldValues' => 'news',
    'renderForBlocks' => false
])

    
    @formField('block_editor', [
    'label' => 'Blocks',
    'blocks' => ['paragraph_image', 'news_articles']
    ])
@endformConnectedFields

@formConnectedFields([
    'fieldName' => 'type',
    'fieldValues' => 'long_form',
    'renderForBlocks' => false
])

@formField('select', [
    'name' => 'category_id',
    'label' => 'Category',
    'options' => App\Models\Category::all()->pluck('name', 'id'),
    'placeholder' => 'Select a category',
])

    @formField('input', [
        'name' => 'author',
        'label' => 'Author',
        'maxlength' => 100
    ])

    

   

@endformConnectedFields

@stop
