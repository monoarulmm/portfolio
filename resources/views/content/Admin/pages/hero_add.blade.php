@section('title', 'add_hero')

@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <form action="{{ route('form_store') }}" method="POST" enctype="multipart/form-data"> @csrf

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


                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hero Section /</span>Inputs</h4>
                {{-- <form action="{{ url('add_hero') }}" method="POST" enctype="multipart/form-data">@csrf --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 ">
                            <h5 class="card-header">Default</h5>
                            <div class="card-body">
                                <div>
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Your Name">


                                    @error('title')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="form-label">subtitle1</label>
                                    <input type="text" class="form-control" name="line1"
                                        placeholder=" Your first skills input" />

                                    @error('line1')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="form-label">subtitle2</label>
                                    <input type="text" class="form-control" name="line2"
                                        placeholder="Your second skills input!" />

                                    @error('line2')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="form-label">subtitle3</label>
                                    <input type="text" class="form-control" name="line3"
                                        placeholder="Your Third skills input!" />

                                    @error('line3')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">image </label>
                                    <input class="form-control" type="file" id="formFile" name="image" />


                                    @error('image')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>


                                    @error('description')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                    </div>



                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <div>
                                    <p> Socail Icon </p>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">1st Socail Icon cdn
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL" name="icon1" />


                                        @error('icon1')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">2nd Socail Icon cdn
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL" name="icon2" />


                                        @error('icon2')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">3rd Socail Icon cdn
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL" name="icon3" />


                                        @error('icon3')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mt-3">
                                    <p> Socail Media Link </p>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">1st Socail Media
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL"
                                            name="socail_media_1" />


                                        @error('socail_media_1')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">2nd Socail Media
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL"
                                            name="socail_media_2" />


                                        @error('socail_media_2')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">3rd Socaile Media
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL"
                                            name="socail_media_3" />


                                        @error('socail_media_3')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-2 mb-3">
                                    <label class="form-label">Download any of your file input with image</label>
                                    <input class="form-control form-control-lg" type="file" name="download_cv" />

                                    @error('download_cv')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>




                                <div class="mt-3">
                                    <input type="submit" value="Submit" class=" btn btn-primary">
                                    <input type="reset" value="Reset" class=" btn btn-gray">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
