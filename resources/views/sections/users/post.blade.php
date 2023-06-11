  <!-- protfolio area start -->
  <div class="wpo-protfolio-area section-padding" id="gallery">
      <div class="container">
          <div class="row">
              <div class="col col-xs-12 sortable-gallery">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h2 class="title">POST</h2>
                            </div>
                        </div>
                  <div class="gallery-container gallery-fancybox masonry-gallery row">


                      @foreach ($post as $post)
                          <div class="col-lg-6 col-md-6 col-12 custom-grid IllustAtor 3d Marketing wow zoomIn rn-portfolio"
                              data-wow-duration="2000ms">
                              <div class="">
                                  <div class="wpo-protfolio-single">
                                      <div class="wpo-protfolio-img">
                                          <img style="width: 700px; height:300px;" src="/storage/post/{{ $post->image }}" alt="image">
                                      </div>
                                      <div class="wpo-protfolio-text">
                                          <h2>{{ $post->name }}</h2>
                                          <span>{{ $post->title }}</span>
                                          <a href="{{ url('post_details', $post->id) }}">View Post</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach





                  </div>

                                               <div class="row mt--40">
                                                        <div class="col-12 text-center">
                                                            <a class="rn-btn" href="{{url('user/post')}}">More<i
                                                                    class="feather-loader"></i></a>
                                                        </div>
                                                    </div>
              </div>
          </div> <!-- end row -->
      </div>
  </div>

  <!-- start of wpo-site-footer-section -->
