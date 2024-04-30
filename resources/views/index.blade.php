@extends('layouts.app')
@section('title')
 T Retails Lab
@endsection
@section('maincontent')
     <!--Main Slider Start-->
        <section class="main-slider-two">
            <div class="main-slider-two__carousel nisoz-owl__carousel owl-carousel" data-owl-options='{
		"loop": false,
		"animateOut": "slideOutDown",
		"animateIn": "fadeIn",
		"items": 1,
		"smartSpeed": 1000, 
        "autoplay": false, 
        "autoplayTimeout": 6000, 
		"autoplayHoverPause": true,
		"nav": true,
        "navText": ["<span class=\"icon-up-arrow\"></span>","<span class=\"icon-down-arrow\"></span>"],
		"dots": false,
		"margin": 0
	    }'>
        {{-- <script>
            function onSubmit(token) {
                document.getElementById("contactForm").submit();
            }
        </script> --}}
                <div class="item"><!-- slider item start -->
                    <div class="main-slider-two__item">
                        <!-- bg image start -->
                        <div class="main-slider-two__bg" style="background-image: url({{asset('website-images/homeimages/'.$home->bgimage)}})"></div>
                        <!-- bg image end -->
                        <div class="main-slider-two__shape-1">
                            <!-- <img src="assets/images/shapes/slider-2-shape-1.png" alt="nisoz"> -->
                        </div><!-- shape-one -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider-two__content">
                                        <h5 class="main-slider-two__sub-title">{{$home->title}}</h5><!-- slider-title -->
                                        <h3 class="text-yellow">{{$home->title}}</h3><!-- slider-title -->
                                        {{-- <h2 class="main-slider-two__title"><span class="main-slider-two__title-anim">Air</span><span class="main-slider-two__title-anim">port </span></h2><!-- slider-title --> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider item end -->
            </div>
        </section>
        <!--Main Slider End-->
        <!-- About Start -->
        <section class="about-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="about-two__content"><!-- about content start-->
                            <div class="section-title">
                                <div class="section-title__triangle triangle-blue">
                                    <span class="section-title__triangle-left"></span>
                                    <span class="section-title__triangle-right"></span>
                                    <!-- <img src="assets/images/loader.png" width="20"> -->
                                </div>
                                <h5 class="section-title__tagline">{{$about->title}}</h5>
                                <h2 class="section-title__title"> {{$about->heading}}</h2>
                            </div><!-- section-title -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <p class="">
                                        {{$about->paragraph1}}
                                    </p>
                                    <p>
                                        {{$about->paragraph2}}  
                                    </p>
                                </div>
                        </div><!-- about content end-->
                    </div>
                </div>
                
                <div class="col-xl-6">
                    <div class="about-two__thumb wow fadeInLeft" data-wow-delay="300ms"><!-- about thumb start -->
                        <div class="about-two__thumb__one">
                            <img src="{{'website-images/aboutimages/'.$about->image}}" alt="nisoz">
                        </div>
                        <div class="about-two__thumb__bg"></div>
                        <!-- <div class="about-two__thumb__border"><img src="assets/images/shapes/about-2-border.png" alt="nisoz"></div> -->
                        <!-- <div class="about-two__thumb__two nisoz-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 10, "speed": 700, "scale": 1 }'>
                            <img src="assets/images/about-2-2.jpg" alt="nisoz">
                        </div>
                        <div class="about-two__thumb__icon"><span class="icon-idea"></span></div> -->
                    </div><!-- about thumb end -->
                </div>
            </div>
        </section>
        <!-- About End -->
        <!-- Accordian Start -->
        <section class="accrodion-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft what-we-do-services" data-wow-delay="200ms">
                        <div class="section-title">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline"> {{$faq->title}}</h5>
                            <h2 class="section-title__title">{{$faq->heading}}</h2>
                            <br>
                            <p>{{$faq->paragraph}} </p>
                            <!-- <img src="assets/images/whatwedo-img.jpg" width="100%" class="mt-10"> -->
                        </div><!-- section-title -->
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="accrodion-one__wrapper nisoz-accrodion" data-grp-name="nisoz-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>{{$faq->faqq1}}</h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$faq->faqans1}}</p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>{{$faq->faqq2}}</h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$faq->faqans2}}</p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>{{$faq->faqq2}}</h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$faq->faqans3}}</p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Accordian End -->
        <!-- Service Start -->
        <section class="service-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="section-title__triangle triangle-purple">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">How We Do It</h5>
                            <h2 class="section-title__title">Providing all the Retail Labs<br> services for you</h2>
                        </div><!-- section-title -->
                    </div>
                </div>
                <div class="row">
                    <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 4,
                        "margin": 15,
                        "smartSpeed": 700,
                        "loop":false,
                        "autoplay": false,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1,
                                "margin": 0
                            },
                            "360":{
                                "items":1,
                                "margin": 0
                            },
                            "575":{
                                "items":2,
                                "margin": 30
                            },
                            "768":{
                                "items":2,
                                "margin": 40
                            },
                            "992":{
                                "items": 3,
                                "margin": 40
                            },
                            "1200":{
                                "items": 4
                            }
                        }
                        }'>
                        @foreach ($services as $service)
                        <div class="item"><!-- slider-item-start -->
                            <div class="service-two__item">
                                <a href="service-nrture.html">
                                <div class="service-two__thumb">
                                    <img src="{{asset('website-images/serviceimages/'.$service->image)}}" alt="nisoz" />
                                </div>
                                <div class="service-two__content sc-one">
                                    <div class="service-two__item__hover"></div>
                                    <h3 class="service-two__item__title">
                                        <a href="#"><img src="{{asset('website-images/serviceimages/'.$service->logoimage)}}" width="120" alt="nosoz"></a>
                                    </h3><!-- /.service-title -->
                                    <div class="service-two__item__border"></div>
                                    <p class="service-two__item__text">{{$service->paragraph}}</p><!-- /.service-content -->
                                </div>
                                </a>
                            </div><!-- /.service-card-one -->
                        </div>
                        @endforeach
                        
                        {{-- <div class="item"><!-- slider-item-start -->
                            <div class="service-two__item">
                                <a href="#">
                                <div class="service-two__thumb">
                                    <img src="assets/images/service-1-2.jpg" alt="nisoz" />
                                </div>
                                <div class="service-two__content sc-two">
                                    <div class="service-two__item__hover"></div>
                                    <h3 class="service-two__item__title">
                                        <a href="#"><img src="assets/images/service-logo2.png" width="120"></a>
                                    </h3><!-- /.service-title -->
                                    <div class="service-two__item__border"></div>
                                    <p class="service-two__item__text">The service is targeted at major stakeholders in the travel retail and duty free industry.</p><!-- /.service-content -->
                                </div>
                                </a>
                            </div><!-- /.service-card-one -->
                        </div>
                        <div class="item"><!-- slider-item-start -->
                            <div class="service-two__item">
                                <a href="#">
                                <div class="service-two__thumb">
                                    <img src="assets/images/service-1-3.jpg" alt="nisoz" />
                                </div>
                                <div class="service-two__content sc-three">
                                    <div class="service-two__item__hover"></div>
                                    <h3 class="service-two__item__title">
                                        <a href="#"><img src="assets/images/service-logo3.png" width="120"></a>
                                    </h3><!-- /.service-title -->
                                    <div class="service-two__item__border"></div>
                                    <p class="service-two__item__text">The service is targeted at major stakeholders in the travel retail and duty free industry.</p><!-- /.service-content -->
                                </div>
                                </a>
                            </div><!-- /.service-card-one -->
                        </div>
                        <div class="item"><!-- slider-item-start -->
                            <div class="service-two__item">
                                <a href="#">
                                <div class="service-two__thumb">
                                    <img src="assets/images/service-1-4.jpg" alt="nisoz" />
                                </div>
                                <div class="service-two__content sc-four">
                                    <div class="service-two__item__hover"></div>
                                    <h3 class="service-two__item__title">
                                        <a href="#"><img src="assets/images/service-logo4.png" width="120"></a>
                                    </h3><!-- /.service-title -->
                                    <div class="service-two__item__border"></div>
                                    <p class="service-two__item__text">The service is targeted at major stakeholders in the travel retail and duty free industry.</p><!-- /.service-content -->
                                </div>
                                </a>
                            </div><!-- /.service-card-one -->
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Start -->
        <!-- Call To Action Start -->
        <section class="fact-two">
            <div class="fact-two__bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 titles">
                        <div class="section-title">
                            <div class="section-title__triangle triangle-yellow">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline"> {{$whychoose->title}}</h5>
                            <h2 class="section-title__title">T{{$whychoose->heading}}</h2>
                        </div><!-- section-title -->
                        <div class="fact-two__team">
                            <div class="fact-two__team-item"><img src="{{asset('website-images/whyimages/'.$whychoose->image1)}}" alt="nisoz" /></div>
                            <div class="fact-two__team-item"><img src="{{asset('website-images/whyimages/'.$whychoose->image2)}}" alt="nisoz" /></div>
                            <div class="fact-two__team-item"><img src="{{asset('website-images/whyimages/'.$whychoose->image3)}}" alt="nisoz" /></div>
                            <p class="fact-two__team-text">{{$whychoose->paragraph}}</p>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp animated" data-wow-delay="100ms">
                        <div class="fact-two__wrapper">
                            <div class="fact-two__item text-center">
                                <div class="fact-two__item__icon"><span class="icon-campaign"></span></div><!-- /.fact-two__icon -->
                                <div class="fact-two__item__count">
                                    <span class="count-box">
                                        <span class="count-text" data-stop="{{$whychoose->yoexp}}" data-speed="1500"></span>
                                    </span>
                                </div><!-- /.fact-two__count -->
                                <h3 class="fact-two__item__title">Years of Experience</h3><!-- /.fact-two__title -->
                            </div><!-- /.fact-two__item -->
                            <div class="fact-two__item text-center">
                                <div class="fact-two__item__icon"><span class="icon-recommend"></span></div><!-- /.fact-two__icon -->
                                <div class="fact-two__item__count">
                                    <span class="count-box">
                                        <span class="count-text" data-stop="{{$whychoose->sacustomer}}" data-speed="1500"></span>
                                    </span>
                                </div><!-- /.fact-two__count -->
                                <h3 class="fact-two__item__title">Satisfied Customers</h3><!-- /.fact-two__title -->
                            </div><!-- /.fact-two__item -->
                            <div class="fact-two__item text-center">
                                <div class="fact-two__item__icon"><span class="icon-increment"></span></div><!-- /.fact-two__icon -->
                                <div class="fact-two__item__count">
                                    <span class="count-box">
                                        <span class="count-text" data-stop="{{$whychoose->couwsur}}" data-speed="1500"></span>
                                    </span>
                                </div><!-- /.fact-two__count -->
                                <h3 class="fact-two__item__title">Countries We Served</h3><!-- /.fact-two__title -->
                            </div><!-- /.fact-two__item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action End -->

        
        <!--Partners Brands Start-->
        
        <div class="client-carousel @@extraClassName">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__triangle triangle-purple">
                        <span class="section-title__triangle-left"></span>
                        <span class="section-title__triangle-right"></span>
                    </div>
                    <!-- <h5 class="section-title__tagline">Why Choose tRetail Labs</h5> -->
                    <h2 class="section-title__title">Strategic Partnerships</h2>
                </div><!-- section-title -->
                <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 4,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 0
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 4
                }
            }
            }'>
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="assets/images/brand-1-1.png" alt="nisoz">
                        <p>Unlock actionable intelligence</p>
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        <!--Partners Brands End-->
        
        <!--Testimonial Start-->
        <section class="testimonial-two">
            <div class="testimonial-two__bg" style="background-image: url(assets/images/shapes/testimonial-bg-2.jpg);"></div>
            <div class="container">
                <div class="testimonial-two__wrapper">
                    <div class="testimonial-two__carousel nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 0,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": true,
                "nav":false,
                "URLhashListener":true,
                "dots":true,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"]
                }'>
                        <!-- Testimonial Item -->
                        <div class="item" data-hash="item1">
                            <div class="testimonial-two__item">
                                <div class="testimonial-two__author">
                                    <img src="assets/images/testimonial-2-1.jpg" alt="nisoz">
                                    <div class="testimonial-two__icon"><span class="icon-quote"></span></div><!-- testimonial-quote-icon -->
                                </div>
                                <div class="testimonial-two__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div><!-- testimonial-ratings -->
                                <div class="testimonial-two__quote">
                                    This is due to their excellent service, competitive pricing and customer support.
                                    It’s through refresing to get such a personal touch.
                                </div><!-- testimonial-quote -->
                                <div class="testimonial-two__meta">
                                    <h5 class="testimonial-two__title">aleesha michale</h5>
                                    <span class="testimonial-two__designation">ceo &amp; co founder</span>
                                </div><!-- testimonial-meta -->
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <!-- Testimonial Item -->
                        <div class="item" data-hash="item2">
                            <div class="testimonial-two__item">
                                <div class="testimonial-two__author">
                                    <img src="assets/images/testimonial-2-2.jpg" alt="nisoz">
                                    <div class="testimonial-two__icon"><span class="icon-quote"></span></div><!-- testimonial-quote-icon -->
                                </div>
                                <div class="testimonial-two__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div><!-- testimonial-ratings -->
                                <div class="testimonial-two__quote">
                                    This is due to their excellent service, competitive pricing and customer support.
                                    It’s through refresing to get such a personal touch.
                                </div><!-- testimonial-quote -->
                                <div class="testimonial-two__meta">
                                    <h5 class="testimonial-two__title">aleesha michale</h5>
                                    <span class="testimonial-two__designation">ceo &amp; co founder</span>
                                </div><!-- testimonial-meta -->
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <!-- Testimonial Item -->
                        <div class="item" data-hash="item3">
                            <div class="testimonial-two__item">
                                <div class="testimonial-two__author">
                                    <img src="assets/images/testimonial-2-3.jpg" alt="nisoz">
                                    <div class="testimonial-two__icon"><span class="icon-quote"></span></div><!-- testimonial-quote-icon -->
                                </div>
                                <div class="testimonial-two__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div><!-- testimonial-ratings -->
                                <div class="testimonial-two__quote">
                                    This is due to their excellent service, competitive pricing and customer support.
                                    It’s through refresing to get such a personal touch.
                                </div><!-- testimonial-quote -->
                                <div class="testimonial-two__meta">
                                    <h5 class="testimonial-two__title">aleesha michale</h5>
                                    <span class="testimonial-two__designation">ceo &amp; co founder</span>
                                </div><!-- testimonial-meta -->
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                    </div>
                    <!-- Testimonial Thumb -->
                    <div class="testimonial-two__carousel__thumb nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 3,
                "margin": 10,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": true,
                "URLhashListener":true,
                "center": true,
                "dots":false
                }'>
                        <a href="#item1" class="item" data-hash="item1">
                            <span class="testimonial-two__carousel__thumb__item"><img src="assets/images/ts-author-1.jpg" alt="nisoz"></span>
                        </a><!-- Testimonial Item -->
                        <a href="#item2" class="item" data-hash="item2">
                            <span class="testimonial-two__carousel__thumb__item"><img src="assets/images/ts-author-2.jpg" alt="nisoz"></span>
                        </a><!-- Testimonial Item -->
                        <a href="#item3" class="item" data-hash="item3">
                            <span class="testimonial-two__carousel__thumb__item"><img src="assets/images/ts-author-3.jpg" alt="nisoz"></span>
                        </a><!-- Testimonial Item -->
                    </div>
                    <!-- Testimonial Thumb -->
                </div>
            </div>
        </section>
        <!--Testimonial End-->
        <!-- Video Start-->
        <section class="video-one">
            <div class="container">
                <div class="video-one__banner wow fadeInUp" data-wow-delay="100ms">
                    <img src="assets/images/video-bg-1-1.jpg" alt="nisoz">
                    <!-- <div class="video-one__border-wrap wow fadeInLeft" data-wow-delay="300ms">
                        <div class="video-one__border-one"></div>
                        <div class="video-one__border-two"></div>
                    </div> -->
                    <div class="video-one__content">
                        <!-- video btn start -->
                        <a href="https://www.youtube.com/watch?v=FTOS6cwJNCs" class="video-popup"><span class="fa fa-play"></span></a>
                        <!-- video btn end -->
                        <h2 class="video-one__content__title">Travel Retail and Duty <br>Free Industry. </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video Start-->
        <!-- Blog Start -->
        <section class="blog-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="section-title text-center">
                            <div class="section-title__triangle triangle-blue">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">From the Blog</h5>
                            <h2 class="section-title__title">News & Updates</h2>
                        </div><!-- section-title -->
                    </div>
                </div>
                <div class="row">
                    <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 4,
                        "margin": 15,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1,
                                "margin": 0
                            },
                            "360":{
                                "items":1,
                                "margin": 0
                            },
                            "575":{
                                "items":1,
                                "margin": 30
                            },
                            "768":{
                                "items":3,
                                "margin": 40
                            },
                            "992":{
                                "items": 4,
                                "margin": 40
                            },
                            "1200":{
                                "items": 4
                            }
                        }
                        }'>
                        @foreach($blogs as $blog)
                        <div class="item"><!-- slider-item-start -->
                            <div class="blog-one__item">
                                <div class="blog-one__image">
                                    <img src="{{asset('website-images/newsimages/'.$blog->image)}}" alt="Five ways that can develop your business">
                                    <a href="#"></a>
                                    <div class="blog-one__date">
                                        <span>{{$blog->date}}</span>
                                        {{$blog->month}}
                                    </div><!-- /.blog-date -->
                                </div><!-- /.blog-image -->
                                <div class="blog-one__content">
                                    <h3 class="blog-one__title">
                                        <a href="#">{{$blog->heading}}</a>
                                    </h3><!-- /.blog-title -->
                                    <a href="#" class="nisoz-btn">
                                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                    </a><!-- /.blog-read-more -->
                                </div><!-- /.blog-content -->
                            </div><!-- /.blog-card-one -->
                        </div>
                        @endforeach
                        {{-- <div class="item"><!-- slider-item-start -->
                            <div class="blog-one__item">
                                <div class="blog-one__image">
                                    <img src="assets/images/blog-1-2.jpg" alt="Get a few solutions to hire a best candidate">
                                    <a href="#"></a>
                                    <div class="blog-one__date">
                                        <span>30</span>
                                        June, 2023
                                    </div><!-- /.blog-date -->
                                </div><!-- /.blog-image -->
                                <div class="blog-one__content">
                                    <h3 class="blog-one__title">
                                        <a href="#">Get a few solutions to hire a best candidate</a>
                                    </h3><!-- /.blog-title -->
                                    <a href="#" class="nisoz-btn">
                                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                    </a><!-- /.blog-read-more -->
                                </div><!-- /.blog-content -->
                            </div><!-- /.blog-card-one -->
                        </div>
                        <div class="item"><!-- slider-item-start -->
                            <div class="blog-one__item">
                                <div class="blog-one__image">
                                    <img src="assets/images/blog-1-3.jpg" alt="Introducing the latest tech features for you">
                                    <a href="#"></a>
                                    <div class="blog-one__date">
                                        <span>30</span>
                                        June, 2023
                                    </div><!-- /.blog-date -->
                                </div><!-- /.blog-image -->
                                <div class="blog-one__content">
                                    <h3 class="blog-one__title">
                                        <a href="#">Introducing the latest tech features for you</a>
                                    </h3><!-- /.blog-title -->
                                    <a href="#" class="nisoz-btn">
                                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                    </a><!-- /.blog-read-more -->
                                </div><!-- /.blog-content -->
                            </div><!-- /.blog-card-one -->
                        </div>
                        <div class="item"><!-- slider-item-start -->
                            <div class="blog-one__item">
                                <div class="blog-one__image">
                                    <img src="assets/images/blog-1-1.jpg" alt="Five ways that can develop your business">
                                    <a href="#"></a>
                                    <div class="blog-one__date">
                                        <span>30</span>
                                        June, 2023
                                    </div><!-- /.blog-date -->
                                </div><!-- /.blog-image -->
                                <div class="blog-one__content">
                                    <h3 class="blog-one__title">
                                        <a href="#">Five ways that can develop your business</a>
                                    </h3><!-- /.blog-title -->
                                    <a href="#" class="nisoz-btn">
                                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                    </a><!-- /.blog-read-more -->
                                </div><!-- /.blog-content -->
                            </div><!-- /.blog-card-one -->
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->


        <!-- Contact Start -->
        <section class="contact-one">
            <div class="contact-one__bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="nisoz-stretch-element-inside-column">
                            <div class="contact-one__stretch-shape">
                                <img src="assets/images/shapes/contact-2.png" alt="nisoz">
                            </div>
                            <div class=" wow slideInLeft" data-wow-delay="100ms">
                                <div class="contact-one__stretch-image">
                                    <img src="assets/images/contact-1.png" alt="nisoz">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay="300ms">
                        <div class="contact-one__right">
                            <div class="section-title">
                                <div class="section-title__triangle triangle-yellow">
                                    <span class="section-title__triangle-left"></span>
                                    <span class="section-title__triangle-right"></span>
                                </div>
                                <h5 class="section-title__tagline">contact Us</h5>
                                <h2 class="section-title__title">Send Us Your Inquiry</h2>
                                <p>We will reply within 24 hours</p>
                            
                
                                @if(Session('success'))
                                <span class="alert alert-success" role="alert">{{session('success')}}</span>
                                @endif
                            </div><!-- section-title -->
                            <div class="contact-one__form-box">
                                <form action="{{url('indexquery')}}" method="POST" id="registerForm" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="First name" name="fname">
                                            </div>
                                            @if($errors->has('fname'))
                                            <div class="error text-danger">{{ $errors->first('fname') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="Last name" name="lname">
                                            </div>
                                            @if($errors->has('lname'))
                                            <div class="error text-danger">{{ $errors->first('lname') }}</div>
                                        @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-one__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                            @if($errors->has('email'))
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                        </div>

                                    
                                            <div class="col-md-12">
                                                <div class="contact-one__input-box text-message-box">
                                                <textarea name="message" placeholder="Let Us Know How We Can Help You"></textarea>
                                                @if($errors->has('message'))
                                                <div class="error text-danger">{{ $errors->first('message') }}</div>
                                            @endif
                                            </div>
{{-- 
                                        @if(config('services.recaptcha.site_key'))
                                                <div class="g-recaptcha"
                                                    data-sitekey="{{config('services.recaptcha.site_key')}}">
                                                </div>
                                            @endif --}}
                                            <div class="col-md-12">
                                               <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                               @if($errors->has('g-recaptcha-response'))
                                               <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                                           @endif
                                              </div>
 
                                             <button class=" nisoz-btn btn-yellow"  
                                             type="button"  onclick="onClick(event)"
                                            >Submit</button>
                                         

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- <div class="result"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   <!-- Contact End -->
        {{-- <script src="https://www.google.com/recaptcha/api.js?render=6LdU_McpAAAAALH9wJHqfdwYCkD4ViFDZAFd00al"></script> --}}
        @push('script') 
          {{-- <script>
            function onSubmit(token) {
              document.getElementById("registerForm").submit();
            }
          </script> --}}

          <script>
            function onClick(e) {
              e.preventDefault();
              grecaptcha.ready(function() {
                grecaptcha.execute('{{config('services.recaptcha.site_key')}}', {action: 'submit'}).then(function(token) {
                   document.getElementById("g-recaptcha-response").value = token;
                    document.getElementById("registerForm").submit();
                });
              });
            }
        </script>
          @endpush
       
        @endsection