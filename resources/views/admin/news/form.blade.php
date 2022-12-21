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

    @formField('block_editor', [
    'label' => 'Blocks',
    'blocks' => ['paragraph_image']
    ])

@stop
