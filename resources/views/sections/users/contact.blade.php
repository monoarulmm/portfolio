    <!-- start wpo-contact-pg-section -->
    <section class="wpo-contact-pg-section section-padding">

       
      

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">

            <div class="row">
                <div class="col col-lg-10 offset-lg-1">
                    <div class="office-info">
                        <div class="row">
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <i class="fi flaticon-location"></i>
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Address</h2>
                                        <p>Sadar,Dinajpur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <i class="fi flaticon-mail"></i>
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Email Us</h2>
                                        <p>monoartasik.cse@gmail.com</p>
                                        <p>monoarulmonoar991@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <i class="fi flaticon-phone-call"></i>
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Call Now</h2>
                                        <p>+880 1308151991</p>
                                        <p>+880 1519610785</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-contact-title">
                        <h2>Have Any Question?</h2>
                        <p>It is a long established fact that a reader will be distracted
                            content of a page when looking.</p>
                    </div>

                    <div class="wpo-contact-form-area">
                        <form method="post" action="{{ route('send.message') }}" enctype="multipart/form-data">@csrf
                            <div>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Your Name*">

                                @error('name')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email*">
                                @error('email')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="text" class="form-control" name="address" id="adress"
                                    placeholder="Address">
                                @error('address')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                             
                                <input type="number" class="form-control" name="phone" id="adress"
                                    placeholder="Phone">

                                @error('phone')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="fullwidth">
                                <textarea class="form-control" name="msg" id="note" placeholder="Message..."></textarea>
                                @error('msg')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn-s2">Get in Touch</button>
                              
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div> <!-- end container -->

        <div class="shape-1">
            <svg width="1038" height="938" viewBox="0 0 1038 938" fill="none">
                <g opacity="0.5" filter="url(#filter0_f_39_4392)">
                    <circle cx="290.5" cy="282.5" r="247.5"></circle>
                </g>
                <defs>
                    <filter id="filter0_f_39_4392" x="-457" y="-465" width="1495" height="1495"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                        <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4392"></feGaussianBlur>
                    </filter>
                </defs>
            </svg>
        </div>
    </section>
    <!-- end wpo-contact-pg-section -->

    <!--  start wpo-contact-map -->
    <section class="wpo-contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="wpo-contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=yN1W1gSTKid3EhdB6"
                {{-- https://goo.gl/maps/ --}}
                allowfullscreen></iframe>

                
        </div>
    </section>
    <!-- end wpo-contact-map -->
