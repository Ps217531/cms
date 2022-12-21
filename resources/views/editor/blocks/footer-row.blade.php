@php
    $align = $block->input('align');
    $bg = $block->input('background');
  $color = $block->input('main_color');

@endphp

<style>
    .bg-color-row {
        background-color: {{ $bg }};
    }

    .bg-color-footer
    {
        background-color: {{ $color }};
    }
</style> 
<div class="d-flex flex-column {{ $align }} bg-color-footer col-3">
<p class="text_block bg-color-row bg-color-footer ">{!! $block->input('item') !!}</p>



</div>