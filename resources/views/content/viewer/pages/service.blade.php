@section('title', 'service')

@extends('layouts.base')
@section('content')










    <!-- Start Portfolio Area -->
   <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="section-title text-center">
                       <h2 class="title">Services</h2>
                   </div>
               </div>
           </div>

           <div class="row row--25 mt--10 mt_md--10 mt_sm--10">

            @foreach ($services as $service)
                <!-- Start Single Portfolio -->
                <div
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ url('service_details', $service->id) }}">
                                    <img class="img_size" src="/storage/service/{{ $service->image }}"
                                        alt="service_image">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="{{ url('service_details', $service->id) }}">{{ $service->cetagory }}</a>
                                    </div>
                                    <div class="meta">
                                        <span><a href="{{ url('service_details', $service->id) }}"><i class="feather-heart"></i></a>
                                            750</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{ url('service_details', $service->id) }}">{{ $service->name }}
                                        <i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->
            @endforeach


        </div>

        <div class="pagination-wrapper pagination-wrapper-left">
            {{ $services->links('vendor.pagination.bootstrap-5') }}
        </div>
       </div>
   </div>
   <!-- End portfolio Area -->





   



@endsection
