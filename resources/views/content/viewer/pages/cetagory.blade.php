@section('title', 'cetagory')

@extends('layouts.base')
@section('content')









    <!-- Start News Area -->
    <div class="rn-cetagory-area rn-section-gap section-separator" id="cetagory">
        <div class="container">
         
            <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                @foreach ($cetagories as $cetagory)
                    <!-- Start Single cetagory -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                        class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-cetagory" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img style="width:750px; height:250px;" src="/storage/cetagory/image/{{ $cetagory->image }}" alt="image">
                                        {{-- <img style="width:750px; height:250px;" src="/storage/cetagory/{{ $cetagory->image }}"
                                            alt="product_image"> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="meta">
                                            <span>{{ $cetagory->short_description }}</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="{{ url('cetagory_details', $cetagory->id) }}">{{ $cetagory->cetagory_name }}
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single cetagory -->
                @endforeach
            </div>

            <div class="pagination-wrapper pagination-wrapper-left">
                {{ $cetagories->links('vendor.pagination.bootstrap-5') }}
            </div>



        </div>
    </div>


@endsection
