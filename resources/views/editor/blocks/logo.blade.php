@php
    $bg = $block->input('main_color');
    $logoh = $block->input('variable_logo_height');
    $input = $block->input('input_title');
    $tc = $block->input('main_color');
@endphp


<style>
    .title-color {
         color: {{ $tc }};
    }
</style>



<div class="d-flex ">
    <img onerror="this.onerror=null; this.remove();" src="{!! $block->file('logo') !!}" height="{{ $logoh }}" />
    <h1 class="title-color">{{ $input }}</h1>
</div>
