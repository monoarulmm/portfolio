 <!-- Rn footer area Start -->
 <div id="footer" class="rn-footer-area footer-style-2 rn-section-gapTop section-separator">
     <div class="container pb--80 pb_sm--40 plr_sm--20">
         <div class="row">
             <div class="col-xl-3 col-12 col-lg-3 col-md-6 col-sm-6 col-12">
                 <div class="logo-thumbnail">
                     <a href="#"><img src="/storage/home/{{ $home->logo }}"
                             alt="logo-image"></a>
                 </div>
                 <div class="social-icone-wrapper">
                     <ul class="social-share d-flex liststyle">
                         <li class="facebook"><a href="{{$home->socail_media_1}}"><i data-feather="{{$home->icon1}}"></i></a>
                         </li>
                         
                         <li class="instagram"><a href="{{$home->socail_media_1}}"><i data-feather="{{$home->icon2}}"></i></a>
                         </li>
                         <li class="linkedin"><a href="{{$home->socail_media_1}}"><i data-feather="{{$home->icon3}}"></i></a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-sl-3 col-12 mt_sm--20 col-lg-3 col-md-6 col-sm-6 col-12">
                 <div class="menu-wrapper">
                     <div class="menu-title">
                         <h6>Categories</h6>
                     </div>
                     <ul class="menu-footer">
                         @foreach ($cetagory as $cetagory)
                             <li><a
                                     href="{{ url('cetagory_details' . $cetagory->id) }}">{{ $cetagory->cetagory_name }}</a>
                             </li>
                         @endforeach
                     </ul>
                 </div>
             </div>
             <div class="col-sl-3 col-12 mt_sm--20 col-lg-3 col-md-6 col-sm-6 col-12">
                 <div class="menu-wrapper">
                     <div class="menu-title">
                         <h6>Resources</h6>
                     </div>
                     <ul class="menu-footer">
                         <li><a href="#">Support</a></li> 
                         <li><a href="#">Terms of service</a></li>
                    
                     </ul>
                 </div>
             </div>
             <div class="col-sl-3 col-12 mt_sm--20 col-lg-3 col-md-6 col-sm-6 col-12">
                 <div class="menu-wrapper">
                     <div class="menu-title">
                         <h6>Services</h6>
                     </div>
                     <ul class="menu-footer">
                         @foreach ($services as $service)
                             <li><a href="{{ url('service_details' . $service->id) }}">{{ $service->name }}</a></li>
                         @endforeach


                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="copyright text-center ptb--40 section-separator">
         <p class="description">{{$home->copyrighttext}}
                 </p>
     </div>
 </div>
 <!-- Rn footer area end -->
