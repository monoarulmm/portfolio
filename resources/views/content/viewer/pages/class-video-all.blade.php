@section('title', 'web')

@extends('layouts.base')
@section('content')





    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">



                <div class="col col-lg-8 col-12">
                    <div class="wpo-blog-content">
            
                     @if(count($classes)>0)
                        @foreach ($classes as $allclass)
                            <div class="post format-video">
                                <div class="entry-media video-holder">


                                    <img style=" height:330px;" src="/storage/classes/{{ $allclass->image }}" alt="image">
                                    <a href="https://www.youtube.com/embed/{{ $allclass->video_link }}" class="video-btn"
                                        data-type="iframe">
                                        <i class="fi flaticon-play"></i>
                                    </a>
                                </div>

                                <div class="entry-details">
                                    <h3><a href="blog-single.html">{{ $allclass->title }}</a>

                                        <h3>{{ $allclass->cetagory }}</a>
                                            <h3>{{ $allclass->name }}</a>
                                            </h3>
                                            <p>{{ $allclass->description }}</p>

                                </div>
                            </div>
                            @endforeach
                            {{-- {{ $classes->links('vendor.pagination.bootstrap-5') }} --}}
                            {{-- {{$classes->links()}} --}}

                        @else
                            <div style="text-align: center; margin:auto; ">
                                <p>Service Not Found</p>
                            </div>
                        @endif

                        {{-- <span style="padding-top: 20px">
                            {!! $service->withQueryString()->links('pagination::bootstrap-5') !!}
                        </span> --}}

                    </div>
                    <div class="row mt--40">
                        <div class="col-12 text-center">
                            <a class="rn-btn" href="{{url('user/media')}}">More<i
                                    class="feather-loader"></i></a>
                        </div>
                    </div>
                </div>

               

                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget search-widget">
       
                            <form action="{{ url('service_search') }}" method="get">@csrf
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Video.." name="search">
                                    <button type="submit"><i class="ti-search"></i></button>


                                </div>
                            </form>
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


                        <div class="widget tag-widget ">
                            <h3>Services</h3>
                            <ul>
                                @foreach ($services as $service)
                                    <li><a href="{{ url('service_details', $service->id) }}">{{ $service->name }}</a></li>
                                @endforeach


                            </ul>


                        </div>
                    </div>
                </div>


            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->





@endsection
