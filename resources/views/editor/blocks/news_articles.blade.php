@php
$newsartikel = $block->input('item');
$category = $block->input('category');
@endphp


<!-- if $newsartikel is selected -->
@if($newsartikel)
@foreach($newsartikel as $newsartikel)
<li> <a href="{{$newsartikel}}"> {{$newsartikel}}</a></li>
@endforeach
@endif



<!-- if $category is selected -->
@if($category)
@foreach($category as $category)
<li> <a href="{{$category}}"> {{$category}}</a></li>
@endforeach
@endif






        

