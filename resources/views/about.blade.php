@extends('layouts.app')
@section('title')
 About
@endsection
@section('maincontent')
<div class="stricky-header stricked-menu main-menu main-menu-with-border">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->    <section class="page-header"  style="background-image:url({{asset('website-images/aboutpage/'.$aboutpage->image)}});background-size: cover;background-position: top;background-repeat: no-repeat;">
        <div class="page-header__shape3 wow slideInRight" data-wow-delay="300ms"></div><!-- /.page-header__shape3 -->
        <div class="container">
            <h2 class="page-header__title">{{$aboutpage->heading}}</h2><!-- /.page-title -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <!-- About Start -->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="nisoz-stretch-element-inside-column">
                        <div class="contact-one__stretch-shape">
                            <img src="assets/images/shapes/contact-2.png" alt="nisoz">
                        </div>
                        <div class=" wow slideInLeft" data-wow-delay="100ms">
                            <div class="contact-one__stretch-image">
                                <img src="{{asset('website-images/aboutpage/'.$aboutab->image)}}" alt="nisoz">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-four__content">
                        <div class="section-title">
                            <div class="section-title__triangle">
                                <span class="section-title__triangle-left"></span>
                                <span class="section-title__triangle-right"></span>
                            </div>
                            <h5 class="section-title__tagline">{{$aboutab->title}}</h5>
                            <h2 class="section-title__title">{{$aboutab->heading}}</h2>
                        </div><!-- section-title -->
                        <p class="about-four__content__text">{{$aboutab->paragraph1}}</p>
                        <p>{{$aboutab->paragraph2}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-two" style="background: #f8f8f8;">
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
                            <h5 class="section-title__tagline">{{$aboutmission->title}} </h5>
                            <h2 class="section-title__title">{{$aboutmission->heading}}</h2>
                        </div><!-- section-title -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <p class="">
                                    {{$aboutmission->paragraph1}}
                                </p>
                                <p>
                                    {{$aboutmission->paragraph2}} 
                                </p>
                            </div>
                    </div><!-- about content end-->
                </div>
            </div>
            
            <div class="col-xl-6">
                <div class="about-two__thumb wow fadeInLeft" data-wow-delay="300ms"><!-- about thumb start -->
                    <div class="about-two__thumb__one">
                        <img src="{{asset('website-images/aboutpage/'.$aboutab->image)}}" alt="nisoz">
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

    <!-- Team Start -->
    <section class="team-one team-one-about">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__triangle triangle-yellow">
                    <span class="section-title__triangle-left"></span>
                    <span class="section-title__triangle-right"></span>
                </div>
                <h5 class="section-title__tagline">experienced team</h5>
                <h2 class="section-title__title">Meet Our People</h2>
            </div>
            <div class="nisoz-owl__dots nisoz-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
        "items": 3,
        "margin": 30,
        "smartSpeed": 700,
        "loop":true,
        "autoplay": true,
        "nav":false,
        "dots":true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
        "responsive":{
            "0":{
                "items":1,
                "margin": 0
            },
            "600":{
                "items": 2
            },
            "992":{
                "items": 3
            }
        }
        }'>
        @foreach($expert as $item)
                <div class="item">
                    <div class="team-one__item">
                        <div class="team-one__item__image">
                            <img src="{{asset('website-images/aboutpage/'.$item->image)}}" alt="nisoz">
                        </div><!-- /.team-image -->
                        <div class="team-one__item__content">
                            <h3 class="team-one__item__title">
                                <a href="team-details.html">{{$item->name}}</a>
                            </h3><!-- /.team-name -->
                            <span class="team-one__item__designation">{{$item->designation}}</span><!-- /.team-designation -->
                            <p>{{$item->paragraph}}</p>
                        </div><!-- /.team-content -->
                    </div><!-- /.team-one -->
                </div>
                @endforeach
                {{-- <div class="item">
                    <div class="team-one__item">
                        <div class="team-one__item__image">
                            <img src="assets/images/team-1-2.jpg" alt="nisoz">
                        </div><!-- /.team-image -->
                        <div class="team-one__item__content">
                            <h3 class="team-one__item__title">
                                <a href="team-details.html">aleesha brown</a>
                            </h3><!-- /.team-name -->
                            <span class="team-one__item__designation">developer</span><!-- /.team-designation -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div><!-- /.team-content -->
                    </div><!-- /.team-one -->
                </div>
                <div class="item">
                    <div class="team-one__item">
                        <div class="team-one__item__image">
                            <img src="assets/images/team-1-3.jpg" alt="nisoz">
                        </div><!-- /.team-image -->
                        <div class="team-one__item__content">
                            <h3 class="team-one__item__title">
                                <a href="team-details.html">david cooper</a>
                            </h3><!-- /.team-name -->
                            <span class="team-one__item__designation">Designer</span><!-- /.team-designation -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div><!-- /.team-content -->
                    </div><!-- /.team-one -->
                </div>
                <div class="item">
                    <div class="team-one__item">
                        <div class="team-one__item__image">
                            <img src="assets/images/team-1-4.jpg" alt="nisoz">
                        </div><!-- /.team-image -->
                        <div class="team-one__item__content">
                            <h3 class="team-one__item__title">
                                <a href="team-details.html">Christine eve</a>
                            </h3><!-- /.team-name -->
                            <span class="team-one__item__designation">developer</span><!-- /.team-designation -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div><!-- /.team-content -->
                    </div><!-- /.team-one -->
                </div>
                <div class="item">
                    <div class="team-one__item">
                        <div class="team-one__item__image">
                            <img src="assets/images/team-1-5.jpg" alt="nisoz">
                        </div><!-- /.team-image -->
                        <div class="team-one__item__content">
                            <h3 class="team-one__item__title">
                                <a href="team-details.html">mike hardeson</a>
                            </h3><!-- /.team-name -->
                            <span class="team-one__item__designation">Designer</span><!-- /.team-designation -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div><!-- /.team-content -->
                    </div><!-- /.team-one -->
                </div>
                <div class="item">
                    <div class="team-one__item">
                        <div class="team-one__item__image">
                            <img src="assets/images/team-1-6.jpg" alt="nisoz">
                        </div><!-- /.team-image -->
                        <div class="team-one__item__content">
                            <h3 class="team-one__item__title">
                                <a href="team-details.html">sarah albert</a>
                            </h3><!-- /.team-name -->
                            <span class="team-one__item__designation">developer</span><!-- /.team-designation -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div><!-- /.team-content -->
                    </div><!-- /.team-one -->
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Team Start -->

    
    {{-- <!-- Contact Start -->
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
                        </div><!-- section-title -->
                        <div class="contact-one__form-box">
                            <form action="#" class="contact-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="First name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Last name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-one__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-one__input-box">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Select service</option>
                                                <option value="1">Nrture</option>
                                                <option value="1">Examine</option>
                                                <option value="1">Xplore</option>
                                                <option value="1">Innovate</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="contact-one__input-box text-message-box">
                                            <textarea name="message" placeholder="Let Us Know How We Can Help You"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <button type="submit" class="nisoz-btn btn-yellow">
                                                <!-- <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span> -->
                                                <span class="nisoz-btn__text">Send Inquiry</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     --}}

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