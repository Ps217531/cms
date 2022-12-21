
<html lang="en">
<head>
    <title>#madewithtwill website</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<div>
    @yield('content')
    <!-- show blocks from blockeditor -->
    {!! $item->renderBlocks() !!}


</div>
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>