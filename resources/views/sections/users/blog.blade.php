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
                                        <img style="width:750px; height:250px;" src="/storage/blog/{{ $blog->image }}" alt="product_image">
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
                                                   <div class="row mt--40">
                                                        <div class="col-12 text-center">
                                                            <a class="rn-btn" href="{{url('user/blog')}}">More<i
                                                                    class="feather-loader"></i></a>
                                                        </div>
                                                    </div>
                <!-- Modal Blog Body area Start -->
                <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i data-feather="x"></i></span>
                                </button>
                            </div>

                            <!-- End of .modal-header -->


                            <!-- start-comment_rep;ay-single-section -->
                            <div class="wpo-blog-single-section section-padding">
                                <div class="container">
                                    <div class="row">
                                        <div class="col  col-12">
                                            <div class="contact-form-wrapper">
                                                <div style="text-align: center; padding-bottom:30px">
                                                    <form action="{{ route('add_comment') }}" method="POST">@csrf
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="contact-message">Your Comments</label>
                                                                <textarea placeholder="commets here"name="comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input type="submit" class="rn-btn" value="Comment">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col  col-12">
                                            <div class="wpo-blog-content contact-form-wrapper">

                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i>
                                                            Comments {{$total_comment}}</li>
                                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i>
                                                            Reply {{$total_reply}} </li>
                                                    </ul>
                                                </div>
                                                <div class="comments-area">

                                              
                                                    <div class="comments-section">
                                                        <ol class="comments">
                                                            <li class="comment even thread-even depth-1" id="comment-1">
                                                                @foreach ($comment as $comment)
                                                                    <div id="div-comment-1">
                                                                        <div class="comment-theme">
                                                                            <div class="comment-image">
                                                                                @if ($comment->image)
                                                                                <img style="width:50px; height:50px;"
                                                                                    src="/storage/profile_photo/{{ $comment->image }}"
                                                                                    alt="profile_image">
                                                                            @else
                                                                                <img style="width:50px; height:50px;"
                                                                                    src="{{ asset('assets/images/profile.png') }}"
                                                                                    alt="profile_image">
                                                                            @endif

                                                                                   
                                                                            </div>
                                                                        </div>
                                                                        <div class="comment-main-area">
                                                                            <div class="comment-wrapper">
                                                                                <div class="comments-meta">
                                                                                    <b>{{ $comment->name }}</b>
                                                                                    <p>{{ $comment->comment }}</p>
                                                                                    <a href="javascript::void(0)"
                                                                                        onclick="reply(this)"
                                                                                        data-Comment_id="{{ $comment->id }}">Reply</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @foreach ($reply as $replys)
                                                                            @if ($replys->comment_id == $comment->id)
                                                                                <ul class="children">
                                                                                    <li class="comment">
                                                                                        <div>
                                                                                            <div class="comment-theme">
                                                                                                <div
                                                                                                    class="comment-image">
                                                                                                    @if ($comment->image)
                                                                                                    <img style="width:50px; height:50px;"
                                                                                                        src="/storage/profile_photo/{{ $comment->image }}"
                                                                                                        alt="profile_image">
                                                                                                @else
                                                                                                    <img style="width:50px; height:50px;"
                                                                                                        src="{{ asset('assets/images/profile.png') }}"
                                                                                                        alt="profile_image">
                                                                                                @endif
            
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="comment-main-area">
                                                                                                <div
                                                                                                    class="comment-wrapper">
                                                                                                    <div
                                                                                                        class="comments-meta">
                                                                                                        <b>{{ $replys->name }}</b>
                                                                                                    </div>

                                                                                                    <p>{{ $replys->reply }}
                                                                                                    </p>

                                                                                                    <a href="javascript::void(0)"
                                                                                                        onclick="reply(this)"
                                                                                                        data-Comment_id="{{ $comment->id }}">Reply</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            @endif
                                                                        @endforeach
                                                                @endforeach
                                                                <div style="display:none;" class="replyDiv">
                                                                    <form action="{{ route('add_reply') }}"
                                                                        method="POST">@csrf
                                                                        <input type="text" id="commentId"
                                                                            name="commentId" hidden>
                                                                        <textarea placeholder="write " name="reply"></textarea><br>

                                                                        {{-- <button type="submit" class="btn btn-primary">Reply</button> --}}

                                                                        <input type="submit" value="Reply"
                                                                            class="btn ">

                                                                        <input type="reset"
                                                                            onclick="reply_close(this)" value="X"
                                                                            class="btn btn-close">
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end-comment_rep;ay-single-section -->
                        </div>
                    </div>
                    <!-- End Modal Blog area -->
                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->
