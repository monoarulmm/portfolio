<main class="main-page-wrapper">
  <!-- start slider area -->
  <div class="rn-slider-area">
      <div class="container">
          <div class="row row--30 pt--100 pt_sm--50">
              <div class="col-lg-6">
                  <div class="d-flex flex-wrap align-content-start h-100">
                      <div class="sticky-top-slider position-sticky sticky-top rbt-sticky-top-adjust-two">
                          <div class="banner-details-wrapper-sticky slide">

                           
                            <div class="thumbnail">
                                <img src="{{ 'storage/hero-images/' . $hero->image }}" alt="image">
                            </div>
                            <div class="banner-title-area pt--30">
                                <h1 class="title">Hi, I’m <span>{{ $hero->title }}</span><br><span
                                        class="span"> {{ $hero->line3 }}
                                        </span></h1>
                                <p class="disc">{{ $hero->description }}</p>
                            </div>
                            <div class="button-group text-center text-md-start pt--60 pt_md--40 pt_sm--40">
                              <a class="rn-btn"download="My Cv"
                              href="{{ '/storage/hero-images/' . $hero->download_cv }}"
                              title="ImageName">
                              <span>Download My CV</span></a>
                                <a class="rn-btn" href="{{url('contact')}}"><span>Hire Me</span></a>
                            </div>
                           
                   


                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="sticky-home-wrapper">

                      <!-- about area -->
                      <div class="rn-about-area section-height">
                          <div class="inner">
                              <h5 class="title">
                                  About Me
                              </h5>
                              <p class="about-disc">
                                {{$about->short_description}}
                              </p>
                              <p class="about-disc">
                                  I have three years of experience with HTML, CSS, JavaScript. And I can Design
                                  Your
                                  web application.
                              </p>
                          </div>
                      </div>
                      <!-- about area end -->
                      <!-- End blog area -->

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End slider area -->



  
 <!-- start of wpo-blog-section -->
 <section class="wpo-blog-section section-padding">
    <div class="container">
        <div class="wpo-blog-wrap wpo-blog-slide owl-carousel">

            @foreach ($blog as $blog)
                <div class="wpo-blog-item">
                    <div class="wpo-blog-img">
                        <img src="/storage/blog/{{ $blog->image }}" alt="product_image">
                    </div>
                    <div class="wpo-blog-text">
                    
                        <h2><a href="blog-single.html">{{ $blog->title }}</a></h2>
                        <a class="details" href="{{ url('blog_details', $blog->id) }}">Blog Details</a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <div class="shadow-shape">
        <svg width="1319" height="1567" viewBox="0 0 1319 1567" fill="none">
            <g filter="url(#filter0_f_39_3832)">
                <circle cx="803" cy="803" r="303" fill="#59C378" fill-opacity="0.5" />
            </g>
            <defs>
                <filter id="filter0_f_39_3832" x="0" y="0" width="1606" height="1606"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_3832" />
                </filter>
            </defs>
        </svg>
    </div>
</section>
<!-- end of wpo-blog-section -->


</main>