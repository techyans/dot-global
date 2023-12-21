<div class="row">
    <div class="col-2 header-logo">
        <a href="{{url('/')}}"><img src="{{asset('storage/images/20231110-191450-980554-dot-logo.png')}}" alt=""></a>
    </div>
    <div class="col-7 ">
        <div class="nav-lists">
            <ul>
                <li class="top-nav-items what-wedo-dropdown">
                    <a href="#" id="what-wedo-dropdown" data-bs-toggle="dropdown" aria-expanded="false">What We Do <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu shadow first border" aria-labelledby="what-wedo-dropdown">
                        <div class="sub-menu position-relative"> @include('templates/mega-menu/what-we-do')</div>
                       
                    </ul>
                </li>
                <li class="top-nav-items">
                    <a href="#" id="offering-dropdown" data-bs-toggle="dropdown" aria-expanded="false">Offering <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu first" aria-labelledby="offering-dropdown">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </li>
                <li class="top-nav-items"><a href="{{url('/work-process')}}/">Innovation <i class="fa-solid fa-chevron-down"></i></a></li>
                <li class="top-nav-items"><a href="{{url('/blogs')}}/">Staff Augmentation <i class="fa-solid fa-chevron-down"></i></a></li>
                <li class="top-nav-items company-dropdown">
                    <a href="#" id="company-dropdown" data-bs-toggle="dropdown" aria-expanded="false">Company <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu first border" aria-labelledby="company-dropdown">
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