@section('title', 'add_service')

<base href="/public">
@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

            <form action="{{ url('update_service_confirm', $service->id) }}" method="POST" enctype="multipart/form-data">@csrf

                @if (session()->has('success'))
                    <div class="alert alert-danger">
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
                        Service/</span>update</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 ">

                            <div class="card-body">
                                <div>
                                    <label class="form-label">Name_Of_Service</label>
                                    <input type="text" class="form-control" name="name" value="{{ $service->name }}"
                                        @error('name')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                        </div>

                                    <div>
                                        <label class="form-label">Service_title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $service->title }}">


                                        @error('title')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="card h-100 mt-3">

                                        <img style="height:150px; width:100%;" class="img-fluid"
                                            src="/storage/service/{{ $service->image }}" alt="image">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Change Thumabail Image </label>
                                            <input class="form-control" type="file" id="formFile" name="image" />


                                            @error('image')
                                                <div class="text-denger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Select Cetagory</label>
                                        <select class="form-select" aria-label="Default select example" name="cetagory"
                                            value="{{ $service->cetagory }}">

                                            @foreach ($cetagories as $cetagory)
                                                <option value="{{ $cetagory->cetagory_name }}">
                                                    {{ $cetagory->cetagory_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label for="exampleFormControlTextarea1" class="form-label">Sevice
                                            description</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                            rows="3" name="description" value="{{ $service->description }}">


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
