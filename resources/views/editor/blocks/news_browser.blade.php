<!-- get the browserfield -->


@foreach($block->getRelated('news') as $news)

<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <!-- image from form card top -->
        <img src="{{ $news->image('variable_image') }}" class="card-img-top">

        <div class="card-body">
        <p class="card-text">{{ $news->title }}</p>

            <p class="card-text">{{ $news->description }}</p>


            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ route('pages.show_news', $news->slug) }}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted">{{ $news->published_at }}</small>
            </div>
        </div>
    </div>
</div>




@endforeach