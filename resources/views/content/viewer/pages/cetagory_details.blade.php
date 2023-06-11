@section('title', 'web')
<base href="/public">
@extends('layouts.base')
@section('content')











    <!-- wpo-service-single-area start -->
    <div class="wpo-service-single-area section-padding">
        <div class="container">
            <div class="row">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-lg-8 col-12">
                    <div class="wpo-service-single-wrap">
                        <div class="wpo-service-single-item">
                            <div class="wpo-service-single-main-img">
                                <img class="img_size" src="/storage/cetagory/image/{{ $cetagory->image }}" alt="image">
                            </div>
                            <div class="wpo-service-single-title">
                                <h3>{{ $cetagory->cetagory_name }}</h3>
                            </div>
                            <p>{{ $cetagory->short_description }}</p>
                            <p>{{ $cetagory->description }}</p>

                            <div class="row mt-4">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="wpo-p-details-img">
                                        <img class="img_size" src="/storage/cetagory/image1/{{ $cetagory->image1 }}"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="wpo-p-details-img">
                                        <img class="img_size" src="/storage/cetagory/image2/{{ $cetagory->image2 }}"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-service-single-item list-widget">
                            <div class="wpo-service-single-title">
                                <h3>Our Capabilities</h3>
                            </div>
                            <p>{{ $cetagory->capabilities }}</p>
                            <ul>
                                <li>{{ $cetagory->line }}</li>
                                <li>{{ $cetagory->line1 }}</li>
                                <li>{{ $cetagory->line2 }}</li>
                                <li>{{ $cetagory->line3 }}</li>
                                <li>{{ $cetagory->line4 }}</li>

                            </ul>
                        </div>

                        <div class="wpo-service-single-item">
                            <div class="wpo-service-single-title">
                                <h3>Our approach</h3>
                            </div>
                            <p>{{ $cetagory->approach }}</p>
                        </div>
                        <div class="wpo-service-single-item list-widget">
                            <div class="wpo-service-single-title">
                                <h3>Our Work Process</h3>
                            </div>
                            <p>{{ $cetagory->workprocess }}</p>
                            <ul>
                                <li>{{ $cetagory->line5 }}</li>
                                <li>{{ $cetagory->line6 }}</li>
                                <li>{{ $cetagory->line7 }}</li>
                                <li>{{ $cetagory->line8 }}</li>
                                <li>{{ $cetagory->line9 }}</li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-12">
                    <div class="blog-sidebar">

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


                    </div>
                </div>


            </div>
        </div>
    </div>






@endsection
