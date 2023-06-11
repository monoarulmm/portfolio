@section('title', 'blog_update')

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

                <h1 class="center">Add blog</h1>

                <form action="{{ url('/update_blog_confirm', $blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                            Blog /</span>Update</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4 ">
                                <h5 class="card-header">Default</h5>
                                <div class="card-body">





                                    <div>
                                        <label class="form-label">blog_title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $blog->title }}"">


                                        @error('title')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>








                                    <div class="card h-100 mt-3">

                                        <img style="height:150px; width:100%;" class="img-fluid"
                                            src="/storage/blog/{{ $blog->image }}" alt="image">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Change Thumabail Image </label>
                                            <input class="form-control" type="file" id="formFile" name="image" />


                                            @error('image')
                                                <div class="text-denger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>







                                    <div>
                                        <label for="exampleFormControlTextarea1" class="form-label">blog description</label>
                                        <input type="text" class="form-control" value="{{ $blog->description }} rows="3"
                                            name="description">

                                        @error('description')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <div class="mt-3">
                                        <input type="submit" value="Submit" class=" btn btn-primary">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </form>

            </div>


        </div>
    </div>

@endsection
