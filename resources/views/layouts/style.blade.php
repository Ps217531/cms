<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('additional_css')
</head>

<body>

    <style>
        .bg-color {
            background-color: {{ $page->main_color }};
        }
    </style>
 



    @yield('content')





</body>

</html>
