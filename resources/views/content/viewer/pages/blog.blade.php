@section('title', 'blog')

@extends('layouts.base')
@section('content')









    <!-- Start News Area -->
    <div class="rn-blog-area rn-section-gap section-separator" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                        class="section-title text-center">
                        <span class="subtitle">Visit my blog and keep your feedback</span>
                        <h2 class="title">My Blog</h2>
                    </div>
                </div>
            </div>

            <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                @foreach ($blogs as $blog)
                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                        class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img style="width:750px; height:250px;" src="/storage/blog/{{ $blog->image }}"
                                            alt="product_image">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Monoar</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">{{ $blog->name }}
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->
                @endforeach
            </div>

            <div class="pagination-wrapper pagination-wrapper-left">
                {{ $blogs->links('vendor.pagination.bootstrap-5') }}
            </div>



        </div>
    </div>


@endsection
