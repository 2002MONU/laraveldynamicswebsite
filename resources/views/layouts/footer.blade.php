<footer class="main-footer">
            <div class="main-footer__bg"></div>
            <div class="container">
                <div class="main-footer__top wow fadeInUp" data-wow-delay="100ms">
                    <a href="index-2.html" class="main-footer__logo">
                        <img src="{{asset('website-images/logoimage/'.$logo->logo)}}" alt="nisoz" height="34">
                    </a><!-- /.footer-logo -->
                    <div class="main-footer__social">
                        <a href="https://www.facebook.com/"><i class="fab fa-linkedin"></i></a>
                        <a href="https://youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.footer-social -->
                </div><!-- footer-top -->
                <div class="row">
                    <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="main-footer__navmenu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About Us</a></li>
                                <li><a href="{{url('blog')}}">Blog</a></li>
                                <li><a href="{{url('contant')}}">Contact Us</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-menu -->
                    </div>
                    <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="main-footer__navmenu">
                            <ul>
                                <!-- <li><a href="javascript:void(0);">Brands</a></li> -->
                                <li><a href="{{url('nrture')}}">Nrture</a></li>
                                <li><a href="javascript:void(0);">Xamine</a></li>
                                <li><a href="javascript:void(0);">Xplore</a></li>
                                <li><a href="javascript:void(0);">Innovate</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-menu -->
                    </div>
                    <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                        <div class="main-footer__about">
                            <p class="main-footer__about__text">62 View Mount Road, Wheelers Hill 3150 Victoria</p>
                            <ul class="main-footer__about__info">
                                <li><span class="fas fa-phone-square"></span><a href="tel:+61410104012">+{{$logo->phone}}</a></li>
                                <li><span class="fas fa-envelope"></span><a href="mailto:info@tretaillabs.com">{{$logo->email}}</a></li>
                            </ul>
                        </div><!-- /.footer-about -->
                    </div>
                    <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="500ms">
                        <div class="main-footer__newsletter">
                            <h5 class="main-footer__newsletter__text">Subscribe to get latest updates on daily basis</h5>
                            <form class="main-footer__email-box mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                                <div class="main-footer__email-input-box">
                                    <input type="email" placeholder="Email address" name="EMAIL">
                                </div>
                                <button type="submit" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Subscribe</span>
                                </button>
                            </form>
                            <div class="mc-form__response"></div>
                        </div><!-- /.footer-mailchimp -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.main-footer -->

        <section class="copyright text-center">
            <div class="container wow fadeInUp" data-wow-delay="500ms">
                <p class="copyright__text">© Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> by <a href="javascript:void(0);">tRetail Labs</a> <br>Design and Developed by <a href="https://www.thecolourmoon.com/" target="_blank">ColourMoon</a></p>
            </div><!-- /.container -->
        </section><!-- /.copyright -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="{{url('/')}}" aria-label="logo image"><img src="assets/images/logo-light.png"  alt="nisoz" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@tretaillabs.com">info@tretaillabs.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+9236809850">+61 410 104 012 </a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                <a href="https://youtube.com/"><i class="fab fa-youtube"></i></a>
                <a href="https://www.twitter.com/"><i class="fa-brands fa-square-x-twitter"></i></a>
                <a href="https://www.reddit.com/"><i class="fa-brands fa-reddit-alien"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="nisoz-btn">
                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                    <span class="nisoz-btn__text"><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <!-- back-to-top-start -->
    <!-- <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a> -->
    <a id="gototop">Go to Top</a>
    <!-- back-to-top-end -->


    <script src="{{url('assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{url('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{url('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{url('assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{url('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{url('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-circleType/jquery.circleType.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-lettering/jquery.lettering.min.js')}}"></script>
    <script src="{{url('assets/vendors/tilt/tilt.jquery.js')}}"></script>
    <script src="{{url('assets/vendors/wow/wow.js')}}"></script>
    <script src="{{url('assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{url('assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{url('../../../../../kit.fontawesome.com/0f23c2455c.js')}}" crossorigin="anonymous"></script>
    <!-- template js -->
    <script src="{{url('assets/js/nisoz.js')}}"></script>

    <script>
        var btn = $('#gototop');
            $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
            });

            btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
        });


    </script>

  <script>
    function validatePhoneNumber() {
    var phoneNumber = document.getElementById('phoneNumber').value;
    var phoneError = document.getElementById('phoneError');

    // Check if the input is a number
    if (isNaN(phoneNumber)) {
        phoneError.textContent = "Please enter numbers only.";
        return;
    }

    // Check if the input length is between 10 and 12
    if (phoneNumber.length < 10 || phoneNumber.length > 12) {
        phoneError.textContent = "Phone number should be between 10 and 12 digits.";
        return;
    }

    // If all conditions are met, clear any existing error message
    phoneError.textContent = "";
}
  </script>

    @stack('script')
</body>



</html>