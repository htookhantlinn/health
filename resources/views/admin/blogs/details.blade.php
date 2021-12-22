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
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped table-responsive article-table">
                        <tbody>
                            <tr>
                                <td class="head">Content:</td>
                                <td>
                                    {!! $blog->description !!}
                                </td>
                            </tr>
                            <tr>
                                <td class="head">Date:</td>
                                <td>{{date('d-M-Y', strtotime($blog->created_at));}}</td>
                            </tr>

                            <tr>
                                <td class="head">Title:</td>
                                <td>{{$blog->title}}</td>
                            </tr>

                            <tr>
                                <td class="head">Action:</td>
                                <td>
                                    <ul id="preview-action">
                                        <li> <a href="#"> <span> <i class="fas fa-edit "></i> </span>Edit</a></li>
                                        <li>
                                            <a href="#" onclick="confirmBlogDeleteModal({{$blog->id}})" id="blog-delete-btn"> <i class="fa fa-trash"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
