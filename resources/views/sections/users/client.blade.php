  <!-- Start Cient Area -->
  <div id="client" class="rn-client-area rn-client-style-2 rn-section-gap section-separator">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                      class="section-title text-center">
                      <span class="subtitle">Visit my Client</span>
                      <h2 class="title">Our Trusted Client</h2>
                  </div>
                  <div class="skill-style-1">
                      <div class="client-card">

                          @foreach ($profile as $profile)
                              <!-- Start Single Brand  -->
                              <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                                  class="main-content">
                                  <div class="inner text-center">
                                      <div class="thumbnail">
                                          <a href="{{ url('client_details', $profile->id) }}">
                                            @if ($profile->p_image)
                                            <img style="width: 2000px; height:150px" class="img_size" src="/storage/profile_photo/{{ $profile->p_image }}"
                                                alt="profile_image">
                                          @else
                                             <img style="width: 2000px; height:150px" src="{{asset('assets/images/profile.jpeg')}}" alt="profile_image">
                                        @endif


                                      </div>
                                      <div class="seperator"></div>
                                      <div class="client-name"><span><a href="{{ url('client_details', $profile->id) }}">{{ $profile->name }}</a></span>
                                      </div>
                                  </div>
                              </div>
                              <!-- End Single Brand  -->
                          @endforeach


                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- end Cient Area -->
