@extends('layouts.app')
@section('title')
 Blog
@endsection
@section('maincontent')
    <section class="page-header"  style="background-image:url({{asset('website-images/blogpage/'.$blogpage->image)}});background-size: cover;background-position:center; background-repeat: no-repeat;">
        <div class="page-header__shape3 wow slideInRight" data-wow-delay="300ms"></div><!-- /.page-header__shape3 -->
        <div class="container">
            <h2 class="page-header__title">{{$blogpage->heading}}</h2><!-- /.page-title -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <div class="blog-page">
            <div class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="{{asset('website-images/blogpage/'.$blog->image)}}" alt="Five ways that can develop your business">
                                <a href="{{url('blog-view/'.$blog->slug)}}"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <h3 class="blog-one__title">
                                    <a href="{{url('blog-view/'.$blog->slug)}}">{{$blog->title}}</a>
                                </h3><!-- /.blog-title -->
                                <a href="{{url('blog-view/'.$blog->slug)}}" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1.jpg" alt="Five ways that can develop your business">
                                <a href="blog-view.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <h3 class="blog-one__title">
                                    <a href="blog-view.html">Five ways that can develop your business</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-view.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1.jpg" alt="Five ways that can develop your business">
                                <a href="blog-view.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <h3 class="blog-one__title">
                                    <a href="blog-view.html">Five ways that can develop your business</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-view.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__item">
                            <div class="blog-one__image">
                                <img src="assets/images/blog-1.jpg" alt="Five ways that can develop your business">
                                <a href="blog-view.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-one__content">
                                <h3 class="blog-one__title">
                                    <a href="blog-view.html">Five ways that can develop your business</a>
                                </h3><!-- /.blog-title -->
                                <a href="blog-view.html" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Read More<span class="icon-right-arrow"></span></span>
                                </a><!-- /.blog-read-more -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div> --}}
                </div>
            </div>
        </div>
   <!-- Contact End -->
   
   @endsection