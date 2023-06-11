@section('title', 'about_edit')
<base href="/public">
@extends('layouts.admin')
@section('content')


    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">


            <form action="{{route('update_about',$about->id)}}" method="POST" enctype="multipart/form-data">
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


              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About Section /</span>Inputs</h4>
              <div class="row">
                  <div class="col-md-6">
                      <div class="card mb-4 ">
                          <h5 class="card-header">Default</h5>
                          <div class="card-body">

                                <div class="mb-3 row">
                                  <p>Your Work Years of Experience</p>
                                  <label for="html5-number-input" class="col-md-2 col-form-label"> Year</label>
                                  <div class="col-md-10">
                                    <input class="form-control" type="number" value="08" id="html5-number-input" name="years" />
                                  </div>

                                  @error('years')
                                  <div class="text-denger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="mb-3 row">
                                 <p>Clients | satisfections</p>
                                  <label for="html5-number-input" class="col-md-2 col-form-label">Satisfied</label>
                                  <div class="col-md-10">
                                    <input class="form-control" type="number" value="18" id="html5-number-input" name="clients_satisfections" />
                                  </div>

                                  @error('clients_satisfections')
                                  <div class="text-denger">{{ $message }}</div>
                                @enderror
                                </div>


                          
                              <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Your Advantage</label>
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description"></textarea>


                                  @error('short_description')
                                      <div class="text-denger">{{ $message }}</div>
                                  @enderror
                              </div>


                              <div class="mb-3 row">
                                <label for="html5-number-input" class="col-md-2 col-form-label">Topic Name</label>
                                <div class="col-md-10">
                                  <input class="form-control" type="text"  id="html5-number-input" name="skill_1" />
                                </div>

                                @error('skill_1')
                                <div class="text-denger">{{ $message }}</div>
                                @enderror
                              </div>

                              <div class="mb-3 row">
                                <label for="html5-number-input" class="col-md-2 col-form-label">Skill Percentage</label>
                                <div class="col-md-10">
                                  <input class="form-control" type="number" value="90" id="html5-number-input" name="percent_1" />
                                </div>

                                @error('percent_1')
                                <div class="text-denger">{{ $message }}</div>
                                @enderror
                              </div>


                              <div class="mb-3 row">
                                <label for="html5-number-input" class="col-md-2 col-form-label">Topic Name</label>
                                <div class="col-md-10">
                                  <input class="form-control" type="text"  id="html5-number-input" name="skill_6" />
                                </div>

                                @error('skill_6')
                                <div class="text-denger">{{ $message }}</div>
                                @enderror
                              </div>

                              <div class="mb-3 row">
                                <label for="html5-number-input" class="col-md-2 col-form-label">Skill Percentage</label>
                                <div class="col-md-10">
                                  <input class="form-control" type="number" value="90" id="html5-number-input" name="percent_6" />
                                </div>

                                @error('percent_6')
                                <div class="text-denger">{{ $message }}</div>
                                @enderror
                              </div>

                          </div>
                      </div>

                  </div>



                  <div class="col-xl-6">
                      <div class="card">
                          <div class="card-body">

                            <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Topic Name</label>
                              <div class="col-md-10">
                                <input class="form-control" type="text"  id="html5-number-input" name="skill_2" />
                              </div>

                              @error('skill_2')
                              <div class="text-denger">{{ $message }}</div>
                              @enderror
                            </div>

                            <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Skill Percentage</label>
                              <div class="col-md-10">
                                <input class="form-control" type="number" value="90" id="html5-number-input" name="percent_2" />
                              </div>

                              @error('percent_2')
                              <div class="text-denger">{{ $message }}</div>
                              @enderror
                            </div>


                          <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Topic Name</label>
                              <div class="col-md-10">
                                <input class="form-control" type="text"  id="html5-number-input" name="skill_3" />
                              </div>

                              @error('skill_3')
                              <div class="text-denger">{{ $message }}</div>
                              @enderror
                            </div>

                            <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Skill Percentage</label>
                              <div class="col-md-10">
                                <input class="form-control" type="number" value="90" id="html5-number-input" name="percent_3" />
                              </div>

                              @error('percent_3')
                              <div class="text-denger">{{ $message }}</div>
                              @enderror
                            </div>

                            
                          
                            <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Topic Name</label>
                              <div class="col-md-10">
                                <input class="form-control" type="text"  id="html5-number-input" name="skill_4" />
                              </div>

                              @error('skill_4')
                              <div class="text-denger">{{ $message }}</div>
                              @enderror
                            </div>

                            <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Skill Percentage</label>
                              <div class="col-md-10">
                                <input class="form-control" type="number" value="90" id="html5-number-input" name="percent_4" />
                              </div>

                              @error('percent_4')
                              <div class="text-denger">{{ $message }}</div>
                              @enderror
                            </div>
                            
                    
                            <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Topic Name</label>
                              <div class="col-md-10">
                                <input class="form-control" type="text"  id="html5-number-input" name="skill_5" />
                              </div>

                              @error('skill_5')
                              <div class="text-denger">{{ $message }}</div>
                              @enderror
                            </div>

                            <div class="mb-3 row">
                              <label for="html5-number-input" class="col-md-2 col-form-label">Skill Percentage</label>
                              <div class="col-md-10">
                                <input class="form-control" type="number" value="90" id="html5-number-input" name="percent_5" />
                              </div>

                              @error('percent_5')
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
