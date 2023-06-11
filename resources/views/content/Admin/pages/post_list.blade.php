@section('title', 'post_list')

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
                                <th>Post - Title</th>
                                <th>Status</th>
                                {{-- <th>Update</th> --}}
                                <th>Accept</th>
                                <th>Reject</th>
                                <th>Delete</th>

                            </tr>
                        </thead>

                        @foreach ($postes as $post)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $post->name }}
                                        </strong>
                                    </td>

                                    <td>{{ $post->title }}</td>

                                    <td>
                                        {{ $post->description }}
                                    </td>

                                    <td><span class="badge bg-label-primary me-1">{{ $post->post_status }}</span></td>





                                    <td>
                                        <a onclick="return confirm('Are You sure to accept this post')"
                                            href="{{ url('accept_post', $post->id) }}" class="btn btn-primary">Accept</a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Are You sure to reject this post')"
                                            href="{{ url('reject_post', $post->id) }}" class="btn btn-primary">Regect</a>
                                    </td>

                                    <td>
                                        <a onclick="return confirm('Are You sure to Delete this post')"
                                            class="dropdown-item" href="{{ url('delete_post', $post->id) }}"><i
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
