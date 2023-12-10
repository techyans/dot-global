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
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    </head>
    <body>
        <div class="container-fluid p-0 gx-0">
            <header>
                <nav class="row justify-content-center m-0">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-2 header-logo">
                                <a href="{{url('/')}}"><img src="{{asset('storage/images/20231110-191450-980554-dot-logo.png')}}" alt=""></a>
                            </div>
                            <div class="col-7 ">
                                <div class="nav-lists">
                                    <ul>
                                        <li class="top-nav-items what-wedo-dropdown">
                                            <a href="#" id="what-wedo-dropdown" data-bs-toggle="dropdown" aria-expanded="false">What We Do <i class="fa-solid fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu shadow " aria-labelledby="what-wedo-dropdown">
                                                @include('templates/mega-menu/what-we-do')
                                            </ul>
                                        </li>
                                        <li class="top-nav-items">
                                            <a href="#" id="offering-dropdown" data-bs-toggle="dropdown" aria-expanded="false">Offering <i class="fa-solid fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="offering-dropdown">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </li>
                                        <li class="top-nav-items"><a href="{{url('/work-process')}}/">Innovation <i class="fa-solid fa-chevron-down"></i></a></li>
                                        <li class="top-nav-items"><a href="{{url('/blogs')}}/">Staff Augmentation <i class="fa-solid fa-chevron-down"></i></a></li>
                                        <li class="top-nav-items company-dropdown">
                                            <a href="#" id="company-dropdown" data-bs-toggle="dropdown" aria-expanded="false">Company <i class="fa-solid fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="company-dropdown">
                                                <li><a class="dropdown-item" href="#">About Us</a></li>
                                                <li><a class="dropdown-item" href="#">Testimonials</a></li>
                                                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                                <li><a class="dropdown-item" href="#">Company Broucher</a></li>
                                                <li><a class="dropdown-item" href="#">Job Opening</a></li>
                                                <li><a class="dropdown-item" href="#">C++</a></li>
                                                <li><a class="dropdown-item" href="#">Free Trail</a></li>
                                                <li><a class="dropdown-item" href="#">Portfolio</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="left-nav text-end">
                                    <p class="">
                                        <span><a href="tel:+919989977788">
                                           <span><img src="{{asset('storage/images/20231112-100532-665798-india-flag.png')}}" alt=""></span> <i class="bi bi-telephone"></i> +91-9989977788
                                        </a></span>
                                        <span><img src="{{asset('storage/images/20231105-202000-587152-Hamburger.jpg')}}" alt="" class="ms-4 open-left-nav"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left-nav-bar">
                        <div class="row mx-0">
                            <div class="col-12 mb-4 logo">
                                <a href="{{url('/')}}"><img src="{{asset('storage/images/20231110-191450-980554-dot-logo.png')}}" alt=""></a>
                            </div>
                            <div class="col-12">
                                <div class="section position-relative border rounded" style="width:95%; margin-bottom:25px">
                                    <div class="flags position-absolute">
                                        <div class="country-logo"><img src="{{asset('storage/images/20231112-100532-665798-india-flag.png')}}" alt=""><span class="ms-2">India</span></div>
                                    </div>
                                    <div class="content">
                                        <ul class="my-2">
                                            <li><a href=""><i class="fa-solid fa-phone"></i> +91 9876543210</a></li>
                                            <li><a href=""><i class="fa-solid fa-envelope"></i> Info@dotglobaltechnologies.com</a></li>
                                            <li><i class="fa-solid fa-location-dot"></i> Country: </span><span style="color: #1E1E1E;">India</span></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="section position-relative border rounded" style="width:95%; margin-bottom:25px">
                                    <div class="flags position-absolute">
                                        <div class="country-logo"><img src="{{asset('storage/images/20231112-100532-290014-qatar-flag.png')}}" alt=""><span class="ms-2">Qatar</span></div>
                                    </div>
                                    <div class="content">
                                        <ul class="my-2">
                                            <li><a href=""><i class="fa-solid fa-phone"></i> +91 9876543210</a></li>
                                            <li><a href=""><i class="fa-solid fa-envelope"></i> Info@dotglobaltechnologies.com</a></li>
                                            <li><i class="fa-solid fa-location-dot"></i> Country: </span><span style="color: #1E1E1E;">Qatar</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="section position-relative border rounded" style="width:95%; margin-bottom:25px">
                                    <div class="flags position-absolute">
                                        <div class="country-logo"><img src="{{asset('storage/images/20231112-100532-775765-singapore-flag.png')}}" alt=""><span class="ms-2">Singapore</span></div>
                                    </div>
                                    <div class="content">
                                        <ul class="my-2">
                                            <li><a href=""><i class="fa-solid fa-phone"></i> +91 9876543210</a></li>
                                            <li><a href=""><i class="fa-solid fa-envelope"></i> Info@dotglobaltechnologies.com</a></li>
                                            <li><i class="fa-solid fa-location-dot"></i> Country: </span><span style="color: #1E1E1E;">Singapore</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="section position-relative border rounded" style="width:95%; margin-bottom:25px">
                                    <div class="flags position-absolute">
                                        <div class="country-logo"><img src="{{asset('storage/images/20231112-100531-908583-uae-flag.png')}}" alt=""><span class="ms-2">Dubai</span></div>
                                    </div>
                                    <div class="content">
                                        <ul class="my-2">
                                            <li><a href=""><i class="fa-solid fa-phone"></i> +91 9876543210</a></li>
                                            <li><a href=""><i class="fa-solid fa-envelope"></i> Info@dotglobaltechnologies.com</a></li>
                                            <li><i class="fa-solid fa-location-dot"></i> Country: </span><span style="color: #1E1E1E;">Dubai</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left-nav-drawer"></div>
                </nav>
            </header>
                <main>
                    