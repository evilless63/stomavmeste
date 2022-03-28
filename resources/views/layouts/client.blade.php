<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="Keywords" content="@if(isset($entity->meta_keywords)){{$entity->meta_keywords}}@endif">
        <meta name="description" content="@if(isset($entity->meta_description)){{$entity->meta_description}}@endif">
        <title>@if(isset($entity->meta_title)){{$entity->meta_title}}@endif</title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--        <link rel="stylesheet" href="{{asset('owlcarousel/owl.carousel.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{asset('owlcarousel/owl.theme.default.min.css')}}">--}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="{{ asset('js/mailing.js') }}" defer></script>

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.client-nav')

            <!-- Page Content -->
            <main class="mx-auto bg-white mt-24 md:mt-16 h-screen">
                {{ $slot }}
            </main>
        </div>
    </body>
    <script>
        // Grab HTML Elements
        const normalBtn= document.getElementById("user-menu-button");
        const mobileBtn= document.getElementById("mobile-menu-button-toggled")
        const menu = document.getElementById("mobile-menu");

        // Add Event Listeners
        normalBtn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
        mobileBtn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

    </script>
</html>
