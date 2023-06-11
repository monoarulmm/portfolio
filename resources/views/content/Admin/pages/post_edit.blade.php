@section('title', 'post_update')

<base href="/public">

@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="page-content ">

                @if (session()->has('message'))
                    <div class="alert alert-success">

                        {{ session()->get('message') }}

                    </div>
                @endif

                <h1 class="center">Add Post</h1>

                <form action="{{ url('/update_post_confirm', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center pt-7 text-blue-900">
                        <label for="">Post Title</label>
                        <input type="text" value="{{ $post->title }}" name="title">
                    </div>

                    <div class="text-center pt-7 text-blue-900">
                        <label for="">Post Description</label>
                        <input type="text" name="description" value="{{ $post->description }}">
                    </div>


                    <div class="center">
                        <label> Current Product Image : </label>

                        <img style="margin:auto;" src="/post/{{ $post->image }}" alt="">
                    </div>



                    <div class="center">
                        <label> Change Product Image : </label>
                        <input type="file" name="image" required="" class="text-black mt-10">

                    </div>



                    <div class="center">

                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>

                </form>

            </div>


        </div>
    </div>

@endsection
