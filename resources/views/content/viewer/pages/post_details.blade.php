@section('title', 'post_details')

@extends('layouts.base')
@section('content')


    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="/storage/post/{{ $post->image }}" alt="image">
                            </div>
                        </div>

                        <div class="post format-standard">
                            <div class="entry-meta">
                                <ul>

                                    <li><i class="fi flaticon-user"></i> By <a href="#">{{ $post->name }}</a> </li>


                                </ul>
                            </div>
                            <div class="entry-details">
                                <h3>
                                    {{ $post->title }}
                                </h3>
                                <p>{{ $post->description }}</p>

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
                                                                Comments {{ $total_comment }}</li>
                                                            <li><i class="fi flaticon-comment-white-oval-bubble"></i>
                                                                Reply {{ $total_reply }} </li>
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

                                                                                    {{-- <img style="width: 75%;"  src="{{asset('assets/images/blog-details/comments-author/profile_1.jpg')}}"> --}}


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

                                                                                                        {{-- <img style="width: 75%;" src="{{asset('assets/images/blog-details/comments-author/profile_1.jpg')}}"> --}}


                                                                                                        @if ($replys->image)
                                                                                                        <img style="width:50px; height:50px;"
                                                                                                        src="/storage/profile_photo/{{ $replys->image }}"
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


                                                        {{-- <div class="row mt--40">
                                                            <div class="col-12 text-center">
                                                                <a class="rn-btn" href="#">More Comments <i
                                                                        class="feather-loader"></i></a>
                                                            </div>
                                                        </div> --}}
                                                        


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end-comment_rep;ay-single-section -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->






@endsection
