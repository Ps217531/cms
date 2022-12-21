<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>
    <!-- get header_id 1 and footer_id 1 -->
    <?php 
   
    ?>
    {!! $header->renderBlocks() !!}




    <!-- div with flex and horizontal align -->
    <div class="d-flex justify-content-between ">
        @foreach($news as $news)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ $news->image('variable_image') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $news->title }}</h5>
                    <p class="card-text">{{ $news->description }}</p>
                    {!! $news->renderBlocks() !!}
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
    </div>
    
        {!! $footer->renderBlocks() !!}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>