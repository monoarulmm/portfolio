<div>
    <!-- Start Testimonia Area  -->
    <div class="rn-testimonial-area rn-section-gap section-separator" id="architect">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">What Clients Say</span>
                        <h2 class="title">Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-activation testimonial-pb mb--30">

                        @foreach ($testimonial as $testimonial)
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="/storage/testimonial/{{ $testimonial->mentor_image }}"
                                                alt="product_image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Rainbow-Themes</span>
                                            <h3 class="title">{{ $testimonial->mentor_name }}</h3>
                                            <span class="designation">{{ $testimonial->mentor_bio }}</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">{{ $testimonial->cetagory }}</h3>
                                                <span class="date">{{ $testimonial->cetagory_bio }}</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{asset('assets/images/icons/rating.png')}}" alt="rating-image">
                                                <img src="{{asset('assets/images/icons/rating.png')}}" alt="rating-image">
                                                <img src="{{asset('assets/images/icons/rating.png')}}" alt="rating-image">
                                                <img src="{{asset('assets/images/icons/rating.png')}}" alt="rating-image">
                                                <img src="{{asset('assets/images/icons/rating.png')}}" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            {{ $testimonial->cetagory_short_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonia Area  -->
</div>
