<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/91f1ad761b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        @media (max-width:900px)
        {
            .judul{
                font-size: 30px;
            }
        }
    </style>

    
</head>
<body style="background-color: #DEEAF6; font-family: 'Roboto', sans-serif;">
    <div id="app">
        @include('layouts.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        {{-- @include('layouts.footer') --}}
    </div>

    @livewireScripts

    <script type="text/javascript">
        $(document).ready(function(){
            $('.card-animasi').hover(function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },
                function(){
                    $(this).animate({
                        marginTop: "0%"
                    },200);
                }
            );
        });
    </script>
</body>
</html>
