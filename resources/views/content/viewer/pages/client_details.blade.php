@section('title', 'welc')

@extends('layouts.base')
@section('content')


    <div class="main-page-wrapper">
        <div class="rn-header-image-area">
            <div class=" bg_image h-100" style="background-image: url(../storage/cover_photo/{{ $profile->p_image }});">
            </div>
        </div>
        <div class="rn-content-wrapper">
            <div class="container">
                <div class="row padding-tb m_dec-top align-items-center d-flex">
                    <div class="col-lg-6">
                        <div class="header-left">
                            <div class="header-thumbnail">
                                @if ($profile->p_image)
                                    <img style="width:150px; height:150px;" class="img_size" src="/storage/profile_photo/{{ $profile->p_image }}"
                                        alt="product_image">
                                @else
                                     <img src="{{asset('assets/images/profile.jpeg')}}" alt="profile_image">
                                @endif
                          
                            </div>
                            <div class="header-info-content">
                                @if ($profile->name)
                                    <h4 class="title">{{ $profile->name }}</h4>
                                @else
                                    <h4 class="title">Your Name</h4>
                                @endif

                                <div class="status-info"></div>
                                @if ($profile->p_bio)
                                    <p class="title">{{ $profile->p_bio }}</p>
                                @else
                                    <p class="title">Your Profile Bio </p>
                                @endif
                                <!-- social sharea area -->
                                <div class="social-share-style-1 border-none mt--40">
                                    <ul class="social-share d-flex liststyle">
                                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a>
                                        </li>
                                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
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
                                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
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
                                <li><span class="overhead">EMAIL</span>{{$profile->email}}</li>
                                @if ($profile->phone)
                                <li><span class="overhead">PHONE</span>{{$profile->phone}}</li>
                                @else
                               <li><span class="overhead">PHONE</span>Phone</li>
                                @endif
                              
                            </ul>
                            <ul class="rn-header-content two">
                           
                                @if ($profile->location)
                                <li><span class="overhead">Address</span>{{$profile->location}}</li>
                                @else
                               <li><span class="overhead">Address</span>Address</li>
                                @endif
                            </ul>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('sections.users.footer')
@endsection
