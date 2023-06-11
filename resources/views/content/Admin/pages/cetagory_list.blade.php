@section('title', 'cetagory')

@extends('layouts.admin')
@section('content')

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
                                <th>Cetagory Name</th>
                              
                                <th>Icon_CDN</th>
                                <th>Update</th>
                                <th>Remove</th>

                            </tr>
                        </thead>

                        @foreach ($cetagory as $cetagory)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <h4>{{ $cetagory->cetagory_name }}</h4>
                                    </td>
                                   
                                    <td>
                                        <h6>{{ $cetagory->cetagory_icon }}</h6>
                                    </td>


                                    <td>
                                        <a class="dropdown-item" href="{{ url('update_cetagory_view', $cetagory->id) }}"><i
                                                class="bx bx-edit-alt me-2"></i>
                                            Edit</a>
                                    </td>

                                    <td>
                                        <a class="dropdown-item" href="{{ url('delete_cetagory', $cetagory->id) }}"><i
                                                class="bx bx-trash me-2"></i>
                                            Delete</a>
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
