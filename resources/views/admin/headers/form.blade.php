@extends('twill::layouts.form')

@section('contentFields')
    @formField('block_editor', [
    'label' => 'Blocks',
    'blocks' => ['image','menu','logo']
    ])



@stop
