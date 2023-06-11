
@section('title', 'hero_list')

@extends('layouts.admin')
@section('content')




@section('content')
    @if (session()->has('destroy-success'))
        <div class="alert alert-success">

            {{ session()->get('destroy-success') }}

        </div>
    @endif


    @if (session()->has('destroy-error'))
        <div class="alert alert-success">

            {{ session()->get('destroy-error') }}

        </div>
    @endif




    <!-- Content wrapper -->


    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Section Name</th>
                                <th>Update</th>
                                <th>Remove</th>

                            </tr>
                        </thead>

                        @foreach ($list as $hero)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $hero->title }}</strong>
                                    </td>

                                    <td> <a class="dropdown-item" href="{{ url('edit_hero', $hero->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                        </a></td>



                                    <td>

                                        <form action="{{ route('destroy_hero', $hero->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <input class="btn btn-denger" type="submit" value="Delete">
                                        </form>


                                    </td>
                                </tr>

                            </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->



    @endsection
