@extends('layouts.app')
@section('title')
 Services Nrture
@endsection
@section('maincontent')
  <section class="page-header"  style="background-image:url({{asset('website-images/servicepage/'.$nrturebanner->image)}});background-size: cover;background-position: top;background-repeat: no-repeat;">
        <div class="page-header__shape3 wow slideInRight" data-wow-delay="300ms"></div><!-- /.page-header__shape3 -->
        <div class="container">
            <h2 class="page-header__title">{{$nrturebanner->heading}}</h2><!-- /.page-title -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <!-- About Start -->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="nisoz-stretch-element-inside-column">
                        <div class="contact-one__stretch-shape">
                            <img src="{{url('assets/images/shapes/contact-2.png')}}" alt="nisoz">
                        </div>
                        <div class=" wow slideInLeft" data-wow-delay="100ms">
                            <div class="contact-one__stretch-image">
                                <img src="{{url('assets/images/about-img2.png')}}" alt="nisoz">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-four__content">
                        <div class="section-title">
                            <div class="section-title__triangle triangle-blue">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">The industry's </h5>
                            <h2 class="section-title__title">Most comprehensive SaaS platform </h2>
                        </div><!-- section-title -->
                        <!-- <h3 class="about-four__content__heading">Airport F&B Intelligence at Your Fingertips</h3> -->
                        <p class="about-four__content__text">Looking for more relevant and accurate data about your customer, market trends, and market size? Access a suite of analytics tools and dashboards that provide data and insights into the airport F&B sector.</p>
                        <p class="about-four__content__text">From comprehensive landscape analysis to market and competitor insights, gain confidence with contextualised data so that you can make informed decisions quickly. Book a demo to find out how we can help your business make better decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
    
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
        {{-- <!-- Call To Action Start -->
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
                            <h5 class="section-title__tagline">Why Choose tRetail Labs</h5>
                            <h2 class="section-title__title">Transforming the current legacy industry</h2>
                        </div><!-- section-title -->
                        <div class="fact-two__team">
                            <div class="fact-two__team-item"><img src="{{url('assets/images/fact-1.jpg')}}" alt="nisoz" /></div>
                            <div class="fact-two__team-item"><img src="{{url('assets/images/fact-2.jpg')}}" alt="nisoz" /></div>
                            <div class="fact-two__team-item"><img src="{{url('assets/images/fact-3.jpg')}}" alt="nisoz" /></div>
                            <p class="fact-two__team-text">We’ve 178 experienced team members</p>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp animated" data-wow-delay="100ms">
                        <div class="fact-two__wrapper">
                            <div class="fact-two__item text-center">
                                <div class="fact-two__item__icon"><span class="icon-campaign"></span></div><!-- /.fact-two__icon -->
                                <div class="fact-two__item__count">
                                    <span class="count-box">
                                        <span class="count-text" data-stop="15" data-speed="1500"></span>
                                    </span>
                                </div><!-- /.fact-two__count -->
                                <h3 class="fact-two__item__title">Years of Experience</h3><!-- /.fact-two__title -->
                            </div><!-- /.fact-two__item -->
                            <div class="fact-two__item text-center">
                                <div class="fact-two__item__icon"><span class="icon-recommend"></span></div><!-- /.fact-two__icon -->
                                <div class="fact-two__item__count">
                                    <span class="count-box">
                                        <span class="count-text" data-stop="601" data-speed="1500"></span>
                                    </span>
                                </div><!-- /.fact-two__count -->
                                <h3 class="fact-two__item__title">Satisfied Customers</h3><!-- /.fact-two__title -->
                            </div><!-- /.fact-two__item -->
                            <div class="fact-two__item text-center">
                                <div class="fact-two__item__icon"><span class="icon-increment"></span></div><!-- /.fact-two__icon -->
                                <div class="fact-two__item__count">
                                    <span class="count-box">
                                        <span class="count-text" data-stop="28" data-speed="1500"></span>
                                    </span>
                                </div><!-- /.fact-two__count -->
                                <h3 class="fact-two__item__title">Countries We Served</h3><!-- /.fact-two__title -->
                            </div><!-- /.fact-two__item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action End --> --}}

        @foreach($servicefeature as $service)
    <!-- Choose Start -->
    <section class="choose-two">
        <div class="choose-two__bg wow slideInRight" data-wow-delay="200ms" style="background-color: #ffffff;"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow slideInLeft" data-wow-delay="200ms">
                    <img src="{{asset('website-images/servicepage/'.$service->image)}}" class="img-fluid" alt="services">
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="section-title">
                        <div class="section-title__triangle triangle-blue">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h5 class="section-title__tagline">{{$service->title}}</h5>
                        <h2 class="section-title__title">{{$service->heading}}</h2>
                    </div><!-- section-title -->
                    <p>{{$service->paragraph}}</p>
                    <p>Popular Views</p>
                    <ul>
                        <li>{{$service->point1}}</li>
                        <li>{{$service->point2}}</li>
                        <li>{{$service->point3}}</li>
                        <li>{{$service->point4}}</li>
                    </ul>
                    <a href="{{$service->link}}" class="nisoz-btn" target="_blank">
                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                        <span class="nisoz-btn__text">Book A Demo</span>
                    </a><!-- /.btn -->
                </div>
            </div>
        </div>
    </section>
    <!-- Choose End -->
    @endforeach
    {{-- <!-- Choose Start -->
    <section class="choose-two">
        <div class="choose-two__bg" style="background-color: rgb(244, 244, 244);"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow slideInLeft" data-wow-delay="200ms">
                    <img src="{{url('assets/images/serv2.webp')}}" class="img-fluid">
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="section-title">
                        <div class="section-title__triangle triangle-blue">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h5 class="section-title__tagline">Freature</h5>
                        <h2 class="section-title__title">Competitive Benchmarking</h2>
                    </div><!-- section-title -->
                    <p>From identifying outlet optimisation opportunities to assessing look-a-like airports for your bid strategies, this module leverages our extensive dataset to provide a comprehensive competitive analysis at the outlet, airport, regional, and global levels.</p>
                    <p>Popular Views</p>
                    <ul>
                        <li>Category and Cuisine mix across look-a-like airports</li>
                        <li>Brand mix across airports</li>
                        <li>Revenue potential comparison</li>
                        <li>Experience score comparison</li>
                    </ul>
                    <a href="https://app.apollo.io/#/meet/managed-meetings/sushanta_das_6cd/qwg-3h9-01v/intro" class="nisoz-btn" target="_blank">
                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                        <span class="nisoz-btn__text">Book A Demo</span>
                    </a><!-- /.btn -->
                </div>
            </div>
        </div>
    </section>
    <!-- Choose End -->
    
    <!-- Choose Start -->
    <section class="choose-two">
        <div class="choose-two__bg" style="background-color: #ffffff;"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow slideInLeft" data-wow-delay="200ms">
                    <img src="{{url('assets/images/serv3.webp')}}" class="img-fluid">
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="section-title">
                        <div class="section-title__triangle triangle-blue">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h5 class="section-title__tagline">Freature</h5>
                        <h2 class="section-title__title">Revenue Potential Estimator</h2>
                    </div><!-- section-title -->
                    <p>Our Revenue Potential Estimator module, powered by our proprietary revenue estimation model, provides robust revenue analysis on outlet, airport, and market sizing to help airport F&B businesses build more contextualized sales plans and bid strategies.</p>
                    <p>Popular Views</p>
                    <ul>
                        <li>Revenue estimation by category and airport</li>
                        <li>What-if scenario planning </li>
                        <li>Attribution modelling</li>
                    </ul>
                    <a href="https://app.apollo.io/#/meet/managed-meetings/sushanta_das_6cd/yeo-gjl-m3y/Revenue" class="nisoz-btn" target="_blank">
                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                        <span class="nisoz-btn__text">Book A Demo</span>
                    </a><!-- /.btn -->
                </div>
            </div>
        </div>
    </section>
    <!-- Choose End -->
    
    <!-- Choose Start -->
    <section class="choose-two">
        <div class="choose-two__bg" style="background: rgb(244, 244, 244);"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow slideInLeft" data-wow-delay="200ms">
                    <img src="{{url('assets/images/serv3.webp')}}" class="img-fluid">
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="section-title">
                        <div class="section-title__triangle triangle-blue">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h5 class="section-title__tagline">Freature</h5>
                        <h2 class="section-title__title">Traveller Intelligence</h2>
                    </div><!-- section-title -->
                    <p>Suite of dashboards that deliver data and analytics on traveller sentiment, perceptions, and experience scores at the outlet, airport, regional, and global levels.</p>
                    <p>Popular Views</p>
                    <ul>
                        <li>Persona mix by terminal so you can build better-targeted offers</li>
                        <li>Outlet experience score trends over time so you can identify behaviour change drivers</li>
                        <li>Positive/Negative Experience drivers by outlet so you can identify unmet traveller needs</li>
                    </ul>
                    <a href="https://app.apollo.io/#/meet/managed-meetings/sushanta_das_6cd/srm-p8f-oru/travellerintelligence" class="nisoz-btn" target="_blank">
                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                        <span class="nisoz-btn__text">Book A Demo</span>
                    </a><!-- /.btn -->
                </div>
            </div>
        </div>
    </section>
    <!-- Choose End -->
     --}}
    
    <!-- Call To Action Start -->
    <section class="cta-three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
        <div class="cta-three__bg jarallax-img" style="background-image: url({{url('assets/images/cta-bg-3.jpg')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp" data-wow-delay="200ms"> 
                    <div class="section-title text-center">
                        <div class="section-title__triangle">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h2 class="section-title__title">Interested in learning more about how nrture can help your business?</h2>
                    </div><!-- section-title -->
                    <a href="https://app.apollo.io/#/meet/managed-meetings/sushanta_das_6cd/79v-gnr-ki3/discoverycall" class="nisoz-btn" target="_blank">
                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                        <span class="nisoz-btn__text">Book A Demo</span>
                    </a><!-- /.btn -->
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    

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