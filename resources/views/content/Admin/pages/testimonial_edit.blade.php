@section('title', 'add_testimonial')

<base href="/public">
@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <form action="{{ url('/update_testimonial_confirm', $testimonial->id) }}" method="POST"
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

             


                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimonial /</span>Update</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 ">
                            <div class="card-body">


                                <div>
                                    <label class="form-label">Name_Of_Mentor</label>
                                    <input type="text" class="form-control" name="mentor_name" placeholder="Mentor Name">


                                    @error('mentor_name')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="smallInput" class="form-label">Mentor_Bio</label>
                                    <input id="smallInput" class="form-control form-control-sm" type="text"
                                        name="mentor_bio" placeholder=".form-control-sm" />

                                    @error('mentor_bio')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>




                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Mentor_Profile_Image </label>
                                    <input class="form-control" type="file" id="formFile" name="mentor_image" />


                                    @error('mentor_image')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Select Cetagory</label>
                                    <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="cetagory">

                                        @foreach ($cetagory as $cetagory)
                                            <option value="{{ $cetagory->cetagory_name }}">{{ $cetagory->cetagory_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div>
                                    <label for="smallInput" class="form-label">Cetagory_Bio</label>
                                    <input id="smallInput" class="form-control form-control-sm" type="text"
                                        name="cetagory_bio" placeholder=".form-control-sm" />

                                    @error('cetagory_bio')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">Short description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="cetagory_short_description"></textarea>


                                    @error('cetagory_short_description')
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
