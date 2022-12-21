@php
    $viw = $block->input('variable_image_width');
    $via = $block->input('variable_image_alignment');
    $bg = $block->input('main_color');
    $lh = $block->input('variable_logo_height');
@endphp

<style>
    .bg-color-block {
        background-color: {{ $bg }};
    }
</style>



<div class="p-4 bg-color-block">
    <img onerror="this.onerror=null; this.remove();" src="{!! $block->file('logo') !!}" height="{{ $lh }}" />
    <img class="{{ $viw }} {{ $via }}" src="{!! $block->image('variable_image', 'default') !!}" />
    <span class="text_block">{!! $block->input('paragraph') !!}</span>
</div>
