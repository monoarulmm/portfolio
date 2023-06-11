<div id="home" class="rn-slider-area">
    <div class="slide slider-style-1">
        <div class="container">

 
                <div class="row row--30 align-items-center">
                    <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                        <div class="content">
                            <div class="inner">
                                <span class="subtitle">Welcome to my Site</span>
                                <h1 class="title">Hi, I’m <span> {{ $hero->title }}</span></span><br>
                                    <span class="header-caption" id="page-top">
                                        <!-- type headline start-->
                                        <span class="cd-headline clip is-full-width">
                                            <span>a </span>
                                            <!-- ROTATING TEXT -->
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible">{{ $hero->line1 }}</b>
                                                <b class="is-hidden">{{ $hero->line2 }}</b>
                                                <b class="is-hidden">{{ $hero->line3 }}</b>
                                            </span>
                                        </span>
                                        <!-- type headline end -->
                                    </span>
                                </h1>

                                <div>
                                    <p class="description">{{ $hero->description }}</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                    <div class="social-share-inner-left">
                                        <span class="title">find with me</span>
                                        <ul class="social-share d-flex liststyle">
                                            <li class="facebook"><a href="{{ $hero->socail_media_1 }}">

                                                    <i data-feather="{{ $hero->icon1 }}"></i>
                                                </a>
                                            </li>
                                            <li class="instagram"><a href="{{ $hero->socail_media_2 }}">
                                                    <i data-feather="{{ $hero->icon2 }}"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin"><a href="{{ $hero->socail_media_3 }}"><i
                                                        data-feather="{{ $hero->icon3 }}"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                    <div class="skill-share-inner">
                                        <div class="button-group text-center text-md-start pt--60 pt_md--40 pt_sm--40">
                                            <a class="rn-btn"download="My Cv"
                                                href="{{ '/storage/hero-images/' . $hero->download_cv }}"
                                                title="ImageName">
                                                <span>Download My CV</span></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 order-lg-2 col-lg-5">

                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="carousel-item inner active ">

                           
                                    <img src="{{ 'storage/hero-images/' . $hero->image }}" alt="image"
                                        style="width: 900px; height:600px;" class="rounded-lg ">
                              


                            </div>
                        </div>


                    </div>
                </div>
        

        </div>
    </div>
</div>



