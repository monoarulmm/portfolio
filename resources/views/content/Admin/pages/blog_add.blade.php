@section('title', 'add_blog_admin')

@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

            <form action="{{ url('add_blog') }}" method="post" enctype="multipart/form-data">@csrf

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif




                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                        Blog /</span>input</h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 ">
                            <h5 class="card-header">Default</h5>
                            <div class="card-body">





                                <div>
                                    <label class="form-label">blog_title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Mentor Name">


                                    @error('title')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>






                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image </label>
                                    <input class="form-control" type="file" id="formFile" name="image" />


                                    @error('image')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>








                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">blog description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>


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
@endsection
