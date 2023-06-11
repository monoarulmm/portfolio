    <!-- Start Service Area -->
    <div class="rn-service-area rn-section-gap section-separator" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"
                        data-aos-once="true">
                        <span class="subtitle">Features</span>
                        <h2 class="title">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt_md--10 mt_sm--10">

                @foreach ($cetagory as $cetagory)
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"
                        class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">

                                    <i data-feather="{{ $cetagory->cetagory_icon }}"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a
                                            href="{{ url('cetagory_details', $cetagory->id) }}">{{ $cetagory->cetagory_name }}</a>
                                    </h4>
                                    <p class="description"> {{ $cetagory->short_description }}
                                    </p>
                                    <a class="read-more-button" href="{{ url('cetagory_details', $cetagory->id) }}">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <a class="over-link" href="{{ url('cetagory_details', $cetagory->id) }}"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                @endforeach
            </div>

            
                                                  <div class="row mt--40">
                                                        <div class="col-12 text-center">
                                                            <a class="rn-btn" href="{{url('user/cetagory')}}">More<i
                                                                    class="feather-loader"></i></a>
                                                        </div>
                                                    </div>
        </div>
    </div>
    <!-- End Service Area  -->
