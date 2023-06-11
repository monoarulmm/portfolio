@section('title', 'recentwork')

@extends('layouts.base')
@section('content')








<!-- wpo-project-single-area start -->
<div class="wpo-project-single-area section-padding " id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="wpo-project-single-wrap">
                    <div class="wpo-project-single-item">
                     
                                    <div class="col-lg-12">
                                        <div class="section-title text-center">
                                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                                            <h2 class="title">Portfolio</h2>
                                        </div>
                                    </div>
                                </div>
                        <div class="wpo-project-area-s2">
                            <div class="wpo-project-wrap ">
                                <div class="row">

                                    @foreach ($recentworks as $recentwork)
                                        <div style="margin-top:50px;" class="col col-lg-4 col-md-6 col-12 rn-service ">
                                            <div class="wpo-project-item">
                                                <div class="wpo-project-img">
                                                    <img style="width: 750px; height:250px;" src="/storage/recentwork/work/{{ $recentwork->work }}"
                                                        alt="">
                                                </div>
                                                <div class="wpo-project-text">
                                                    <h2><a href="{{ url('recentwork_details', $recentwork->id) }}">
                                                            {{ $recentwork->title }}</a></h2>
                                                    <span>{{ $recentwork->cetagory }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                               </div>
                               <div class="pagination-wrapper pagination-wrapper-left">
                                {{ $recentworks->links('vendor.pagination.bootstrap-5') }}
                            </div>
                
                               
                               

    </div>
</div>
<!-- wpo-service-single-area end -->



   


@endsection
