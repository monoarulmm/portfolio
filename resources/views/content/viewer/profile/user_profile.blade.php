@section('title', 'welc')

@extends('layouts.base')
@section('content')

{{-- 
      @foreach($data as $data) --}}

        <div class="main-page-wrapper">
            <div class="rn-header-image-area">
                @if ($user->profile->c_image)
                <div class=" bg_image h-100" style="background-image: url(../storage/cover_photo/{{ $user->profile->c_image }});">
                </div>
                @else
                <div class=" bg_image h-100" style="background-image: url({../assets/images/cover.jpg');">
                </div>
                
               @endif

            </div>
            <div class="rn-content-wrapper">
                <div class="container">
                    <div class="row padding-tb m_dec-top align-items-center d-flex">
                        <div class="col-lg-6">
                            <div class="header-left">
                                <div class="header-thumbnail">
                                    @if ($user->profile->p_image)
                                        <img style="width:150px; height:150px;"  class="img_size" src="/storage/profile_photo/{{ $user->profile->p_image }}"
                                            alt="product_image">
                                    @else
                                        <img src="{{asset('assets/images/profile.jpeg')}}" alt="profile_image">
                                    @endif
                                    {{-- <img class="img_size" src="/profile_photo/{{ $data->p_image }}" alt="product_image"> --}}
                                </div>
                                <div class="header-info-content">
                                 
                                        <h4 class="title">{{$user->name}}</h4>
                                 

                                    <div class="status-info"></div>
                                     @if ($user->profile->p_bio)
                                     <p class="title">{{ $user->profile->p_bio }}</p>
                                     @else
                                     <p class="title">Your Profile bio</p>
                                     @endif
                                


                                    <!-- social sharea area -->
                                    <div class="social-share-style-1 border-none mt--40">
                                        <ul class="social-share d-flex liststyle">
                                            <li class="facebook"><a href="{{$user->profile->socail_media_1}}"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-facebook">
                                                        <path
                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                        </path>
                                                    </svg></a>
                                            </li>
                                            <li class="instagram"><a href="{{$user->profile->socail_media_2}}"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-instagram">
                                                        <rect x="2" y="2" width="20" height="20"
                                                            rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5">
                                                        </line>
                                                    </svg></a>
                                            </li>
                                            <li class="linkedin"><a href="{{$user->profile->socail_media_3}}"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-linkedin">
                                                        <path
                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                        </path>
                                                        <rect x="2" y="9" width="4" height="12">
                                                        </rect>
                                                        <circle cx="4" cy="4" r="2"></circle>
                                                    </svg></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-right">
                                <ul class="rn-header-content">
                                    <li><span class="overhead">EMAIL</span>{{$user->email}}</li>
                                    @if ($user->profile->phone)
                                    <li><span class="overhead">PHONE</span>{{$user->profile->phone}}</li>
                                    @else
                                    <li><span class="overhead">PHONE</span>Your Phone</li>
                                    @endif
                                   
                                </ul>
                                <ul class="rn-header-content two">
                                    <li><span class="overhead">Setting & Privacy</span> <a href="{{route('profile.show')}}">Setting</a><br></li>
                                     @if ($user->profile->location)
                                       <li><span class="overhead">LOCATION</span>{{$user->profile->location}}</li>
                                    @else
                                    <li><span class="overhead">Location</span>Your Location</li>
                                    @endif
                               
                                </ul>
                                <ul class="rn-header-content two">

                               

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
 
    {{-- user --}}
    <div class="main-page-wrapper">
        <div class="rn-content-wrapper">
            <div class="container">

                <div class="row mt--40 tab-content-wrapper">
                    <div class="col-lg-2">
                        <div class="d-flex flex-wrap align-content-start h-100 w-100">
                            <div class="position-sticky content-wrapper sticky-top rbt-sticky-top-adjust-three w-100">
                                <ul class="nav tab-navigation-button tab-smlg flex-column nav-pills me-3" id="v-pills-tab"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link rn-nav" style="text-size:10px;" id="v-pills-settings-tabs" data-bs-toggle="tab" href="#v-pills-settings" role="tab" aria-selected="true">Edit Profie
                                            
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link rn-nav active" id="v-pills-home-tab" data-bs-toggle="tab"
                                            href="#v-pills-Javascript" role="tab" aria-selected="true">Create
                                            Post</a>
                                    </li>




                                    <li class="nav-item">
                                        <a class="nav-link rn-nav" id="v-pills-wordpress-tab" data-bs-toggle="tab"
                                            href="#v-pills-Wordpress" role="tab" aria-selected="true">My Post</a>
                                    </li>


                                  


                           


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">


                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                        <!-- Start News Area -->
                                        <div class="rn-blog-area" id="blog">
                                            <div class="container">

                                                @if (session()->has('success'))
                                                    <div class="alert alert-danger">
                                                        {{ session()->get('success') }}
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
                                                <div class="row">
                                                    <div data-aos-delay="600" class="col-lg-12 contact-input">
                                                        <div class="contact-form-wrapper ml--0">
                                                            <div class="introduce">
                                                                <form class=" row" action="{{ url('/update_product_confirm', $user->id) }}"
                                                                    method="POST" enctype="multipart/form-data">@csrf


                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="contact-name">Profile Photo
                                                                            </label>
                                                                            <input class="form-control form-control-lg"
                                                                                name="p_image" type="file">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="contact-phone">Cover Photo
                                                                            </label>
                                                                            <input class="form-control" name="c_image" i
                                                                                type="file">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="contact-name">Phone </label>
                                                                            <input class="form-control form-control-lg"
                                                                                name="phone" type="text">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="contact-phone">Location
                                                                            </label>
                                                                            <input class="form-control" name="location"
                                                                                type="text">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="contact-phone">Profile Bio
                                                                            </label>
                                                                            <input class="form-control" name="p_bio"
                                                                                type="text">
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="subject">Facebool Link</label>
                                                                            <input class="form-control form-control-sm"
                                                                                name="socail_media_1" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="subject">Instagram Link</label>
                                                                            <input class="form-control form-control-sm"
                                                                                name="socail_media_2" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="subject">Linkedin Link</label>
                                                                            <input class="form-control form-control-sm"
                                                                                name="socail_media_3" type="text">
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-lg-12">
                                                                        <button name="submit" type="submit"
                                                                            id="submit" class="rn-btn">
                                                                            <span>Save Changes</span>

                                                                        </button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ENd Mews Area -->
                                    </div>


                                    <div class="tab-pane fade  show active" id="v-pills-Javascript" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <!-- Start about Area -->
                                        <div id="about" class="rn-about-area">
                                            <div class="container">
                                              
                                                <div class="row">
                                                    <div data-aos-delay="600" class="col-lg-12 contact-input">
                                                        <div class="contact-form-wrapper ml--0">
                                                            <div class="introduce">
                                                                <form class=" row" action="{{ url('add_post') }}"
                                                                    method="POST" enctype="multipart/form-data">@csrf


                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="subject">Title</label>
                                                                            <input class="form-control form-control-sm"
                                                                                id="subject" name="title"
                                                                                type="text">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="contact-message">Description
                                                                            </label>
                                                                            <textarea name="description" id="contact-message" cols="30" rows="10"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="subject">Picture</label>
                                                                            <input class="form-control form-control-sm"
                                                                                name="image" type="file">
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-lg-12">
                                                                        <button name="submit" type="submit"
                                                                            class="rn-btn">
                                                                            <span>Submit</span>
                                                                        </button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End about Area -->
                                    </div>



                                    <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel"
                                        aria-labelledby="v-pills-wordpress-tab">
                                        <!-- Start Portfolio Area -->
                                     
                                        <div class="rn-portfolio-area" id="portfolio">
                                            <div class="container">
                                                <div class="row">
                                                    <div data-aos-delay="600" class="col-lg-12 contact-input">
                                                        <div class="contact-form-wrapper ml--0">
                                                            <div class="introduce">
                                                                <div class="header_section">
                                                                    @forelse ($post as $post)
                                                                        <div class="text-center  items-center  " style="margin-bottom: 20px;" >
                                                                            <img class=" m-auto items-center" style="width:700px; height:300px;"
                                                                                src="storage/post/{{ $post->image }}"
                                                                                alt="">
                                                                            <h3>Post : {{ $post->post_status }}</h3>
                                                                            <h5>Post title : {{ $post->title }}</h5>
                                                                            <p> Description :{{ $post->description }}
                                                                            </p>


                                                                            <a href="{{ url('delete_post', $post->id) }}"
                                                                                onclick="confirmation(event)" class="btn btn bg-danger ">Delete</a>

                                                                            <a href="{{ url('update_post', $post->id) }}"
                                                                                class="btn btn bg-primary">update</a>

                                                                        </div>
                                                                    @empty

                                                                    <div style="text-align:center; margin:auto; ">
                                                                        <p>Post Not Found</p>
                                                                    </div>
                                                                    @endforelse

                                                
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- End Contuct section -->

                                    </div>


                                 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 




    @include('sections.users.footer')
@endsection
