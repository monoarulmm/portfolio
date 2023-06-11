@section('title', 'update_cetagory')
<base href="/public">
@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

            <form action="{{ url('update_cetagory', $cetagory->id) }}" method="POST">@csrf

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
                        Categories /</span>Update</h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 ">
                      
                            <div class="card-body">




                                <div class="mt-3">
                                    <label class="form-label">Name_Of_Sector</label>
                                    <input type="text" class="form-control" name="cetagory_name" value="{{$cetagory->cetagory_name}}">


                                    @error('cetagory_name')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mt-3">
                                    <p> Cetagory_icon </p>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14"> Icon cdn
                                        </span>
                                        <input type="text" class="form-control" value="{{$cetagory->cetagory_icon}}" name="cetagory_icon" />


                                        @error('cetagory_icon')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="card h-100 mt-3">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/cetagory/image/{{ $cetagory->image }}" alt="image">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Change Thumabail Image </label>
                                        <input class="form-control" type="file" id="formFile" name="image" />


                                        @error('image')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>




                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label">Cetagory_short_Description</label>
                                    <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="2" name="short_description" value="{{$cetagory->short_description}}">


                                    @error('short_description')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Our capabilities</label>
                                    <input class="form-control" id="exampleFormControlTextarea1" rows="2" name="capabilities"    value="{{$cetagory->capabilities}}"/>


                                    @error('capabilities')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line"
                                        value="{{$cetagory->line}}"/>
                                    </div>

                                    @error('line')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line1"
                                        value="{{$cetagory->line1}}" />
                                    </div>

                                    @error('line1')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line2"
                                        value="{{$cetagory->line2}}" />
                                    </div>

                                    @error('line2')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line3"
                                        value="{{$cetagory->line3}}" />
                                    </div>

                                    @error('line3')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line4</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line4"
                                        value="{{$cetagory->line4}}" />
                                    </div>

                                    @error('line4')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>




                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Our work Process</label>
                                    <input class="form-control" id="exampleFormControlTextarea1" rows="2" name="workprocess"    value="{{$cetagory->workprocess}}"/>


                                    @error('workprocess')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line5</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line5"
                                        value="{{$cetagory->line5}}"/>
                                    </div>

                                    @error('line5')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line6</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line6"
                                        value="{{$cetagory->line6}}" />
                                    </div>

                                    @error('line6')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line7</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line7"
                                        value="{{$cetagory->line7}}" />
                                    </div>

                                    @error('line8')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line8</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line8"
                                        value="{{$cetagory->line8}}" />
                                    </div>

                                    @error('line8')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line9</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line9"
                                        value="{{$cetagory->line9}}" />
                                    </div>

                                    @error('line9')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <input class="form-control" id="exampleFormControlTextarea1" rows="4" name="description"    value="{{$cetagory->description}}" />


                                    @error('description')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="card h-100 mt-3">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/cetagory/image1/{{ $cetagory->image1 }}" alt="image">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Change Thumabail Image1 </label>
                                        <input class="form-control" type="file" id="formFile" name="image1" />


                                        @error('image1')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                


                                <div class="card h-100 mt-3">

                                    <img style="height:150px; width:100%;" class="img-fluid"
                                        src="/storage/cetagory/image2/{{ $cetagory->image2 }}" alt="image">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Change Thumabail Image </label>
                                        <input class="form-control" type="file" id="formFile" name="image2" />


                                        @error('image2')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                       


                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Our approach</label>
                                    <input class="form-control" id="exampleFormControlTextarea1" rows="2" name="approach"    value="{{$cetagory->approach}}"/>


                                    @error('approach')
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
