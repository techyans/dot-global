@include('includes/header')
        <div class="container-fluid index-page">
            <div class="row home-top">
                @include('templates/home-page/top-section')
            </div>
            <div class="row justify-content-center trusted-client">
                <div class="col-12">
                    @include('templates/home-page/trusted-client')
                </div>
            </div>
            <div class="row justify-content-center wwd">
                <div class="col-12 col-lg-10">
                    @include('templates/home-page/what-we-do')
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 our-solution">
                    @include('templates/home-page/our-solution')
                </div>
            </div>
            <div class="row justify-content-center top-notch" style="background: #F3F5FB">
                <div class="col-12 col-lg-10">
                    @include('templates/home-page/top-notch')
                </div>
            </div>
            <div class="row justify-content-center technologies">
                <div class="col-12 col-lg-10">
                    @include('templates/home-page/technologies')
                </div>
            </div>
            <div class="row justify-content-center service-brand" style="background: #F7F7F7">
                <div class="col-12 col-lg-11">
                    @include('templates/home-page/service-brand')
                </div>
            </div>
            <div class="row justify-content-center emerging-tech">
                <div class="col-12 col-lg-10">
                    @include('templates/home-page/emerging-tech')
                </div>
            </div>
            <div class="row justify-content-center testimonial">
                <div class="col-12 col-lg-9">
                    @include('templates/home-page/testimonials')
                </div>
            </div>
            <div class="row justify-content-center px-0">
                <div class="col-12 mx-auto counters" style="background:url({{asset('storage/images/20231111-221620-481692-dgt-top-banner.jpg')}})">
                    <div class="row justify-content-center" style="background: #000000b7;">
                        <div class="col-12 col-lg-11 py-5">
                            @include('templates/home-page/counters')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center bussiness-challange" style="background: #F7F7F7">
                <div class="col-12 col-lg-10">
                    @include('templates/home-page/bussiness-challange')
                </div>
            </div>
            <div class="row justify-content-center wcu" style="background: #F7F7F7">
                <div class="col-12 col-lg-10">
                    @include('templates/home-page/why-choose-us')
                </div>
            </div>
        </div>
@include('includes/footer')