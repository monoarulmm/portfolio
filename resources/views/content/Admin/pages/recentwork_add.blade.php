@section('title', 'add_hero')

@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <form action="{{ url('add_recentwork') }}" method="POST" enctype="multipart/form-data"> @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
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

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Work Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="title"
                                            placeholder="Your Work tite " />
                                    </div>

                                    @error('title')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Client</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="client"
                                            placeholder="Client " />
                                    </div>

                                    @error('client')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">architect</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="architect"
                                            placeholder="architect" />
                                    </div>

                                    @error('architect')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>
                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Location_with Work</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="location"
                                            placeholder="architect" />
                                    </div>

                                    @error('location')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>


                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Select Cetagory</label>
                                    <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="cetagory">

                                        @foreach ($cetagories as $cetagory)
                                            <option value="{{ $cetagory->cetagory_name }}">
                                                {{ $cetagory->cetagory_name }}
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










                                {{-- <div class="mb-3 row">
                                    <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                                    <div class="col-md-10">
                                      <input class="form-control" type="number" value="18" id="html5-number-input" />
                                    </div>
                                  </div> --}}


                                <div class="mb-3 row">
                                    <label for="html5-time-input" class="col-md-2 col-form-label">Time</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="time" value="12:30:00" id="html5-time-input"
                                            name="duration" />
                                    </div>

                                    @error('duration')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" value="2021-06-18" id="html5-date-input"
                                            name="completion" />
                                    </div>

                                    @error('completion')
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

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Thumbail_BIg Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image" />


                                    @error('image')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">SlidebarImage </label>
                                    <input class="form-control" type="file" id="formFile" name="image1" />


                                    @error('image1')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Cetagories Related Image </label>
                                    <input class="form-control" type="file" id="formFile" name="image2" />


                                    @error('image2')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Services Related Image </label>
                                    <input class="form-control" type="file" id="formFile" name="image3" />


                                    @error('image3')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Releted Projects Image_1 </label>
                                    <input class="form-control" type="file" id="formFile" name="image4" />


                                    @error('image4')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Releted Projects Image_2 </label>
                                    <input class="form-control" type="file" id="formFile" name="image5" />


                                    @error('image5')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Releted Projects Image_3 </label>
                                    <input class="form-control" type="file" id="formFile" name="image6" />


                                    @error('image6')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mt-2 mb-3">
                                    <label class="form-label">Work image</label>
                                    <input class="form-control form-control-lg" type="file" name="work" />

                                    @error('work')
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
