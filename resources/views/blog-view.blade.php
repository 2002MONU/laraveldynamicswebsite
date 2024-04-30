@extends('layouts.app')
@section('title')
 Blog View
@endsection
@section('maincontent')

    <section class="page-header"  style="background-image:url({{asset('website-images/blogpage/'.$blogpage->image)}});background-size: cover;background-position:center; background-repeat: no-repeat;">
        <div class="page-header__shape3 wow slideInRight" data-wow-delay="300ms"></div><!-- /.page-header__shape3 -->
        <div class="container">
            <h2 class="page-header__title">{{$blogpage->heading}}</h2><!-- /.page-title -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__content">
                        <div class="blog-details__img">
                            <img src="{{asset('website-images/blogpage/'.$blogview->image)}}" alt="blog-banner">
                        </div><!-- details-image -->
                         
                        <h3 class="blog-details__title">{{$blogview->title}}</h3><!-- details-tiele -->
                        <p class="blog-details__text text-justify">
                            {{$blogview->description}}
                        </p>
                        {{-- <p class="blog-details__text text-justify">
                            Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor.
                            Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus.
                            Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc.
                            Sed vitae leo vitae nisl pellentesque semper.
                        </p> --}}
                    </div><!-- details-content -->
                </div>
                <div class="col-xl-4 col-lg-5 wow fadeInRight" data-wow-delay="400ms">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest posts</h3>
                            <ul class="sidebar__post__list list-unstyled">
                                @foreach ($blog as $item)
                                <li>
                                    <div class="sidebar__post__image">
                                        <img src="{{asset('website-images/blogpage/'.$item->image)}}" alt="blog-img">
                                    </div>
                                    <div class="sidebar__post__content">
                                         <h3 class="sidebar__post__content__title"><a href="{{url('blog-view/'.$item->slug)}}">{{$item->title}}</a></h3>
                                    </div>
                                </li> 
                                @endforeach
                               
                                {{-- <li>
                                    <div class="sidebar__post__image">
                                        <img src="{{url('assets/images/service-1-4.jpg')}}" alt="">
                                    </div>
                                    <div class="sidebar__post__content">
                                        <h3 class="sidebar__post__content__title"><a href="#">Aliquam tellus nulla sollicitudin at</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post__image">
                                        <img src="{{url('assets/images/blog-1.jpg')}}" alt="">
                                    </div>
                                    <div class="sidebar__post__content">
                                        <h3 class="sidebar__post__content__title"><a href="#">Donec sit amet is lacinia nulla.</a></h3>
                                    </div>
                                </li> --}}
                            </ul>
                        </div><!-- latest-post-widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection