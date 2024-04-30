@extends('layouts.app')
@section('title')
Contact
@endsection
@section('maincontent')

<section class="page-header"  style="background-image:url('assets/images/about.jpg');background-size: cover;background-position: top;background-repeat: no-repeat;">
        <div class="page-header__shape3 wow slideInRight" data-wow-delay="300ms"></div><!-- /.page-header__shape3 -->
        <div class="container">
            <h2 class="page-header__title">Contact</h2><!-- /.page-title -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
     
        <!--Contact Info Start-->
        <!-- <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="contact__box">
                            <div class="contact__box__icon"><span class="icon-mailbox"></span></div>
                            <h5 class="contact__box__title">Call us</h5>
                            <p class="contact__box__text"><a href="#">+91 123 465 7890</a></p>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__box">
                            <div class="contact__box__icon"><span class="icon-mailbox"></span></div>
                            <h5 class="contact__box__title">Write email</h5>
                            <p class="contact__box__text"><a href="#">tretaillabs@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__box contact__box-two">
                            <div class="contact__box__icon"><span class="icon-maps-and-flags"></span></div>
                            <h5 class="contact__box__title">Visit office</h5>
                            <p class="contact__box__text">Dwarakanagar, Visakhapatnam</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--Contact Info End-->
        <!-- Contact Start -->
        <section class="contact-one contact-page">
            <div class="container wow fadeInUp" data-wow-delay="300ms">
                <div class="section-title text-center">
                    <div class="section-title__triangle triangle-blue">
                        <span class="section-title__triangle-left"></span>
                        <span class="section-title__triangle-right"></span>
                    </div>
                    <h5 class="section-title__tagline">contact with us</h5>
                    <h2 class="section-title__title">feel free to get in<br> touch with me</h2>
                     @if(Session('success'))
                    <span class="alert alert-success" role="alert">{{session('success')}}</span>
                    @endif
                </div><!-- section-title -->
                <div class="contact-one__form-box  text-center">
                    <form action="{{url('contact')}}" method="POST" id="registerForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    {{-- <label for="" class="d-flex text-start">Full Name</label> --}}
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                                @if($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                                  @endif
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                                @if($errors->has('email'))
                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                                  @endif
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Phone" name="phone" id="phoneNumber" oninput="validatePhoneNumber()">
                                </div>
                                <div id="phoneError" style="color: red;"></div>
                                @if($errors->has('phone'))
                                <div class="error text-danger">{{ $errors->first('phone') }}</div>
                                  @endif
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <select class="selectpicker" name="service" aria-label="Default select example">
                                        <option selected>Select service</option>
                                        <option value="1">Select service 01</option>
                                        <option value="2">Select service 02</option>
                                        <option value="3">Select service 03</option>
                                    </select>
                                </div>
                                @if($errors->has('service'))
                                <div class="error text-danger">{{ $errors->first('service') }}</div>
                                  @endif
                            </div>
                            <div class="col-md-12">
                                <div class="contact-one__input-box text-message-box">
                                    <textarea name="message" placeholder="Write Comment"></textarea>
                                </div>
                                @if($errors->has('message'))
                                <div class="error text-danger">{{ $errors->first('message') }}</div>
                                  @endif
                                  <div class="col-md-12">
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    @if($errors->has('g-recaptcha-response'))
                                    <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                                @endif
                                   </div>

                                  <button class=" nisoz-btn btn-yellow"  
                                  type="button"  onclick="onClick(event)"
                                 >Send Message</button>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        @push('script') 
       

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
