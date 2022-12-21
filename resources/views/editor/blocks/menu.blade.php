@php
    $bg = $block->input('main_color');
    $mw = $block->input('variable_menu_width');
    $logo = $block->input('files');
    $logoh = $block->input('variable_logo_height');
    $input = $block->input('input_title');
    $tc = $block->input('text_color');
@endphp

<style>
    .bg-color-menu {
        background-color: {{ $bg }};
    }
    .text-color
    {
        color: {{ $tc }};
        
    }
</style>


<!-- Just an image -->
<nav class="navbar navbar-expand-lg bg-color-menu">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img onerror="this.onerror=null; this.remove();" src="{!! $block->file('logo') !!}" height="{{ $logoh }}" />
        <span class="text_block">{!! $block->input('input_title') !!}</span>
        </a>
  

        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="text-color text-decoration-none " aria-current="page" href="/">Home</a>
                {{-- <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a> --}}
            </div>
        </div>
    </div>
</nav>
