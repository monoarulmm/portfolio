@section('title', 'blog_details')

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
                                <img src="/storage/blog/{{ $blog->image }}" alt>
                            </div>
                            <h2>{{ $blog->title }}</h2>
                            <p>{{ $blog->description }}</p>
                        </div>
                    </div>

                </div>




                <div class="col col-lg-4">
                    <div class="blog-sidebar">
{{--                         
                        <div class="widget about-widget">
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
                        <h3 class="mt-5 mb-5">Any Question with Contact me</h3>



                        <div class="introduce">


                            <form method="post" action="{{ route('contact.send') }}" enctype="multipart/form-data"
                                class=" row">
                                @csrf


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name</label>
                                        <input class="form-control form-control-lg" name="name" type="text">
                                        @error('name')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-phone">Phone Number</label>
                                        <input class="form-control" name="phone" type="text">
                                        @error('phone')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-email">Email</label>
                                        <input class="form-control form-control-sm" name="email" type="email">
                                        @error('email')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">subject</label>
                                        <input class="form-control form-control-sm" name="subject" type="text">
                                        @error('subject')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Your Message</label>
                                        <textarea cols="30" rows="10" name="msg"></textarea>
                                        @error('msg')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    {{-- <button type="submit" class="theme-btn-s2">Get in Touch</button> --}}
                                    <button type="submit" class="rn-btn">
                                        <span>SEND MESSAGE</span>
                                        <i data-feather="arrow-right"></i>
                                    </button>
                                </div>
                            </form>





                        </div>





                        <div class="widget tag-widget ">
                            <h3>Services</h3>
                            <ul>
                                @foreach ($services as $service)
                                    <li><a href="{{ url('service_details', $service->id) }}">{{ $service->name }}</a>
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
