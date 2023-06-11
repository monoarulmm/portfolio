@section('title', 'add_recentWork')

<base href="/public">
@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <form action="{{ url('/update_recentwork_confirm', $recentwork->id) }}" method="POST"
                enctype="multipart/form-data"> @csrf

                @if (session()->has('success'))
                    {{ session()->get('success') }}
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

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 ">
                            <h5 class="card-header">Default</h5>
                            <div class="card-body">

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Work Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="title"
                                            value="{{ $recentwork->title }}" />
                                    </div>

                                    @error('title')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Client</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="client"
                                            value="{{ $recentwork->client }}" />
                                    </div>

                                    @error('client')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">architect</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="architect"
                                            value="{{ $recentwork->architect }}" />
                                    </div>

                                    @error('architect')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>
                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Location_with Work</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="location"
                                            value="{{ $recentwork->location }}" />
                                    </div>

                                    @error('location')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>


                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Select Cetagory</label>
                                    <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="cetagory"
                                        value="{{ $recentwork->cetagory }}">

                                        @foreach ($cetagories as $cetagory)
                                            <option value="{{ $cetagory->cetagory_name }}">
                                                {{ $cetagory->cetagory_name }}
                                            </option>
                                        @endforeach

                                        @error('cetagory')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Select Service</label>
                                    <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="service"
                                        value="{{ $recentwork->service }}">

                                        @foreach ($services as $service)
                                            <option value="{{ $service->name }}">{{ $service->name }}
                                            </option>
                                        @endforeach

                                        @error('service')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror

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
                                            name="duration" value="{{ $recentwork->duration }}" />
                                    </div>

                                    @error('duration')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" value="2021-06-18" id="html5-date-input"
                                            name="completion" value="{{ $recentwork->completion }}" />
                                    </div>

                                    @error('completion')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>





                                <div class="mt-2 mb-3">
                                    <label for="largeInput" class="form-label">Description</label>
                                    <input id="largeInput" class="form-control form-control-lg" type="text"
                                        value="{{ $recentwork->description }}" />
                                    @error('description ')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>




                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/image/{{ $recentwork->image }}" alt="image">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Change SlidebarImage </label>
                                        <input class="form-control" type="file" id="formFile" name="image" />


                                        @error('image')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/work/{{ $recentwork->work }}" alt="image">
                                    <div class="mt-2 mb-3">
                                        <label class="form-label">Work image</label>
                                        <input class="form-control form-control-lg" type="file" name="work" />

                                        @error('work')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">



                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/image6/{{ $recentwork->image6 }}" alt="image">

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Releted Projects Image_3 </label>
                                        <input class="form-control" type="file" id="formFile" name="image6" />


                                        @error('image6')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/image5/{{ $recentwork->image5 }}" alt="image">

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Releted Projects Image_2 </label>
                                        <input class="form-control" type="file" id="formFile" name="image5" />


                                        @error('image5')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/image4/{{ $recentwork->image4 }}" alt="image">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Releted Projects Image_1 </label>
                                        <input class="form-control" type="file" id="formFile" name="image4" />


                                        @error('image4')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/image3/{{ $recentwork->image3 }}" alt="image">

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Services Related Image </label>
                                        <input class="form-control" type="file" id="formFile" name="image3" />


                                        @error('image3')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/image2/{{ $recentwork->image2 }}" alt="image">


                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Cetagories Related Image </label>
                                        <input class="form-control" type="file" id="formFile" name="image2" />


                                        @error('image2')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>




                                <div class="card h-100">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/recentwork/image1/{{ $recentwork->image1 }}" alt="image">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Change SlidebarImage </label>
                                        <input class="form-control" type="file" id="formFile" name="image1" />


                                        @error('image1')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
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
