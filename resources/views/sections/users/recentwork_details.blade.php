 <!-- wpo-project-single-area start -->
 <div class="wpo-project-single-area section-padding">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-10 col-12">
                 <div class="wpo-project-single-wrap">
                     <div class="wpo-project-single-item">
                         <div class="row align-items-center">
                             <div class="col-lg-7">
                                 <div class="wpo-project-single-title">
                                     <h3>{{ $recentwork->title }}</h3>
                                 </div>
                                 <p>
                                     {{ $recentwork->description }}

                                 </p>
                             </div>
                             <div class="col-lg-5">
                                 <div class="wpo-project-single-content-des-right">
                                     <ul>
                                         <li>Location :<span>{{ $recentwork->location }} </span></li>
                                         <li>Client :<span>{{ $recentwork->client }}</span></li>
                                         <li>Architect :<span>{{ $recentwork->architect }}</span></li>
                                         <li>Project Type :<span>{{ $recentwork->cetagory }}</span></li>
                                         <li>Duration :<span>{{ $recentwork->duration }}</span></li>
                                         <li>Completion :<span>{{ $recentwork->completion }}</span></li>

                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="wpo-project-single-main-img owl-carousel mt-2">
                             <img src="/storage/recentwork/image/{{ $recentwork->image }}" alt="image">
                             <img src="/storage/recentwork/image1/{{ $recentwork->image1 }}" alt="image">


                         </div>
                     </div>
                     <div class="wpo-project-single-item list-widget">
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="wpo-project-single-title">
                                     <h3>Our Strategies</h3>
                                 </div>
                                 <p>Massa volutpat odio facilisis purus sit elementum. Non, sed velit dictum
                                     quam. Id
                                     risus pharetra est, at rhoncus, nec ullamcorper tincidunt. Id aliquet duis
                                     sollicitudin diam.</p>
                                 <ul>
                                     <li>Non saed velit dictum quam risus pharetra esta.</li>
                                     <li>Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt.</li>
                                     <li>Hac nibh fermentum nisi, platea condimentum cursus.</li>
                                     <li>Massa volutpat odio facilisis purus sit elementum.</li>
                                     <li>Elit curabitur amet risus bibendum.</li>
                                 </ul>
                             </div>
                             <div class="col-lg-6">
                                 <div class="wpo-project-single-item-quote">
                                     <p>"Amazing looking theme and instantly turns your application into a great
                                         looking one. Really shows that pro_ fessionals built this theme up. Very
                                         happy with the way the theme looks ."</p>
                                     <span>Robert - <span>Yellow Theme</span></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="wpo-project-single-item">
                         <div class="wpo-project-single-title">
                             <h3>Our approach</h3>
                         </div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat suspendisse aenean
                             tellus augue morbi risus. Sit morbi vitae morbi sed urna sed purus. Orci facilisi
                             eros sed pellentesque. Risus id sed tortor sed scelerisque. Vestibulum elit
                             elementum, magna id viverra non, velit. Pretium, eros, porttitor fusce auctor vitae
                             id. Phasellus scelerisque nibh eleifend vel enim mauris purus. Rutrum vel sem
                             adipiscing nisi vulputate molestie scelerisque molestie ultrices. Eu, fusce
                             vulputate diam interdum morbi ac a.</p>
                     </div>
                     <div class="wpo-project-single-gallery">
                         <div class="row mt-4">
                             <div class="col-md-6 col-sm-6 col-12">
                                 <div class="wpo-p-details-img">
                                     <img src="/storage/recentwork/image2/{{ $recentwork->image2 }}" alt="image">
                                 </div>
                             </div>
                             <div class="col-md-6 col-sm-6 col-12">
                                 <div class="wpo-p-details-img">
                                     <img src="/storage/recentwork/image3/{{ $recentwork->image3 }}" alt="image">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="wpo-project-single-item list-widget">
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="wpo-project-single-title">
                                     <h3>Resieved goals</h3>
                                 </div>
                                 <ul>
                                     <li>Non saed velit dictum quam risus pharetra esta.</li>
                                     <li>Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt.</li>
                                     <li>Hac nibh fermentum nisi, platea condimentum cursus.</li>
                                     <li>Massa volutpat odio facilisis purus sit elementum.</li>
                                 </ul>
                             </div>
                             <div class="col-lg-6 list-widget-s">
                                 <div class="wpo-project-single-title">
                                     <h3>Results</h3>
                                 </div>
                                 <ul>
                                     <li>Mauris dignissim blandit cursus imperdiet accumsan lorem.</li>
                                     <li>Nam id in non sed cras purus nunc et.</li>
                                     <li>Mauris orci, cursus nisl odio est adipiscing gravida magna eget.</li>
                                     <li>Quis mauris vel felis convallis nulla dignissim.</li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="wpo-project-single-item">
                         <div class="wpo-project-single-title">
                             <h3>Related Projects</h3>
                         </div>



                         <div class="wpo-project-area-s2">
                             <div class="wpo-project-wrap">
                                 <div class="row">
                                     <div class="col col-lg-4 col-md-6 col-12">
                                         <div class="wpo-project-item">
                                             <div class="wpo-project-img">
                                                 <img src="/storage/recentwork/image4/{{ $recentwork->image4 }}"
                                                     alt="image">
                                             </div>
                                             <div class="wpo-project-text">
                                                 <h2><a href="portfolio-single.html">Arkio - Architecture &
                                                         Interior WordPress Theme</a></h2>
                                                 <span>Architecture / Business</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col col-lg-4 col-md-6 col-12">
                                         <div class="wpo-project-item">
                                             <div class="wpo-project-img">
                                                 <img src="/storage/recentwork/image5/{{ $recentwork->image5 }}"
                                                     alt="image">
                                             </div>
                                             <div class="wpo-project-text">
                                                 <h2><a href="portfolio-single.html">Follio - Multipurpose
                                                         Portfolio HTML5 Template</a></h2>
                                                 <span>Web Design</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col col-lg-4 col-md-6 col-12">
                                         <div class="wpo-project-item">
                                             <div class="wpo-project-img">
                                                 <img src="/storage/recentwork/image6/{{ $recentwork->image6 }}"
                                                     alt="image">
                                             </div>
                                             <div class="wpo-project-text">
                                                 <h2><a href="portfolio-single.html">Elito - Creative Portfolio
                                                         HTML5 Template</a></h2>
                                                 <span>Website / Creative</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="wpo-project-single-item">
                         <div class="wpo-project-contact-area">
                             <div class="wpo-contact-title">
                                 <h2>Have project in mind? Let's discuss</h2>
                                 <p>Get in touch with us to see how we can help you with your project</p>
                             </div>
                             @if (session()->has('message'))
                                 <div class="alert alert-success">
                                     {{ session()->get('message') }}
                                 </div>
                             @endif
                             <div class="wpo-contact-form-area">
                                 <form method="post" action="{{ route('contact.send.project') }}">@csrf
                                     <div class="row">
                                         <div class="col col-lg-6 col-md-6 col-12">
                                             <input type="text" class="form-control" name="name" id="name"
                                                 placeholder="Your Name*">
                                         </div>
                                         <div class="col col-lg-6 col-md-6 col-12">
                                             <input type="email" class="form-control" name="email" id="email"
                                                 placeholder="Your Email*">
                                         </div>
                                         <div class="col col-lg-12 col-12">
                                             <select name="subject" class="form-control">
                                                 @foreach ($services as $service)
                                                     <option value="{{ $service->name }}">{{ $service->name }}
                                                     </option>
                                                 @endforeach
                                             </select>
                                         </div>
                                         <div class="fullwidth col col-lg-12 col-12">
                                             <textarea class="form-control" name="msg" id="note" placeholder="Message..."></textarea>
                                         </div>
                                     </div>
                                     <div class="submit-area">
                                         <button type="submit" class="theme-btn-s2">Send Massege</button>
                                     </div>

                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- wpo-service-single-area end -->

 <!-- wpo-partners-area-start -->
 <section class="partners-section">
     <h2 class="hidden">partner</h2>
     <div class="container">
         <div class="row">
             <div class="col col-xs-12">
                 <div class="partner-grids partners-slider owl-carousel clearfix">
                     <div class="grid">
                         <img src="assets/images/partners/1.png" alt="">
                     </div>
                     <div class="grid">
                         <img src="assets/images/partners/2.png" alt="">
                     </div>
                     <div class="grid">
                         <img src="assets/images/partners/3.png" alt="">
                     </div>
                     <div class="grid">
                         <img src="assets/images/partners/4.png" alt="">
                     </div>
                 </div>
             </div>
         </div>
     </div> <!-- end contianer -->
 </section>
 <!-- partners-area-end -->
