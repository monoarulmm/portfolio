@section('title', 'service_list')

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


                                <th>service Name</th>
                                <th>Title</th>
                                <th>Update</th>
                                <th>Delete</th>

                            </tr>
                        </thead>

                        @foreach ($service as $service)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $service->name }}
                                        </strong>
                                    </td>



                                    <td>
                                        {{ $service->title }}
                                    </td>

                                    <td>
                                        <a class="dropdown-item" href="{{ url('update_service', $service->id) }}"><i
                                                class="bx bx-edit-alt me-2"></i>
                                            Edit</a>
                                    </td>





                                    <td>
                                        <a onclick="return confirm('Are You sure to Delete this service')"
                                            class="dropdown-item" href="{{ url('delete_service', $service->id) }}"><i
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
