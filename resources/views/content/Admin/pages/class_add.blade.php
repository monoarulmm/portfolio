@section('title', 'add_service')

@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

            <form action="{{ url('add_class') }}" method="POST" enctype="multipart/form-data">@csrf

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
                        Class Video /</span>input</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4 ">
                                    <div class="card-body">
        
        
                                        <div>
                                            <label class="form-label">Name_Of_Class</label>
                                            <input type="text" class="form-control" name="name" placeholder="Class  Name">
        
        
                                            @error('name')
                                                <div class="text-denger">{{ $message }}</div>
                                            @enderror
                                        </div>
        
        
        
                                        <div>
                                            <label class="form-label">title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Class title">
        
        
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
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        
        
                                            @error('description')
                                                <div class="text-denger">{{ $message }}</div>
                                            @enderror
                                        </div>
        
                                        <div>
                                            <p> YouTube Video Link </p>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon14">1st Socail Icon cdn
                                                </span>
                                                <input type="text" class="form-control" placeholder="URL" name="video_link" />
        
        
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
