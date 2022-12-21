
@php
$viw = $block->input('variable_image_width');
@endphp


<img class="{{ $viw }}" src="{!! $block->image('variable_image', 'default') !!}" />