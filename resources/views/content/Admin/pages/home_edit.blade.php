@section('title', 'home_edit')
<base href="/public">
@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <form action="{{route('update_home',$home->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('patch')

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


                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home /</span>Inputs</h4>
                {{-- <form action="{{ route('add_hero') }}" method="POST" enctype="multipart/form-data">@csrf --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 ">
                            <div class="card-body">
                                <div>
                                    <label class="form-label">Author Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">


                                    @error('name')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>

                              
                                <div>
                                  <label for="exampleFormControlTextarea1" class="form-label">Author Profile bio</label>
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="bio"></textarea>


                                  @error('bio')
                                      <div class="text-denger">{{ $message }}</div>
                                  @enderror
                              </div>

                               

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Author Profile Image </label>
                                    <input class="form-control" type="file" id="formFile" name="image" />


                                    @error('image')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mt-2 mb-3">
                                  <label class="form-label">Logo</label>
                                  <input class="form-control form-control-lg" type="file" name="logo" />

                                  @error('logo')
                                      <div class="text-denger">{{ $message }}</div>
                                  @enderror


                              </div>


                              <div class="mb-3">
                                <label for="formFile" class="form-label">Copy right Text </label>
                                <input class="form-control" type="text" id="formFile" name="copyrighttext" placeholder="text copy right" />


                                @error('copyrighttext')
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
                                        <span class="input-group-text" id="basic-addon14">1st Socail Icon name
                                        </span>
                                        <input type="text" class="form-control" placeholder="icon name" name="icon1" />


                                        @error('icon1')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">2nd Socail Icon name
                                        </span>
                                        <input type="text" class="form-control"placeholder="icon name" name="icon2" />


                                        @error('icon2')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">3rd Socail Icon name
                                        </span>
                                        <input type="text" class="form-control"placeholder="icon name" name="icon3" />


                                        @error('icon3')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">4 Socail Icon name
                                        </span>
                                        <input type="text" class="form-control" placeholder="icon name" name="icon4" />


                                        @error('icon4')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14"> 5 Socail Icon name
                                        </span>
                                        <input type="text" class="form-control"placeholder="icon name" name="icon5" />


                                        @error('icon5')
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
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">4 Socaile Media
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL"
                                            name="socail_media_4" />


                                        @error('socail_media_4')
                                            <div class="text-denger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">5rd Socaile Media
                                        </span>
                                        <input type="text" class="form-control" placeholder="URL"
                                            name="socail_media_5" />


                                        @error('socail_media_5')
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
