@extends('twill::layouts.form')



@section('sideFieldsets')
    <a17-fieldset title="Body" id="body">
        @formField('select', [
        'name' => 'padding',
        'label' => 'Padding',
        'unpack' => false,
        'options' => [
        [
        'value' => 'p-1',
        'label' => '1'
        ],
        [
        'value' => 'p-2',
        'label' => '2'
        ],
        [
        'value' => 'p-3',
        'label' => '3'
        ],
        [
        'value' => 'p-4',
        'label' => '4'
        ],
        [
        'value' => 'p-5',
        'label' => '5'
        ],
        ]
        ])
        @formField('color', [
            'name' => 'main_color',
            'label' => 'Background Color'
        ])
    </a17-fieldset>
@endsection



@section('contentFields')



    @formField('block_editor', [
    'name' => 'home',
    'label' => 'Blocks',
    'blocks' => ['paragraph_image', 'text_in_image']
    ])

    @formField('block_editor', [
    'name' => 'news',
    'label' => 'Blocks',
    'blocks' => ['news_browser', 'nav']
    ])


@stop
