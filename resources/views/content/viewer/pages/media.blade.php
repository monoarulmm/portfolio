@section('title', 'media')

@extends('layouts.base')
@section('content')


<main class="main-page-wrapper">
  
    <!-- Start bread vrumb area -->
    <div class="breadcrumb-area rn-section-gap breadcrumb-style-one">
      <div class="plr--85">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-inner">
                      <h1 class="title">Video Popup</h1>
                      <form action="{{ url('search') }}" method="get">@csrf
                      <ul class="page-list">
                      <input type="search" name="search"  placeholder="Search.." >
                                {{-- <input type="text" class="form-control" placeholder="Search Video.." name="search"> --}}
                       <button type="submit"><i class="ti-search"></i></button>
                      </ul>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Start bread vrumb area -->

  <div class="rn-video-popup-area rn-section-gapBottom bg_color--1">
      <div class="container">
          <div class="row">
            
        

            @forelse ($classes as $allclass)

              <!-- Start Single Video Button  -->
              <div class="col-lg-4 col-md-6 col-12 mt-3">
                  <div class="thumbnail position-relative">
                      <img class="w-100" src="/storage/classes/{{ $allclass->image }}" alt="image"">
                      <a class="video-play-button" href="https://www.youtube.com/embed/{{ $allclass->video_link }}">
                          <span></span>
                      </a>
                      <h4>{{$allclass->title}}</h4>
                      <div class="video-overlay video-overlay">
                          <a class="video-overlay-close">×</a>
                      </div>
                  </div>
              </div>
              <!-- End Single Video Button  -->

           
              @empty
              <div style="text-align: center; margin:auto; ">
                  <p>Service Not Found</p>
              </div>
          @endforelse 



                   

          {{-- @foreach ($classes as $allclass)

          <!-- Start Single Video Button  -->
          <div class="col-lg-4 col-md-6 col-12 mt-3">
              <div class="thumbnail position-relative">
                  <img class="w-100" src="/storage/classes/{{ $allclass->image }}" alt="image"">
                  <a class="video-play-button" href="https://www.youtube.com/embed/{{ $allclass->video_link }}">
                      <span></span>
                  </a>
                  <h4>{{$allclass->title}}</h4>
                  <div class="video-overlay video-overlay">
                      <a class="video-overlay-close">×</a>
                  </div>
              </div>
          </div>
          <!-- End Single Video Button  -->

    
      @endforeach --}}

      {{-- <div class="pagination-wrapper pagination-wrapper-left">
        {{ $classes->links('vendor.pagination.bootstrap-5') }}
    </div> --}}

   

          </div>
      </div>
  </div>
</main>

@endsection
