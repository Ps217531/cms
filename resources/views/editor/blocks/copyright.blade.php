
@php
    $copyright = $block->input('input_copyright');
    $color = $block->input('main_color');
@endphp

<style>
  .bg-color-copyright
  {
    background-color: {{ $color }};
  }
  </style>
  <p class=" bg-color-copyright text-center text-muted g-0"> {{ $copyright }}</p>
