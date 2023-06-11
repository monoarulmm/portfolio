@section('title', 'add_post_user')


@extends('layouts.base')

@section('content')


    <!-- header section start -->
    <div class="header_section">


        <div class="text-center text-[40px] pt-10  items-center ">

            @if (session()->has('message'))
                <div class="alert alert-success">

                    {{ session()->get('message') }}

                </div>
            @endif

            <h1 class="center">Update Post</h1>

            <div class="container">

                <div class="row">
                    <div data-aos-delay="600" class="col-lg-12 contact-input">
                        <div class="contact-form-wrapper ml--0">
                            <div class="introduce">
                                <form class=" row" action="{{ url('/update_post_confirm', $post->id) }}"
                                    method="POST" enctype="multipart/form-data">@csrf


                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Title</label>
                                            <input class="form-control form-control-sm"
                                                id="subject" name="title"  value="{{$post->title}}"
                                                type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Description
                                            </label>
                                            <textarea name="description" id="contact-message" cols="30" rows="10"  value="{{$post->description}}" ></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                        <label> Current Product Image : </label>
                    
                                        <img style="margin:auto;" src="/storage/post/{{ $post->image }}" alt="">
                                    </div>
                                </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Change  Picture</label>
                                            <input class="form-control form-control-sm"
                                                name="image" type="file">
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <button name="submit" type="submit"
                                            class="rn-btn">
                                            <span>Submit</span>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      

        </div>

    </div>
    <!-- header section end -->


@endsection
