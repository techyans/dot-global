<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Dot Global Technologies: Empowering Digital Excellence with Comprehensive Design, Development, and Mobile Solutions</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

        <meta property="og:locale" content="en_US" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}?v={{rand(11,99)}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    </head>
    <body>
        <div class="container-fluid p-0 gx-0">
            <header class="">
                <nav class="row justify-content-center m-0">
                    <div class="col-md-11 d-none d-lg-block desktop-nav">
                        @include('includes/desktop-nav') 
                    </div>
                    <div class="col-12 d-lg-none mobile-nav">
                        @include('includes/mobile-and-tab-nav') 
                    </div>
                    <div class="mobile-nav-bar">
                        @include('templates/mob-mega-menu/mobile-mega-menu')
                    </div>
                    <div class="mobile-nav-drawer"></div>

                    <div class="left-nav-bar">
                        @include('includes/left-nav-bar')
                    </div>
                    <div class="left-nav-drawer"></div>
                </nav>
            </header>
                <main>
                    