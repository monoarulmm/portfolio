@section('title', 'add_class')

<base href="/public">
@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <form action="{{ url('/update_class_confirm', $class->id) }}" method="POST"
                enctype="multipart/form-data"> @csrf

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


                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Class _video /</span>Updated</h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 ">
                            <div class="card-body">


                                <div>
                                    <label class="form-label">Name_Of_Class</label>
                                    <input type="text" class="form-control" name="name" value="{{$class->name}}">


                                    @error('name')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div>
                                    <label class="form-label">title</label>
                                    <input type="text" class="form-control" name="title" value="{{$class->title}}">


                                    @error('title')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>




                                <div class="mb-3">
                                    <label for="formFile" class="form-label">thumbail_Image </label>
                                    <input class="form-control" type="file" id="formFile" name="image" />


                                    @error('image')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Select Cetagory</label>
                                    <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="cetagory">

                                        @foreach ($cetagories as $cetagory)
                                            <option value="{{ $cetagory->cetagory_name }}">{{ $cetagory->cetagory_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Select Service</label>
                                    <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="service">

                                        @foreach ($services as $service)
                                            <option value="{{ $service->name }}">{{ $service->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>





                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">Sevice description</label>
                                    <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="{{$class->description}}"/>


                                    @error('description')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <p> YouTube Video Link </p>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">1st Socail Icon cdn
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL" name="video_link" value="{{$class->video_link}}"/>


                                        @error('video_link')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>


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
