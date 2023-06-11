@section('title', 'user_list')

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
                                <th> Name</th>
                                <th> email</th>
                                <th> user_id</th>

                            </tr>
                        </thead>
                        @foreach ($users as $user)
                            <tbody class="table-border-bottom-0">
                                <tr>

                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $user->name }}</strong>
                                    </td>

                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $user->email }}</strong>
                                    </td>

                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $user->id }}</strong>
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
