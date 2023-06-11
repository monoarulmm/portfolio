@section('title', 'add_hero')

@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

            <form action="{{ url('add_cetagory') }}" method="POST" enctype="multipart/form-data">@csrf

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
                        Category</span>input</h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 ">
                            <div class="card-body">
                                <div class="mt-3">
                                    <label class="form-label">Name_Of_Category</label>
                                    <input type="text" class="form-control" name="cetagory_name" placeholder="Add Cetagory">


                                    @error('cetagory_name')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mt-3">
                                    <p> Cetagory_icon </p>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14"> Icon cdn
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL" name="cetagory_icon" />


                                        @error('cetagory_icon')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mt-3">
                                    <label for="formFile" class="form-label">Thumbail_BIg Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image" />


                                    @error('image')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label">Cetagory_short_Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="short_description"></textarea>


                                    @error('short_description')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Our capabilities</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="capabilities"></textarea>


                                    @error('capabilities')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line"
                                            placeholder="architect" />
                                    </div>

                                    @error('line')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line1"
                                            placeholder="architect" />
                                    </div>

                                    @error('line1')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line2"
                                            placeholder="architect" />
                                    </div>

                                    @error('line2')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line3"
                                            placeholder="architect" />
                                    </div>

                                    @error('line3')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line4</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line4"
                                            placeholder="architect" />
                                    </div>

                                    @error('line4')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>




                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Our work Process</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="workprocess"></textarea>


                                    @error('workprocess')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line5</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line5"
                                            placeholder="architect" />
                                    </div>

                                    @error('line5')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line6</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line6"
                                            placeholder="architect" />
                                    </div>

                                    @error('line6')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line7</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line7"
                                            placeholder="architect" />
                                    </div>

                                    @error('line8')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line8</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line8"
                                            placeholder="architect" />
                                    </div>

                                    @error('line8')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Line9</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="html5-text-input" name="line9"
                                            placeholder="architect" />
                                    </div>

                                    @error('line9')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description"></textarea>


                                    @error('description')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mt-3">
                                    <label for="formFile" class="form-label">Image1</label>
                                    <input class="form-control" type="file" id="formFile" name="image1" />


                                    @error('image1')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label for="formFile" class="form-label">Image2</label>
                                    <input class="form-control" type="file" id="formFile" name="image2" />


                                    @error('image2')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Our approach</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="approach"></textarea>


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
