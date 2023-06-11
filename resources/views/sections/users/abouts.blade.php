    <!-- start of wpo-about-area -->
    <div class="wpo-about-area section-padding">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-5 col-md-12 col-sm-12">
                  <div class="wpo-about-exprience-wrap">
                      <div class="wpo-about-exprience">
                          <h2>{{$about->years}}</h2>
                          <span>Years of Experience</span>
                      </div>
                      <div class="client">
                          <h3><span class="odometer" data-count="{{$about->clients_satisfections}}">00</span>%</h3>
                          <p>Clients Satisfections</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 offset-lg-1 col-md-12 col-sm-12">
                  <div class="wpo-about-content">
                      <div class="wpo-about-title">
                          <h2>My Advantage</h2>
                          <p>{{$about->short_description}}</p>
                      </div>
                      <div class="wpo-about-funfact">
                          <div class="grid">
                              <div class="grid-inner">
                                  <h3><span class="odometer" data-count="{{$about->percent_1}}">00</span>%</h3>
                                  <p>{{$about->skill_1}}</p>
                              </div>
                          </div>
                          <div class="grid">
                              <div class="grid-inner">
                                  <h3><span class="odometer" data-count="{{$about->percent_2}}">00</span>%</h3>
                                  <p>{{$about->skill_2}}</p>
                              </div>
                          </div>
                          <div class="grid">
                              <div class="grid-inner">
                                  <h3><span class="odometer" data-count="{{$about->percent_3}}">00</span>%</h3>
                                  <p>{{$about->skill_3}}</p>
                              </div>
                          </div>
                          <div class="grid">
                              <div class="grid-inner">
                                  <h3><span class="odometer" data-count="{{$about->percent_4}}">00</span>%</h3>
                                  <p>{{$about->skill_4}}</p>
                              </div>
                          </div>
                          <div class="grid">
                              <div class="grid-inner">
                                  <h3><span class="odometer" data-count="{{$about->percent_5}}">00</span>%</h3>
                                  <p>{{$about->skill_5}}</p>
                              </div>
                          </div>
                          <div class="grid">
                              <div class="grid-inner">
                                  <h3><span class="odometer" data-count="{{$about->percent_6}}">00</span>%</h3>
                                  <p>{{$about->skill_6}}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="ab-shape">
          <svg width="995" height="1495" viewBox="0 0 995 1495" fill="none">
              <g opacity="0.3" filter="url(#filter0_f_39_4267)">
                  <circle cx="247.5" cy="747.5" r="247.5" fill="#FFE500" />
              </g>
              <defs>
                  <filter id="filter0_f_39_4267" x="-500" y="0" width="1495" height="1495"
                      filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                      <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4267" />
                  </filter>
              </defs>
          </svg>
      </div>
      <div class="ab-shape-s2">
          <svg width="1252" height="1901" viewBox="0 0 1252 1901" fill="none">
              <g opacity="0.15" filter="url(#filter0_f_39_4265)">
                  <circle cx="950" cy="950.004" r="450" />
              </g>
              <defs>
                  <filter id="filter0_f_39_4265" x="-0.00012207" y="0.00402832" width="1900" height="1900"
                      filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                      <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4265" />
                  </filter>
              </defs>
          </svg>
      </div>
      <div class="line-shape-1">
          <img src="{{asset('assets/images/about/shape1.png')}}" alt="">
      </div>
      <div class="line-shape-2">
          <img src="{{asset('assets/images/about/shape2.png')}}" alt="">
      </div>
  </div>
  <!-- end of wpo-about-area -->