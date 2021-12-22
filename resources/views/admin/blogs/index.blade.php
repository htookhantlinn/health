@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="container p-5">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center align-items-center">
                        <i class="fa fa-times-circle-o fa-4x" style="color: red;"></i>

                    </div>
                    <div class="modal-body">
                        <h1 class="text-center">Are You Sure?</h1>
                        <p class="text-center ">Do you really want to delete this records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <div id="modal-btn-yes"></div>
                    </div>
                </div>
            </div>
        </div>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{date('d-M-Y', strtotime($blog->created_at));}}</td>
                    <td>
                        <ul id="datatable-action">
                            <li>
                                <a href=" {{route('blogs.show',[$blog->id])}} ">
                                    <i class="fa fa-eye"></i> Preview
                                </a>
                            </li>
                            <li> <a href="#"> <span> <i class="fas fa-edit "></i> </span>Edit</a></li>

                            {{-- <li> <a href="#" onclick="confirmDeleteModal({{$blog->id}})"> <span> <i class="fa fa-trash"></i> </span>Delete</a></li> --}}

                            <li>

                                <a href="#" onclick="confirmBlogDeleteModal({{$blog->id}})" id="blog-delete-btn">
                                    <i class="fa fa-trash"></i> Delete
                                </a>


                                {{-- <form method="POST" action="{{route('blogs.destroy',[$blog->id])}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-outline-danger " onclick=" return confirm('Are you sure to delete?') ">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                                </form> --}}
                            </li>
                        </ul>

                    </td>
                </tr>
                @empty

                @endforelse

            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>


    </div>
</div>
@endsection
