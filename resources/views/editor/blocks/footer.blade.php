
@php
  $link =  $block->input('link');
  $color = $block->input('main_color');
@endphp

<style>

.bg-color-footer
{
  background-color: {{ $color }};
}

</style>

<ul class=" bg-color-footer nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">{{ $link }}</a></li>
</ul>
@php
  $link =  $block->input('link');
  $color = $block->input('main_color');
  $logo = $block->input('files');
@endphp

<style>

.bg-color-footer
{
  background-color: {{ $color }};
}

</style>

<!-- make footer with 4 columns -->
    <footer>
      <div class="container-fluid bg-color-footer">
        <div class="row">
          <div class="col-3">
            <a class="navbar-brand">
              <img onerror="this.onerror=null; this.remove();" src="{!! $block->file('logo') !!}" height="50" />
            </a>
          </div>
          <div class="col-3">
            <h4>Menu</h4>
            <ul class="list-unstyled">
              <!-- footer-row -->
    <!-- include footer-row -->

    @include('editor.blocks.footer-row')

              <span class="">{!! $block->input('footerrow') !!}</span>

            </ul>
          </div>
  
         <!-- copyright under de cols -->
    
        </div>
      </div>
    </footer>
  



