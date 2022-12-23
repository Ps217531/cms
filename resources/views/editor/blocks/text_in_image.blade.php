@php
    $image = $block->image('variable_image');

    $image_width = $block->input('variable_image_width');
    $image_alignment = $block->input('variable_image_alignment');
 

@endphp


<style>
.containerw3 {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<div class="containerw3 {{$image_alignment}}">
  <img src="{!!$block->image('variable_image')!!}" alt="text_image" class=" {{$image_width}} ">
<!-- if display is md make text smaller -->

    
    <div class="centered">
        <h3 class="">{!! $block->input('title') !!}</h3>
        <p class="">{!! $block->input('subtitle') !!}</p>
    </div>
 
</div>