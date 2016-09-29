<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }}</title>
        <meta name="description" content="The Lavalite Content Management System">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="{{ asset('css/vendor_public.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/font.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/li-scroller.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/jquery.fancybox.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/news/style.css') }}">

        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>

    <body class="home">
        {!! Theme::partial('header') !!}

        {!! Theme::partial('ticker') !!}
        {!! Theme::partial('slider') !!}
        {!! Theme::partial('right-bar') !!}

        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
        <script src="{{ asset('js/vendor_public.js') }}"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script src="{{ asset('js/news/jquery.min.js') }}"></script> 
        <script src="{{ asset('js/news/wow.min.js') }}"></script> 
        <script src="{{ asset('js/news/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('js/news/slick.min.js') }}"></script> 
        <script src="{{ asset('js/news/jquery.li-scroller.1.0.js') }}"></script> 
        <script src="{{ asset('js/news/jquery.newsTicker.min.js') }}"></script> 
        <script src="{{ asset('js/news/jquery.fancybox.pack.js') }}"></script> 
        <script src="{{ asset('js/news/custom.js') }}"></script>

        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
