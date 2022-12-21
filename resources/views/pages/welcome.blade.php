@extends('layouts.bootstrap')

@section('content')




<body class="{{ $page->padding }} bg-color d-flex flex-column ">


    {!! $page->header->renderBlocks() !!}

    {!! $page->renderNamedBlocks('home') !!}


    <div class="d-flex justify-content-between  flex-wrap">

        {!! $page->renderNamedBlocks("news") !!}
    </div>




        <footer class="py-3 my-4">
            {!! $page->footer->renderBlocks() !!}
        </footer>



</body>