@section('title', 'profile_list')

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


                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile</th>
                                <th>Cover</th>

                            </tr>
                        </thead>

                        @foreach ($profile as $profile)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $profile->name }}
                                        </strong>
                                    </td>



                                    <td>
                                        {{ $profile->email }}
                                    </td>

                                    <td>
                                        <img style="width:50px;" src="/storage/profile_photo/{{ $profile->p_image }}"
                                            alt="product_image">
                                    </td>
                                    <td>
                                        <img style="width:90px; " src="/storage/cover_photo/{{ $profile->p_image }}"
                                            alt="product_image">
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
