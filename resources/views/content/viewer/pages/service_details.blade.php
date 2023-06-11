@section('title', 'web')
<base href="/public">
@extends('layouts.base')
@section('content')




    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="/storage/service/{{ $services->image }}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li></li>
                                    <li><i class="fi flaticon-comment-white-oval-bubble"></i>{{$services->name}} </li>
                                </ul>
                            </div>
                            <h2>{{$services->title}} </h2>
                            <p>{{$services->description}} </p>

                            <div class="entry-meta">
                                <ul>
                                    <li><a href="{{ url('user/media') }}" class="btn btn-primary" >All_Video</a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">


                        {{-- <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/mono.jpg') }}" alt="mono">
                            </div>
                            <h4>Monoar</h4>
                            <p>Hi! I am Diploma Engineering Department of Computer</p>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="https://www.facebook.com/Monoarull"><i class="ti-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/MONOARTASIK"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/monoarul-islam-625a70278/"><i
                                                class="ti-linkedin"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCBm5lsACJDC74BwkjJwn0dw"><i
                                                class="ti-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="aw-shape">
                                <img src="assets/images/blog/ab.png" alt="">
                            </div>
                        </div> --}}

                           <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="/storage/home/{{ $home->image }}" alt="mono">
                            </div>
                            <h4>{{$home->name}}</h4>
                            <p>{{$hero->description}}</p>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="{{$home->socail_media_1}}"><i class="ti-{{$home->icon1}}"></i></a></li>
                                    <li><a href="{{$home->socail_media_2}}"><i class="ti-{{$home->icon2}}-alt"></i></a></li>
                                    <li><a href="{{$home->socail_media_3}}"><i
                                                class="ti-{{$home->icon3}}"></i></a></li>
                                    <li><a href="{{$home->socail_media_4}}"><i
                                                class="ti-{{$home->icon4}}"></i></a></li>
                                    <li><a href="{{$home->socail_media_5}}"><i
                                                class="ti-{{$home->icon5}}"></i></a></li>
                                </ul>
                            </div>
                            <div class="aw-shape">
                                <img src="{{asset('assets/images/blog/ab.png')}}" alt="">
                            </div>
                        </div>


                        <div class="widget category-widget">
                            <h3>Categories</h3>

                            <ul>
                                @foreach ($cetagories as $cetagory)
                                    <li><a
                                            href="{{ url('cetagory_details', $cetagory->id) }}">{{ $cetagory->cetagory_name }}</a>
                                    </li>
                                @endforeach
                            </ul>


                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->



@endsection
