

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>All News Articles</title>
</head>
<body>
    <!-- header -->
    {!! $header->renderBlocks() !!}

    <div class="container mt-5">
        <h1>All news articles</h1>

        <div class="row">
    @foreach ($news as $article)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ $article->image('variable_image') }}" class="card-img-top" alt="News article image">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('pages.show_news', $article->slug) }}">{{ $article->title }}</a></h5>
                    <p class="card-text">{{ $article->excerpt }} testttt</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
 <!-- use pagination with small buttons -->
    <div class="d-flex justify-content-center">
        {{ $news->links() }}

    
 
    







    </div>

    <!-- footer -->
    <div>
    {!! $footer->renderBlocks() !!}
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin = "anonymous" ></ script >
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin = "anonymous" ></ script >
        